var gulp     = require('gulp');
var $        = require('gulp-load-plugins')();
var mq       = require('media-query-extractor');
var rimraf   = require('rimraf');
var panini   = require('panini');
var yargs    = require('yargs').argv;
var sequence = require('run-sequence');
var browser  = require('browser-sync');
var map      = require('map-stream');
var premailer= require('premailer-api');
var gutil    = require('gulp-util');

// Look for the --production flag
var isProduction = !!(yargs.production);

// Delete the "dist" folder
// This happens every time a build starts
gulp.task('clean', function(done) {
  rimraf('../_build', done);
});

// Compile layouts, pages, and partials into flat HTML files
// Then parse using Inky templates
gulp.task('pages', function() {
  return gulp.src('./pages/**/*.html')
    .pipe(panini({
      layouts: './layouts'
    }))
    .pipe($.inky())
    .pipe(gulp.dest('../_build'));
});

// Compile Sass into CSS
gulp.task('sass', function() {
  return gulp.src('../scss/ink.scss')
    .pipe($.sass().on('error', $.sass.logError))
    .pipe(gulp.dest('../_build/css'));
});

// Inline CSS and minify HTML
gulp.task('inline', function() {
  // Extracts media query-specific CSS into a separate file
  mq('../_build/css/ink.css', '../_build/css/ink-mq.css', [
    'only screen and (max-width: 580px)|../_build/css/ink-mq.css'
  ]);

  var injectOne = $.inject(gulp.src('../_build/css/ink.css'), {
    transform: function(path, file) { return '<style>\n' + file.contents.toString() + '\n</style>'; }
  });

  var injectTwo = $.inject(gulp.src('../_build/css/ink-mq.css'), {
    transform: function(path, file) { return '<style>\n' + file.contents.toString() + '\n</style>'; }
  });

  return gulp.src('../_build/*.html')
    .pipe(injectOne)
    .pipe(map(function(file, cb) {
      var email;
      var contents = file.contents.toString();

      premailer.prepare({ html: contents }, function(err, email) {
        if (err) {
          gutil.log('Premailer error:')
          console.log(err);
          cb()
        }
        else {
          gutil.log('Premailer: processed ' + file.path + '.');
          file.contents = new Buffer(email.html);
          cb(null, file);
        }
      });
    }))
    .pipe(injectTwo)
    .pipe($.htmlmin({
      collapseWhitespace: false,
      minifyCSS: true
    }))
    .pipe(gulp.dest('../_build'));
});

gulp.task('server', ['build'], function() {
  browser.init({
    server: '../_build'
  });
});

// Build the "dist" folder by running all of the above tasks
gulp.task('build', function(cb) {
  var tasks = ['clean', ['pages', 'sass']];
  if (isProduction) tasks.push('inline');
  tasks.push(cb);
  sequence.apply(this, tasks);
});

// Build emails, run the server, and watch for file changes
gulp.task('default', ['server'], function() {
  gulp.watch('./pages/**/*.html', ['pages', browser.reload]);
  gulp.watch('../scss/**/*.scss', ['sass', browser.reload]);
});
