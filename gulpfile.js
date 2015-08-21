'use strict'

// Foundation for Emails
//
// The tasks are grouped into these categories:
//   1. Libraries
//   2. Variables
//   3. Cleaning files
//   4. Stylesheets
//   5. HTML
//   6. Testing
//   7. Utility Tasks

// 1. LIBRARIES
// - - - - - - - - - - - - - - -

var gulp       = require('gulp'),
    // Gulp utilities
    rename     = require('gulp-rename'),
    connect    = require('gulp-connect'),
    path       = require('path'),
    map        = require('vinyl-map'),
    fs         = require('fs'),
    rimraf     = require('rimraf'),
    // HTML stuff
    minifyHTML = require('gulp-minify-html'),
    inkyGulp   = require('gulp-inky'),
    Handlebars = require('handlebars'),
    globLobLaw = require('glob'),
    // CSS stuff
    extractMQ  = require('media-query-extractor'),
    inject     = require('gulp-inject'),
    sass       = require('gulp-ruby-sass'),
    inlineCss  = require('gulp-inline-css');

// 2. VARIABLES
// - - - - - - - - - - - - - - -

var dirs = {
  styles: './scss',
  dist: './dist',
  spec: './spec',
  src: './src',
  temp: './temp'
};

// 3. CLEANIN' FILES
// - - - - - - - - - - - - - - -

// Clean dist directory
gulp.task('clean:dist', function(cb) {
  rimraf(dirs.dist, cb);
});

// Clean temp directory
gulp.task('clean:inline', function(cb) {
  rimraf(dirs.dist + '/inline', cb);
});


// 4. STYLESHEETS
// - - - - - - - - - - - - - - -

// Compile SASS files
gulp.task('sass', function() {
  return gulp.src(dirs.styles + '/**/*.scss')
    .pipe(sass({ "sourcemap=none": true, style: 'compact' }))
    .pipe(gulp.dest(dirs.dist + '/css'))
    .pipe(connect.reload())
});

// Inline Styles
gulp.task('inline', ['clean:inline'], function() {
  return gulp.src(dirs.dist + '/*.html')
    .pipe(inlineCss())
    .pipe(rename({
      suffix: '-inline'
    }))
    .pipe(gulp.dest(dirs.dist + '/inline'))
});

// extract media queries into new CSS file called inkMQ.css
// any remaining styles will go into ink-noMQ.css
gulp.task('extract-mq', function () {
  extractMQ( dirs.dist + '/css/ink.css', dirs.dist + '/css/ink-noMQ.css', ['only screen and (max-width: 600px)|./dist/css/inkMQ.css']);
});

// inject media queries into the head of the inlined email
gulp.task('inject-mq', ['extract-mq'], function() {
  gulp.src(dirs.dist + '/inline/*.html')
    .pipe(inject(gulp.src(dirs.dist + '/css/inkMQ.css'), {
      starttag: '<!-- inject:mq-css -->',
      transform: function (filePath, file) {
        // return file contents as string
        return "<style>\n" + file.contents.toString('utf8') + "\n</style>"
      }
    }))
    .pipe(gulp.dest(dirs.dist + '/inline'));
})

// 5. HTML
// - - - - - - - - - - - - - - -

// Minify and smoosh together HTML
gulp.task('minify-html', function() {
  var opts = {
    comments: false,
    spare: true
  };

  gulp.src(dirs.dist)
    .pipe(minifyHTML(opts))
    .pipe(connect.reload())
});

// Helper function to compile Handlebars partials

var htmlParse = function(settings) {
  var partials = globLobLaw.sync(settings.partials);
  var layout   = fs.readFileSync(settings.layout);
  
  // Find partials and register with Handlebars
  for (var i in partials) {
    var file = fs.readFileSync(partials[i]);
    var name = path.basename(partials[i], '.handlebars');
    Handlebars.registerPartial(name, file.toString());
  }

  // Compile pages with the above helpers
  return map(function(code, filename) {
    var pageTemplate = Handlebars.compile(code.toString() + '\n');
    var layoutTemplate = Handlebars.compile(layout.toString());

    Handlebars.registerPartial('body', pageTemplate);
    return layoutTemplate();
  });
}

// Compile Handlebars partials and
// rename .handlebars to .html
// run through Inky parser

gulp.task('inky-parse', function() {
  gulp.src('src/pages/*.handlebars')
    .pipe(htmlParse({
      layout: 'src/layouts/default.html',
      partials: 'src/partials/**/*.handlebars'
    }))
    .pipe(rename({
      extname: '.html'
    }))
    .pipe(inkyGulp())
    .pipe(gulp.dest(dirs.dist))
    .pipe(connect.reload());

});

// 6. Testing
// - - - - - - - - - - - - - - -

// Eventual Litmus/Mailgun integration
// gulp.task('test', function () {

// });

// 7. Utility Tasks
// - - - - - - - - - - - - - - -

// Serve
// Starts a server
// Default Port: 8080
gulp.task('serve', function() {
  return connect.server({
    root: dirs.dist,
    livereload: true
  });
});

// Watch
// Start a server
// Watch all HTML files and SCSS files for changes
// Live reloads on change
gulp.task('watch', ['serve'], function() {
  gulp.watch([dirs.src + '/*/*.*'], ['inky-parse']);
  gulp.watch([dirs.styles + '/**/*.scss'], ['sass']);

});

// Build
// Builds initial template folders
// Should only have to run once
gulp.task('build', ['clean:dist', 'sass'], function() {
  gulp.start('inky-parse');
});

// Deploy
// When you're all ready to send your email
// Minify the html, inline the css, inject media queries in the head
gulp.task('deploy', ['minify-html', 'inline'], function() {
  gulp.start('inject-mq');
});

// Default task
gulp.task('default', ['serve', 'watch']);
