//***************************************************************************
//* Dependences
//***************************************************************************/

var gulp           = require('gulp'),
    $              = require('gulp-load-plugins')({ pattern: ['gulp-*', 'gulp.*'], replaceString: /\bgulp[\-.]/}),
    argv           = require('yargs').argv,
    browserSync    = require('browser-sync'),
    runSequence    = require('run-sequence')
;

//***************************************************************************
//* File Destinations
//***************************************************************************/

var paths = {
  'root'           : './',
  'vhost'          : 'amethyst.dev',
  'port'           : 3000,
// html
  'htmlPath'       : 'src/html/',
// images
  'imageDest'      : 'assets/images/',
  'imagePath'      : 'src/images/',
// jade
  'jadePath'       : 'src/jade/',
// JavaScript
  'jsPath'         : 'src/js/',
  'jsDest'         : 'assets/js/',
// scss
  'scssPath'       : 'src/scss/',
// css
  'cssDest'        : './',
// php
  'phpFiles'       : ['*.php', '**/*.php'],
};

var gulpSassConf = {
  loadPath       : [],
  outputStyle    : 'expanded'
};

//***************************************************************************
// * Initializing bower_components
//**************************************************************************/

gulp.task('bower:install', $.shell.task(['bower install']));

gulp.task('install:foundation', function() {
  return gulp.src('src/shell/', {read: false})
    .pipe($.shell(['bash src/shell/foundation.sh']));
});

//***************************************************************************
// * Distribution
//**************************************************************************/

gulp.task('zip:amethyst', function() {
  return gulp.src('src/shell/', {read: false})
    .pipe($.shell(['bash src/shell/zip.sh']));
});

//***************************************************************************
//* BrowserSync
//***************************************************************************/

gulp.task('browser-sync', function() {
  var args = {};
  if (argv.mode == 'server' ) {
    args.server =  { baseDir: paths.root };
    args.startPath = paths.htmlPath;
  } else {
    args.proxy =  paths.vhost;
    args.open = 'external';
  };
  browserSync.init(args);
})

gulp.task('bs-reload', function() {
  browserSync.reload()
});

//***************************************************************************
//* Image Tasks
//***************************************************************************/

gulp.task('image-min', function() {
  return gulp.src(paths.imageDest + 'pages/**/*.*')
    .pipe($.imagemin({ optimizationLevel: 3 }))
    .pipe(gulp.dest(paths.imageDest + 'pages/'))
    .pipe(browserSync.reload({ stream: true }));
});

// If you need sprite tasks, uncomment these below lines.
// You also need to uncomments [ Gulp Tasks ] on line 180, 181, 196.

// gulp.task('sprite', function() {
//   var spriteData = gulp.src(paths.imagePath + 'sprite/*.png')
//   .pipe($.spritesmith({
//     imgName: 'sprite.png',
//     imgPath: './assets/images/sprite.png',
//     cssName: '_sprite.scss',
//     algorithm: 'top-down',
//     padding: 20
//   }));
//   spriteData.img.pipe(gulp.dest(paths.imageDest));
//   spriteData.css.pipe(gulp.dest(paths.scssPath + 'core'));
// });

// gulp.task('sprite-svg', function() {
//   return gulp.src(paths.imagePath + 'sprite-svg/*.svg')
//     .pipe($.svgSprite({
//       dest: './',
//       mode: { symbol: { dest: './' } }
//     }))
//     .pipe($.rename({
//       basename: 'symbol',
//       dirname: './',
//       prefix: 'sprite' + '.'
//     }))
//     .pipe(gulp.dest(paths.imageDest));
// });

//*******************************************************************************
// * Jade Tasks
//*******************************************************************************/

gulp.task('jade', function() {
  return gulp.src(paths.jadePath + '*.jade')
    .pipe($.data(function(file) {
      return require('./setting.json');
    }))
    .pipe($.plumber())
    .pipe($.jade({ pretty: true }))
    .pipe(gulp.dest(paths.htmlPath))
    .pipe(browserSync.reload({ stream: true }));
});

//***************************************************************************
//* JS Tasks
//***************************************************************************/

gulp.task('js', function() {
  return gulp.src(paths.jsPath + '*.js')
    .pipe($.uglify())
    .pipe($.rename({ suffix: '.min' }))
    .pipe(gulp.dest(paths.jsDest))
    .pipe(browserSync.reload({ stream: true }));
});

//***************************************************************************
//* Sass Tasks
//***************************************************************************/

gulp.task('sass', function () {
  return gulp.src(paths.scssPath + '**/*.scss')
    .pipe($.sourcemaps.init())
    // .pipe($.cssGlobbing({ extensions: ['.scss'] }))
    .pipe($.sass(gulpSassConf).on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie 10', 'ie 9'],
      cascade: false
    }))
    .pipe($.sourcemaps.write('maps', {
      includeContent: false,
      sourceRoot: paths.scssPath
    }))
    .pipe(gulp.dest(paths.cssDest))
    .pipe(browserSync.reload({ stream: true }));
});

//***************************************************************************
//* Gulp Tasks
//***************************************************************************/

gulp.task('watch', function() {
  // gulp.watch([paths.imageDest + 'sprite/*.png'],     ['sprite']);
  // gulp.watch([paths.imagePath + 'sprite-svg/*.svg'], ['sprite-svg'])
  gulp.watch([paths.htmlPath  + '*.html'],           ['bs-reload']);
  gulp.watch([paths.jadePath  + '**/*.jade'],        ['jade']);
  gulp.watch([paths.jsPath    + '*.js'],             ['js']);
  gulp.watch([paths.scssPath  + '**/*.scss'],        ['sass']);
  gulp.watch([paths.phpFiles],                       ['bs-reload']);
});

gulp.task('default', [
  'browser-sync',
  'bs-reload',
  'image-min',
  'jade',
  'js',
  'sass',
  // 'sprite',
  // 'sprite-svg',
  'watch'
]);

gulp.task('init', function(cb) {
  runSequence('bower:install', 'install:foundation', cb);
});
