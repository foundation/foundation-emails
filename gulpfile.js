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
    watch      = require('gulp-watch'),
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
    handlebars = require('gulp-compile-handlebars'),
    omglob     = require('glob'),
    runOrder   = require('run-sequence'),
    rimraf     = require('rimraf');

// 2. VARIABLES
// - - - - - - - - - - - - - - -

var dirs = {
  styles: 'scss/*.scss',
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
gulp.task('clean:temp', function(cb) {
  rimraf(dirs.temp, cb);
});


// 4. STYLESHEETS
// - - - - - - - - - - - - - - -

// Compile SASS files
gulp.task('sass', function() {
  return gulp.src(dirs.styles)
    .pipe(sass({ "sourcemap=none": true, style: 'compact' }))
    .pipe(gulp.dest(dirs.dist + '/css'))
    .pipe(connect.reload())
});

// Inline Styles
gulp.task('inline', function() {
  return gulp.src(dirs.dist + '/*.html')
    .pipe(inlineCss())
    .pipe(rename({
      suffix: '-inline'
    }))
    .pipe(gulp.dest(dirs.dist))
});

// extract media queries into new CSS file called inkMQ.css
// any remaining styles will go into ink-noMQ.css
gulp.task('extract-mq', function () {
  extractMQ( dirs.dist + '/css/ink.css', dirs.dist + '/css/ink-noMQ.css', ['only screen and (max-width: 600px)|./dist/css/inkMQ.css']);
});

// inject media queries into the head of the inlined email
gulp.task('inject-mq', ['extract-mq'], function() {
  gulp.src(dirs.dist + '/index-inline.html')
    .pipe(inject(gulp.src(dirs.dist + '/css/inkMQ.css'), {
      starttag: '<!-- inject:mq-css -->',
      transform: function (filePath, file) {
        // return file contents as string
        return "<style>\n" + file.contents.toString('utf8') + "\n</style>"
      }
    }))
    .pipe(gulp.dest('./dist'));
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

// Convert HTML to plain text, just in caseies
gulp.task('html-plaintext', function() {
  gulp.src(dirs.dist)
    .pipe(html2txt())
    .pipe(rename(function(path) {
      path.basename += '-plaintext'
    }))
    .pipe(gulp.dest(dirs.dist));
});

// Task to copy HTML directly, without minifying
gulp.task('copy-html', function() {
  return gulp.src(dirs.src + '/layouts/*.html')
  .pipe(gulp.dest(dirs.dist))
  .pipe(connect.reload())
});

// Inject handlebars partials
gulp.task('compile-html', function() {
  
  omglob(dirs.src + '/pages/*.handlebars', function(er, files) {

    for (var i = 0; i < files.length; i++) {
      var filePath = files[i].replace(/\\/g, '/');
      var fileName = filePath.substring(filePath.lastIndexOf('/')+1, filePath.lastIndexOf('.'));

      var templateData = {},
          options = {
            batch : ['./src/partials']
          };
   
      gulp.src(files[i])
        .pipe(handlebars(templateData, options))
        .pipe(rename(fileName + '.html'))
        .pipe(gulp.dest(dirs.temp));
    }
  })

  // silly gulp asynch. The previous task sometimes happens too fast, so it can't find
  // the new temporary partials
  setTimeout(function() {
    omglob(dirs.temp + '/*.html', function(er, files) {
      for (var i = 0; i < files.length; i++) {
        var filePath = files[i].replace(/\\/g, '/');
        var fileName = filePath.substring(filePath.lastIndexOf('/')+1, filePath.lastIndexOf('.'));

         gulp.src(dirs.src + '/layouts/default.html')
          .pipe(inject(gulp.src(files[i]), {
            starttag: '<!-- inject:page:{{ext}} -->',
            transform: function (filePath, file) {
            // return file contents as string 
            return file.contents.toString('utf8')
          }
        }))
        .pipe(rename({
          basename: fileName
        }))
        .pipe(gulp.dest(dirs.temp)) 
      }
    })
  }, 100);
});

// 6. Syntax Transformer
// - - - - - - - - - - - - - - -

// get the HTML from the body and run it through Inky parser

gulp.task('query', ['compile-html'], function() {
  gulp.src(dirs.temp + '/*.html')
    .pipe(inkyGulp())
    .pipe(gulp.dest(dirs.dist))
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
gulp.task('build', function() {
  runOrder('clean:dist', 'sass','query','minify-html');
});

// 9. Serve/Watch Tasks
// - - - - - - - - - - - - - - -

// Starts a server
// Default Port: 8080
gulp.task('serve', function() {
  return connect.server({
    root: dirs.dist,
    livereload: true
  });
});

// Start a server
// Watch all HTML files and SCSS files for changes
// Live reloads on change
gulp.task('watch', ['serve'], function() {
  gulp.watch([dirs.src + '/*/*.*'], function(event) {
    runOrder('query', 'minify-html');
  });
  gulp.watch([dirs.styles], ['sass']);
  // watch([dirs.dist + '/*.*']).pipe(connect.reload());
  gulp.watch([dirs.dist + '/*.*'], function(event) {
    gulp.src(event.path)
      .pipe(connect.reload());
  })

});


gulp.task('deploy', ['minify-html', 'inline'], function() {
  gulp.start('inject-mq');
});
// Default task
gulp.task('default', ['serve', 'watch']);
