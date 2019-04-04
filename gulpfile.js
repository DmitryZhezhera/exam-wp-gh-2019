var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('browserSync', function () {
    browserSync.init({
        proxy: 'localhost/'
    })
});

gulp.task('sass', function () {
    return gulp.src('sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer('last 2 versions'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('.'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('watch', ['browserSync', 'sass'], function () {
    gulp.watch('sass/**/*.scss', ['sass']);
    gulp.watch('sass/**/*.scss', browserSync.reload);
});
