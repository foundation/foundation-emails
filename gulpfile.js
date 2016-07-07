var $ = require('gulp-load-plugins')();
var gulp = require('gulp');
var sequence = require('run-sequence');
var panini = require('panini');
var supercollider = require('supercollider');
var rimraf = require('rimraf');
var browser = require('browser-sync');
var foundationDocs = require('foundation-docs');
var octophant = require('octophant');
var inky = require('inky');
var siphon = require('siphon-media-query');
var lazypipe = require('lazypipe');
var fs = require('fs');

// Configuration for the documentation generator
supercollider
  .config({
    template: foundationDocs.componentTemplate,
    marked: foundationDocs.marked,
    handlebars: foundationDocs.handlebars,
    keepFm: true,
    quiet: false,
    pageRoot: 'docs/pages',
    data: {
      repoName: 'foundation-emails',
      editBranch: 'develop'
    }
  })
  .searchConfig({
    sort: ['page', 'component', 'sass variable', 'sass mixin', 'sass function', 'js class', 'js function', 'js plugin option', 'js event'],
    pageTypes: {
      library: function(item) {
        return !!(item.library);
      }
    }
  })
  .adapter('sass')
  .adapter('js');

// Cleans the build folder
gulp.task('clean', function(cb) {
  rimraf('_build', cb);
});

// Copies static documentation assets
gulp.task('copy', function() {
  return gulp.src(['docs/assets/**/*', '!docs/assets/scss/**/*', '!docs/assets/js/**/*'])
    .pipe(gulp.dest('_build/assets'));
});

// Builds documentation pages
gulp.task('html', function() {
  return gulp.src('docs/pages/**/*')
    .pipe($.cached('docs'))
    .pipe(supercollider.init())
    .pipe(panini({
      root: 'docs/pages/',
      layouts: 'docs/layouts/',
      partials: 'docs/partials/',
      helpers: foundationDocs.handlebarsHelpers
    }))
    .pipe(gulp.dest('_build'))
    .on('finish', function() {
      supercollider.buildSearch('_build/data/search.json', function() {});
    });
});

gulp.task('sass', ['sass:docs', 'sass:foundation']);

// Compiles documentation-specific CSS
gulp.task('sass:docs', function() {
  return gulp.src('docs/assets/scss/docs.scss')
    .pipe($.sass({ includePaths: [process.cwd()] }).on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest('_build/assets/css'));
});

// Compiles Foundation-specific CSS
gulp.task('sass:foundation', function() {
  return gulp.src('scss/foundation-emails.scss')
    .pipe($.sass().on('error', $.sass.logError))
    .pipe(gulp.dest('_build/assets/css'));
});

// Compiles documentation JavaScript
gulp.task('javascript:docs', function() {
  return gulp.src(['node_modules/foundation-docs/js/*.js', 'docs/assets/js/**/*.js'])
    .pipe($.concat('docs.js'))
    .pipe(gulp.dest('_build/assets/js'));
});

// Generates a Sass settings file from the current codebase
gulp.task('settings', function() {
  octophant('scss/**/*.scss', {
    title: 'Foundation for Emails Settings',
    output: 'scss/settings/_settings.scss',
    sort: ['global', 'grid', 'block-grid', 'type']
  });
});

// Lints the Sass codebase
gulp.task('lint', function() {
  return gulp.src('scss/**/*.scss')
    .pipe($.sassLint())
    .pipe($.sassLint.format())
    .pipe($.sassLint.failOnError());
});

// Creates a BrowserSync server
gulp.task('server', ['build'], function() {
  browser.init({
    server: './_build'
  });
});

// Uploads the documentation to the live server
gulp.task('deploy:docs', ['build'], function() {
  return gulp.src('./_build/**')
    .pipe($.prompt.confirm('Make sure everything looks right before you deploy.'))
    .pipe($.rsync({
      root: './_build',
      hostname: 'deployer@72.32.134.77',
      destination: '/home/deployer/sites/foundation-emails-march16'
    }));
});

// Runs the entire build process
gulp.task('build', function(cb) {
  sequence('clean', ['copy', 'html', 'sass', 'javascript:docs'], cb);
});

// Runs the build process, spins up a server, and watches for file changes
gulp.task('default', ['server'], function() {
  gulp.watch('docs/**/*', ['html', browser.reload]);
  gulp.watch(['docs/assets/scss/**/*', 'node_modules/foundation-docs/scss/**/*'], ['sass:docs', browser.reload]);
  gulp.watch('scss/**/*.scss', ['sass:foundation', browser.reload]);
});

gulp.task('test', ['sass', 'test:compile'], function() {
  browser.init({ server: 'test/visual/_build', directory: true });
  gulp.watch('scss/**/*.scss', ['sass:foundation', browser.reload]);
  gulp.watch('test/visual/pages/*.html', ['test:compile', browser.reload]);
});

gulp.task('test:compile', function() {
  gulp.src('test/visual/pages/*.html')
    .pipe($.wrap({ src: 'test/visual/_template.html' }))
    .pipe(inky())
    .pipe(inliner('_build/assets/css/foundation-emails.css'))
    .pipe(gulp.dest('test/visual/_build'));
});

gulp.task('templates', function() {
  return gulp.src('templates/*.html')
    .pipe($.wrap({ src: 'test/visual/_template.html' }))
    .pipe(inky())
    .pipe($.prettify({ indent_size: 2 }))
    .pipe(gulp.dest('.templates'))
    .pipe($.zip('all-templates.zip'))
    .pipe(gulp.dest('.templates'));
});

gulp.task('download:build:index', function() {
  return gulp.src('test/visual/_template.html', { base: 'test/visual' })
    .pipe($.injectString.replace('<%= contents %>', ''))
    .pipe($.injectString.replace('../assets/', ''))
    .pipe($.rename('index.html'))
    .pipe(gulp.dest('.download'));
});

gulp.task('download:build:templates', ['templates'], function() {
  return gulp.src('.templates/*.html')
    .pipe(gulp.dest('.download/templates'));
});

gulp.task('download:build:css', ['sass:foundation'], function() {
  return gulp.src('_build/assets/css/foundation-emails.css')
    .pipe(gulp.dest('.download/css'));
})

gulp.task('download:build', ['download:build:index', 'download:build:templates', 'download:build:css'], function() {
  return gulp.src('.download/**/*')
    .pipe($.zip('foundation-emails.zip'))
    .pipe(gulp.dest('.'));
});

gulp.task('download', ['download:build'], function(done) {
  return gulp.src('foundation-emails.zip')
    .pipe($.rsync({
      hostname: 'deployer@72.32.134.77',
      destination: '/home/deployer/sites/foundation-sites-6-marketing/downloads/'
    }));
});

gulp.task('dist', ['sass:foundation'], function() {
  return gulp.src('_build/assets/css/foundation-emails.css')
    .pipe(gulp.dest('dist'))
    .pipe($.cssnano())
    .pipe($.rename('foundation-emails.min.css'))
    .pipe(gulp.dest('dist'));
});

function inliner(css) {
  var css = fs.readFileSync(css).toString();
  var mqCss = siphon(css);

  var pipe = lazypipe()
    .pipe($.inlineCss, {
      applyStyleTags: false,
      removeStyleTags: false,
      removeLinkTags: false
    })
    .pipe($.injectString.replace, '<!-- <style> -->', '<style>'+mqCss+'</style>')
    .pipe($.htmlmin, {
      collapseWhitespace: false,
      minifyCSS: false
    });

  return pipe();
}
