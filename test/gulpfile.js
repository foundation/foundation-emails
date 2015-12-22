var gulp     = require('gulp');
var $        = require('gulp-load-plugins')();
var mq       = require('media-query-extractor');
var rimraf   = require('rimraf');
var panini = require('panini');
var yargs    = require('yargs').argv;
var sequence = require('run-sequence');
var browser  = require('browser-sync');

console.log(process.argv);

// Look for the --production flag
var isProduction = !!(yargs.production);
var sourceMaps = isProduction ? 'sass' : 'sass-sourcemaps';

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
      root: './pages',
      layouts: './layouts'
    }))
    .pipe($.inky())
    .pipe(gulp.dest('../_build'));
});

// Compile Sass into CSS
gulp.task('sass', function() {
  return gulp.src('./scss/app.scss')
    .pipe($.sass().on('error', $.sass.logError))
    .pipe(gulp.dest('../_build/css'));
});

// Compile Sass into CSS with sourcemaps
gulp.task('sass-sourcemaps', function() {
  return gulp.src('./scss/app.scss')
      .pipe($.sourcemaps.init())
      .pipe($.sass().on('error', $.sass.logError))
      .pipe($.sourcemaps.write())
      .pipe(gulp.dest('../_build/css'));
});

// Inline CSS and minify HTML
gulp.task('inline', function() {
  return gulp.src('../_build/*.html')
    .pipe(inline({
      css: '../_build/css/app.css'
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
  var tasks = ['clean', ['pages', sourceMaps]];
  if (isProduction) tasks.push('inline');
  tasks.push(cb);
  sequence.apply(this, tasks);
});

// Build emails, run the server, and watch for file changes
gulp.task('default', ['server'], function() {
  gulp.watch('./pages/**/*.html', ['pages', browser.reload]);
  gulp.watch(['../scss/**/*.scss', './scss/**/*.scss'], [sourceMaps, browser.reload]);
});

function inline(options) {
  var lazypipe = require('lazypipe');
  var cssPath = options.css;
  var cssMqPath = cssPath.replace(/\.css$/, '-mq.css');

  // Extracts media query-specific CSS into a separate file
  mq(cssPath, cssMqPath, [
    'only screen and (max-width: 580px)|' + cssMqPath
  ]);

  var pipe = lazypipe()
    .pipe($.inlineCss)
    .pipe($.inject, gulp.src(cssMqPath), {
      transform: function(path, file) {
        return '<style>\n' + file.contents.toString() + '\n</style>';
      }
    })
    .pipe($.htmlmin, {
      collapseWhitespace: false,
      minifyCSS: true
    });

  return pipe();
}
