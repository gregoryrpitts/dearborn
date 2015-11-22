'use strict';

var gulp = require('gulp');
var less = require('gulp-less');
var autoprefixer = require('gulp-autoprefixer');
var gutil = require('gulp-util');
var livereload = require('gulp-livereload');


/**
 * Gulp task to compile style.less file into style.css
 */
gulp.task('less', function() {
  return gulp.src('style.less', {base: './'})
    .pipe(less().on('error', gutil.log))
    .pipe(autoprefixer('last 10 versions', 'ie 8'))
    .pipe(gulp.dest('./'))
    .pipe(livereload());
});

/**
 * Gulp watch task to watch style.less and recompile
 */
 gulp.task('watch', function() {
   livereload.listen();
   gulp.watch('style.less', ['less']);
 });

/**
 * Default `gulp` task command
 */
 gulp.task('default', ['less', 'watch']);
