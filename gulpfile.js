var $ = require('gulp-load-plugins')();
var gulp = require('gulp');
var sequence = require('run-sequence');
var panini = require('panini');
var supercollider = require('supercollider');
var rimraf = require('rimraf');
var browser = require('browser-sync');

gulp.task('clean', function(cb) {
  rimraf('_build', cb);
});

gulp.task('copy', function() {
  return gulp.src(['docs/assets/**/*', '!docs/assets/scss/**/*'])
    .pipe(gulp.dest('_build/assets'));
});

gulp.task('html', function() {
  return gulp.src('docs/pages/**/*')
    .pipe($.cached('docs'))
    .pipe(supercollider.init({
      template: 'docs/layouts/component.html',
      adapters: ['sass', 'js'],
      marked: require('./lib/marked'),
      handlebars: require('./lib/handlebars')
    }))
    .pipe(panini({
      layouts: 'docs/layouts/',
      partials: 'docs/partials/**/*.html'
    }))
    .pipe(gulp.dest('_build'));
});

gulp.task('sass', function() {
  return gulp.src('docs/assets/scss/docs.scss')
    .pipe($.sass().on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest('_build/assets/css'));
});

gulp.task('lint', function() {
  return gulp.src('scss/**/*.scss')
    .pipe($.scssLint({
      'config': 'config/scss-lint.yml'
    }));
});

gulp.task('server', ['build'], function() {
  browser.init({
    server: './_build'
  });
});

gulp.task('build', function(cb) {
  sequence('clean', ['copy', 'html', 'sass'], cb);
});

gulp.task('default', ['server'], function() {
  gulp.watch('docs/**/*', ['html', browser.reload]);
  gulp.watch('docs/assets/scss/**/*', ['sass', browser.reload]);
});
