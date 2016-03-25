var gulp = require('gulp');
var plumber = require('gulp-plumber');
var jshint = require('gulp-jshint');
var notify = require('gulp-notify');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var concat = require('gulp-concat');


gulp.task('scripts-uglify', function() {
  return gulp.src(['./what-input.js'])
    .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
    .pipe(jshint())
    .pipe(uglify())
    .pipe(rename('what-input.min.js'))
    .pipe(gulp.dest('./'))
    .pipe(notify('Scripts uglify task complete'));
});


gulp.task('scripts-ie8', function() {
  return gulp.src(['./src/polyfills/ie8/*.js'])
    .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
    .pipe(concat('lte-IE8.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./'))
    .pipe(notify('IE8 scripts task complete'));
});


gulp.task('scripts', ['scripts-uglify', 'scripts-ie8']);
