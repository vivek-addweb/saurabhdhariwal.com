var gulp       = require('gulp');
var changed    = require('gulp-changed');
var ngAnnotate = require('gulp-ng-annotate');
var stripDebug = require('gulp-strip-debug');
var concat     = require('gulp-concat');
var uglify     = require('gulp-uglify');
var autoprefix = require('gulp-autoprefixer');
var minifyHTML = require('gulp-minify-html');
var minifyCSS  = require('gulp-minify-css');
var imagemin   = require('gulp-imagemin');
var sass       = require('gulp-sass');

var scssSrc    = './themes/custom/saurabhd/src/sass/**/*.scss',
    cssDst     = './themes/custom/saurabhd/css';

var jsSrc      = './themes/custom/saurabhd/src/js/**/*.js',
    jsDst      = './themes/custom/saurabhd/js';

var imgSrc     = './themes/custom/saurabhd/src/images/**/*',
    imgDst     = './themes/custom/saurabhd/images';


var concatCss = require('gulp-concat-css');
 
gulp.task('default', function () {
  return gulp.src(scssSrc)
    .pipe(concatCss("styles/bundle.css"))
    .pipe(gulp.dest(cssDst));
});



gulp.task('sass', function () {
  return gulp
    .src(scssSrc) // Find all `.scss` files from the `stylesheets/` folder
    .pipe(sass()) // Run Sass on those files
    .pipe(gulp.dest(cssDst)); // Write the resulting CSS in the output folder
});
gulp.task('watch', function(){
  gulp.watch(scssSrc, ['sass']);
});


// Minify new images
gulp.task('imagemin', function() {
  gulp.src(imgSrc)
    .pipe(changed(imgDst))
    .pipe(imagemin())
    .pipe(gulp.dest(imgDst));
});


// Minify new or changed HTML pages
gulp.task('htmlpage', function() {
  var htmlSrc    = './src/*.html',
      htmlDst    = './build';
  gulp.src(htmlSrc)
    .pipe(changed(htmlDst))
    .pipe(minifyHTML())
    .pipe(gulp.dest(htmlDst));
});


// JS concat, strip debugging and minify
gulp.task('scripts', function() {
  gulp.src(jsSrc)
    .pipe(concat('script.js'))
    .pipe(stripDebug())
    .pipe(uglify())
    .pipe(gulp.dest(jsDst));
});


// CSS concat, auto-prefix and minify
gulp.task('styles', function() {
  gulp.src(scssSrc)
    .pipe(concat('styles.css'))
    .pipe(autoprefix('last 2 versions'))
    .pipe(minifyCSS())
    .pipe(gulp.dest(cssDst));
});


gulp.task('default', function () {
  return gulp.src(jsSrc)
    .pipe(changed(jsDst))
    // ngAnnotate will only get the files that 
    // changed since the last time it was run 
    .pipe(ngAnnotate())
    .pipe(gulp.dest(jsDst));
}); 
gulp.task('default', function () {
  return gulp.src(jsSrc)
    .pipe(ngAnnotate())
    .pipe(gulp.dest(jsDst));
});

// Default gulp task
gulp.task('default', ['imagemin', 'htmlpage', 'scripts', 'styles', 'sass', 'watch'], function() {
});