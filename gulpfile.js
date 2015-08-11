/***************************************************************************
* DEPENDENCIES
***************************************************************************/

var gulp           = require('gulp'),
    $              = require('gulp-load-plugins')({ pattern: ['gulp-*', 'gulp.*'], replaceString: /\bgulp[\-.]/}),
    argv           = require('yargs').argv,
    browserSync    = require('browser-sync'),
    runSequence    = require('run-sequence')
;

/***************************************************************************
* FILE DESTINATIONS
***************************************************************************/

var paths = {
  'root'           : './',
  'vhost'          : 'example.dev',
  'port'           : 3000,
// html
  'htmlDest'       : 'dist/',
// images
  'imageDest'      : 'dist/images/',
  'imagePath'      : 'src/images/',
// jade
  'jadePath'       : 'src/jade/',
// JavaScript
  'jsPath'         : 'src/js/',
  'jsDest'         : 'dist/js/',
// scss
  'scssPath'       : 'src/scss/',
// css
  'cssDest'        : 'dist/css/',
};

var rubySassConf = {
  loadPath       : ['bower_components/foundation/scss'],
  require        : 'sass-globbing',
  sourcemap      : false,
  style          : 'expanded'
};

/***************************************************************************
 * initializing bower_components
**************************************************************************/

gulp.task('bower:install', $.shell.task(['bower install']));

gulp.task('install:foundation', function() {
  return gulp.src('src/shell/', {read: false})
    .pipe($.shell(['bash src/shell/foundation.sh']));
});

/***************************************************************************
* BrowserSync
***************************************************************************/

gulp.task('browser-sync', function() {
  var args = {};
  if (argv.mode == 'server' ) {
    args.server =  { baseDir: paths.root };
    args.startPath = paths.htmlDest;
  } else {
    args.proxy =  paths.vhost;
    args.open = 'external';
  };
  browserSync.init(args);
})

gulp.task('bs-reload', function() {
  browserSync.reload()
});

/***************************************************************************
* image tasks
***************************************************************************/

gulp.task('image-min', function() {
  return gulp.src(paths.imageDest + 'pages/**/*.*')
    .pipe($.imagemin({ optimizationLevel: 3 }))
    .pipe(gulp.dest(paths.imageDest + 'pages/'))
    .pipe(browserSync.reload({ stream: true }));
});

gulp.task('sprite', function() {
  var spriteData = gulp.src(paths.imagePath + 'sprite/*.png')
  .pipe($.spritesmith({
    imgName: 'sprite.png',
    imgPath: '../images/sprite.png',
    cssName: '_m-sprite.scss',
    algorithm: 'top-down',
    padding: 20
  }));
  spriteData.img.pipe(gulp.dest(paths.imageDest));
  spriteData.css.pipe(gulp.dest(paths.scssPath + 'module'));
});

gulp.task('sprite-svg', function() {
  return gulp.src(paths.imagePath + 'sprite-svg/*.svg')
    .pipe($.svgSprite({
      dest: './',
      mode: { symbol: { dest: './' } }
    }))
    .pipe($.rename({
      basename: 'symbol',
      dirname: './',
      prefix: 'sprite' + '.'
    }))
    .pipe(gulp.dest(paths.imageDest));
});

/*******************************************************************************
 * Jade Tasks
*******************************************************************************/

gulp.task('jade', function() {
  return gulp.src(paths.jadePath + '*.jade')
    .pipe($.data(function(file) {
      return require('./setting.json');
    }))
    .pipe($.plumber())
    .pipe($.jade({ pretty: true }))
    .pipe(gulp.dest(paths.htmlDest))
    .pipe(browserSync.reload({ stream: true }));
});

/***************************************************************************
* js tasks
***************************************************************************/

gulp.task('jsLib', function() {
  return gulp.src(paths.jsPath + 'lib/*.js')
    .pipe($.concat('lib.js'))
    .pipe($.uglify())
    .pipe($.rename({ suffix: '.min' }))
    .pipe(gulp.dest(paths.jsDest))
    .pipe(browserSync.reload({ stream: true }));
});

gulp.task('jsApp', function() {
  return gulp.src(paths.jsPath + 'app/*.js')
    .pipe($.concat('script.js'))
    .pipe($.uglify())
    .pipe($.rename({ suffix: '.min' }))
    .pipe(gulp.dest(paths.jsDest))
    .pipe(browserSync.reload({ stream: true }));
});

gulp.task('jsTasks', [
  'jsApp',
  'jsLib'
]);

/***************************************************************************
* Sass tasks
***************************************************************************/

gulp.task('sass', function () {
  return $.rubySass(paths.scssPath, rubySassConf)
    .on('error', function(err) { console.error('Error!', err.message); })
    .pipe($.autoprefixer({
      browsers: 'last 2 versions',
      cascade: false
    }))
    .pipe(gulp.dest(paths.cssDest))
    .pipe($.filter('**/*.css'))
    .pipe(browserSync.reload({ stream: true }));
});

/***************************************************************************
* gulp tasks
***************************************************************************/

gulp.task('watch', function() {
  gulp.watch([paths.imageDest + 'sprite/*.png'], ['sprite']);
  gulp.watch([paths.imagePath + 'sprite-svg/*.svg'], ['sprite-svg'])
  gulp.watch([paths.htmlDest  + '*.html'], ['bs-reload']);
  gulp.watch([paths.jadePath  + '**/*.jade'], ['jade']);
  gulp.watch([paths.jsPath    + '**/*.js'], ['jsTasks']);
  gulp.watch([paths.scssPath  + '**/*.scss'], ['sass']);
});

gulp.task('default', [
  'browser-sync',
  'bs-reload',
  'image-min',
  'jade',
  'jsTasks',
  'sass',
  'sprite',
  'sprite-svg',
  'watch'
]);

gulp.task('init', function(cb) {
  runSequence('bower:install', 'install:foundation', cb);
});
