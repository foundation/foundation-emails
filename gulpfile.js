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

var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    html2txt = require('gulp-html2txt'),
    inlineCss = require('gulp-inline-css'),
    rename = require('gulp-rename'),
    connect = require('gulp-connect'),
    minifyHTML = require('gulp-minify-html'),
    concat = require('gulp-concat'),
    grab   = require('gulp-zurb-foundation-email'),
    rimraf = require('rimraf');

var p = require('./package.json');

// 2. VARIABLES
// - - - - - - - - - - - - - - -

var dirs = {
  styles: 'scss/*.scss',
  html: 'html/*.html',
  js: 'js/**/*.js',
  images: 'images/*',
  build: './build'
};

// 3. CLEANIN' FILES
// - - - - - - - - - - - - - - -

// Clean build directory
gulp.task('clean', function(cb) {
  rimraf('./build', cb);
});

// Clean the HTML directory
gulp.task('clean:html', function(cb) {
  rimraf('./build/html', cb);
});

// Clean the JS directory
gulp.task('clean:js', function(cb) {
  rimraf('./build/js', cb);
})

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
    .pipe(rename(function(path) {
      path.basename += '-inline'
    }))
    .pipe(gulp.dest(dirs.build))
});

// 5. HTML
// - - - - - - - - - - - - - - -

// Minify and smoosh together HTML
gulp.task('minify-html', function() {
  var opts = {
    comments: false,
    spare: true
  };

  gulp.src(dirs.html)
    .pipe(minifyHTML(opts))
    .pipe(gulp.dest(dirs.build))
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

// Copy jquery
gulp.task('jquery', function() {
  return gulp.src('node_modules/jquery/dist/jquery.js')
    .pipe(gulp.dest(dirs.build + '/js/'));
});

gulp.task('inky-prime', function() {
  return gulp.src(dirs.js)
    .pipe(concat('inky-prime.js'))
    .pipe(gulp.dest(dirs.build + '/js/'))
    .pipe(connect.reload());  
})

gulp.task('js', ['clean:js', 'jquery'], function() {
  gulp.start('inky-prime');
});

gulp.task('query', function() {
  gulp.src(dirs.html)
    .pipe(grab('body'))
    .pipe(gulp.dest('./output'));
});

// 7. GO FORTH AND BUILD
// - - - - - - - - - - - - - - -

// Wipes build folder, then compiles SASS, then minifies and copies HTML
gulp.task('build', ['clean', 'sass', 'js'], function() {
  gulp.start('minify-html');
});

// 8. Serve/Watch Tasks
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
  gulp.watch([dirs.html], ['minify-html']);
  gulp.watch([dirs.js], ['js']);
  gulp.watch([dirs.styles], ['sass']);
});

// Default task
gulp.task('default', ['serve', 'watch']);
