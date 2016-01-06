// include gulp
var gulp = require('gulp'); 


var minifyHTML = require('gulp-minify-html');
gulp.task('minify-html', function() {
  return gulp.src('src/*.html')
    .pipe(minifyHTML({ empty: true }))
    .pipe(gulp.dest('dist'));
});


var minifyCss = require('gulp-minify-css');
gulp.task('minify-css', function() {
  return gulp.src('styles/*.css')
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(gulp.dest('dist'));
});


const imagemin = require('gulp-imagemin');
const pngquant = require('imagemin-pngquant');
gulp.task('default', () => {
  return gulp.src('src/images/*')
    .pipe(imagemin({
      progressive: true,
      svgoPlugins: [{removeViewBox: false}],
      use: [pngquant()]
    }))
    .pipe(gulp.dest('dist/images'));
});


var sass = require('gulp-sass');
gulp.task('sass', function () {
  gulp.src('./sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});
gulp.task('sass:watch', function () {
  gulp.watch('./sass/**/*.scss', ['sass']);
});


var stripDebug = require('gulp-strip-debug');
gulp.task('default', function () {
  return gulp.src('src/app.js')
    .pipe(stripDebug())
    .pipe(gulp.dest('dist'));
});


// default gulp task
gulp.task('default', ['imagemin', 'htmlpage', 'scripts', 'styles', 'sass', 'watch'], function() {});