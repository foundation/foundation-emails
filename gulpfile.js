'use strict'

// Foundation for Emails
//
// The tasks are grouped into these categories:
//   1. Libraries
//   2. Variables
//   3. Cleaning files
//   4. Copying files
//   5. Build into Plain Text
//   6. Stylesheets
//   7. HTML
//   8. GO FORTH AND BUILD
//   9. Serve/Watch Tasks

// 1. LIBRARIES
// - - - - - - - - - - - - - - -

var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    html2txt = require('gulp-html2txt'),
    inlineCss = require('gulp-inline-css'),
    rename = require('gulp-rename'),
    connect = require('gulp-connect'),
    minifyHTML = require('gulp-minify-html'),
    rimraf = require('rimraf');

var p = require('./package.json');

// 2. VARIABLES
// - - - - - - - - - - - - - - -

var dirs = {
  styles: 'scss/*.scss',
  html: 'html/*.html',
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

// 6. GO FORTH AND BUILD
// - - - - - - - - - - - - - - -

// Wipes build folder, then compiles SASS, then minifies and copies HTML
gulp.task('build', ['clean', 'sass'], function() {
  gulp.start('minify-html');
});

// 7. Serve/Watch Tasks
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
  gulp.watch([dirs.styles], ['sass']);
});

// Default task
gulp.task('default', ['serve', 'watch']);
