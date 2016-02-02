import gulp     from 'gulp';
import plugins  from 'gulp-load-plugins';
import browser  from 'browser-sync';
import mq       from 'media-query-extractor';
import rimraf   from 'rimraf';
import panini   from 'panini';
import yargs    from 'yargs';
import lazypipe from 'lazypipe';
import inky     from 'inky';

const $ = plugins();

// Look for the --production flag
const isProduction = !!(yargs.argv.production);

// Only inline if the --production flag is enabled
var buildTasks = [clean, pages, sass, images];
if (isProduction) buildTasks.push(inline);

// Build the "dist" folder by running all of the above tasks
gulp.task('build',
  gulp.series.apply(gulp, buildTasks));

// Build emails, run the server, and watch for file changes
gulp.task('default',
  gulp.series('build', server, watch));

// Delete the "dist" folder
// This happens every time a build starts
function clean(done) {
  rimraf('dist', done);
}

// Compile layouts, pages, and partials into flat HTML files
// Then parse using Inky templates
function pages() {
  return gulp.src('src/pages/**/*.html')
    .pipe(panini({
      root: 'src/pages',
      layouts: 'src/layouts',
      partials: 'src/partials'
    }))
    .pipe(inky())
    .pipe(gulp.dest('dist'));
}

function resetPages(done) {
  panini.refresh();
  done();
}

// Compile Sass into CSS
function sass() {
  return gulp.src('src/assets/scss/app.scss')
    .pipe($.if(!isProduction, $.sourcemaps.init()))
    .pipe($.sass().on('error', $.sass.logError))
    .pipe($.if(!isProduction, $.sourcemaps.write()))
    .pipe(gulp.dest('dist/css'));
}

// Copy and compress images
function images() {
  return gulp.src('src/assets/img/*')
    .pipe($.imagemin())
    .pipe(gulp.dest('./dist/assets/img'));
}

// Inline CSS and minify HTML
function inline() {
  return gulp.src('dist/**/*.html')
    .pipe(inliner({
      css: 'dist/css/app.css'
    }))
    .pipe(gulp.dest('dist'));
}

// Start a server with LiveReload to preview the site in
function server(done) {
  browser.init({
    server: 'dist'
  });
  done();
}

// Watch for file changes
function watch() {
  gulp.watch('src/pages/**/*.html', gulp.series(pages, browser.reload));
  gulp.watch(['src/layouts/**/*', 'src/partials/**/*'], gulp.series(resetPages, pages, browser.reload));
  gulp.watch(['../scss/**/*.scss', 'src/assets/scss/**/*.scss'], gulp.series(sass, browser.reload));
  gulp.watch('src/img/**/*', gulp.series(images, browser.reload));
}

function inliner(options) {
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
