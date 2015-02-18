'use strict'

// Foundation for Emails
//
// The tasks are grouped into these categories:
//   1. Libraries
//   2. Variables
//   3. Cleaning files
//   4. Stylesheets
//   5. HTML
//   6. Syntax Transformer
//   7. GO FORTH AND BUILD
//   8. Serve/Watch Tasks

// 1. LIBRARIES
// - - - - - - - - - - - - - - -

var gulp       = require('gulp'),
    sass       = require('gulp-ruby-sass'),
    html2txt   = require('gulp-html2txt'),
    inlineCss  = require('gulp-inline-css'),
    rename     = require('gulp-rename'),
    connect    = require('gulp-connect'),
    minifyHTML = require('gulp-minify-html'),
    concat     = require('gulp-concat'),
    extractMQ  = require('media-query-extractor'),
    inject     = require('gulp-inject'),
    inkyGulp   = require('gulp-inky'),
    rimraf     = require('rimraf');

// 2. VARIABLES
// - - - - - - - - - - - - - - -

var dirs = {
  styles: 'scss/*.scss',
  html: 'html/*.html',
  build: './build',
  spec: './spec'
};

// 3. CLEANIN' FILES
// - - - - - - - - - - - - - - -

// Clean build directory
gulp.task('clean', function(cb) {
  rimraf(dirs.build, cb);
});


// 4. STYLESHEETS
// - - - - - - - - - - - - - - -

// Compile SASS files
gulp.task('sass', function() {
  return gulp.src(dirs.styles)
    .pipe(sass({ "sourcemap=none": true, style: 'compact' }))
    .pipe(gulp.dest(dirs.build + '/css'))
    .pipe(connect.reload())
});

// Inline Styles
gulp.task('inline', function() {
  return gulp.src(dirs.build + '/*.html')
    .pipe(inlineCss())
    .pipe(rename({
      suffix: '-inline'
    })
    .pipe(gulp.dest(dirs.build))
});

// extract media queries into new CSS file called inkMQ.css
// any remaining styles will go into ink-noMQ.css
gulp.task('extract-mq', function () {
  extractMQ( dirs.build + '/css/ink.css', dirs.build + '/css/ink-noMQ.css', ['only screen and (max-width: 600px)|./build/css/inkMQ.css']);
});

// inject media queries into the head of the inlined email
gulp.task('inject-mq', ['extract-mq'], function() {
  gulp.src(dirs.build + '/index-inline.html')
    .pipe(inject(gulp.src(dirs.build + '/css/inkMQ.css'), {
      starttag: '<!-- inject:mq-css -->',
      transform: function (filePath, file) {
        // return file contents as string
        return "<style>\n" + file.contents.toString('utf8') + "\n</style>"
      }
    }))
    .pipe(gulp.dest('./build'));
})



// 5. HTML
// - - - - - - - - - - - - - - -

// Minify and smoosh together HTML
gulp.task('minify-html', function() {
  var opts = {
    comments: false,
    spare: true
  };

  gulp.src(dirs.build)
    .pipe(minifyHTML(opts))
    .pipe(connect.reload())
});

// Convert HTML to plain text, just in caseies
gulp.task('html-plaintext', function() {
  gulp.src(dirs.html)
    .pipe(html2txt())
    .pipe(rename(function(path) {
      path.basename += '-plaintext'
    }))
    .pipe(gulp.dest(dirs.build));
});

// Task to copy HTML directly, without minifying
gulp.task('copy-html', function() {
  return gulp.src(dirs.html)
  .pipe(gulp.dest(dirs.build))
  .pipe(connect.reload())
});

// 6. Syntax Transformer
// - - - - - - - - - - - - - - -

// get the HTML from the body and run it through Inky parser

gulp.task('query', function() {
  gulp.src(dirs.html)
    .pipe(inkyGulp())
    .pipe(gulp.dest(dirs.build))
    .pipe(connect.reload());
});

// 7. Testing
// - - - - - - - - - - - - - - -

// Eventual Litmus/Mailgun integration
gulp.task('test', function () {

});

// 8. GO FORTH AND BUILD
// - - - - - - - - - - - - - - -

// Wipes build folder, then compiles SASS, then minifies and copies HTML
gulp.task('build', ['clean', 'sass', 'query'], function() {
  gulp.start('minify-html');
});

// 9. Serve/Watch Tasks
// - - - - - - - - - - - - - - -

// Starts a server
// Default Port: 8080
gulp.task('serve', function() {
  return connect.server({
    root: dirs.build,
    livereload: true
  });
});

// Start a server
// Watch all HTML files and SCSS files for changes
// Live reloads on change
gulp.task('watch', ['serve'], function() {
  gulp.watch([dirs.html], ['query','minify-html']);
  gulp.watch([dirs.styles], ['sass']);
});


gulp.task('deploy', ['minify-html', 'inline'], function() {
  gulp.start('inject-mq');
});
// Default task
gulp.task('default', ['serve', 'watch']);
