var gulp       = require('gulp');
/* Minify & Optimize Image */
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var imageop = require('gulp-image-optimization');
/* Scss Ordering */
var scsslint = require('gulp-scss-lint');
/* Generate css & Minify it */
var minifyCss = require('gulp-minify-css');
var sass = require('gulp-sass');
/* Minify js */
var uglify     = require('gulp-uglify')
/* concat into one file */
var concat     = require('gulp-concat');

/* Define path variables */
var imgSrc     = './../themes/custom/saurabhd/src/images/*',
    imgDst     = './../themes/custom/saurabhd/images';

var jsSrc      = './../themes/custom/saurabhd/src/js/**/*.js',
    jsDst      = './../themes/custom/saurabhd/js';

var scssSrc    = './../themes/custom/saurabhd/src/sass/**/*',
    cssDst     = './../themes/custom/saurabhd/css';

/* Minify & Optimize Image */
gulp.task('image', function() {
    return gulp.src(imgSrc)
        /* Optimize image */
        .pipe(imageop({
            optimizationLevel: 5,
            progressive: true,
            interlaced: true
        }))
        /* Minify image */
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant({quality: '65-80', speed: 4})]
        }))
        .pipe(gulp.dest(imgDst));
});

/* Minify js */
gulp.task('js', function() {
  return gulp.src(jsSrc)
    .pipe(uglify())
    .pipe(concat('script.js'))
    .pipe(gulp.dest(jsDst));
});

gulp.task('scss-lint', function() {
  return gulp.src(scssSrc)
    .pipe(scsslint({
      'config': 'scss-lint.yml'
    }));
});

/* Generate css & minify it */
gulp.task('sass', function () {
  return gulp.src(scssSrc)
    /* Generate css from sass */
    .pipe(sass().on('error', sass.logError))
    /* Minify css */
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(concat('style.css'))
    .pipe(gulp.dest(cssDst));
});

/* Autodetect changes in sass & generate css accordingly */
gulp.task('watch', function () {
  gulp.watch(scssSrc, ['sass']);
});


// Default gulp task (Task listed here will run on gulp)
gulp.task('default', ['js', 'scss-lint', 'sass', 'watch'], function() {});