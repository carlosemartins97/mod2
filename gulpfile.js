const gulp = require('gulp');
const sass = require('gulp-sass');
const imagemin = require('gulp-imagemin');
const autoprefixer = require('gulp-autoprefixer');

sass.compiler = require('node-sass');



function compSass() {
    return gulp
        .src('dev/scss/**/*.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(autoprefixer({cascade: false}))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest('dist/css'));       
  }

function watch() {
    gulp.watch('dev/scss/**/*.scss', compSass);

}

function minificarImg(){
    return gulp
        .src('dev/img/**/*')
        .pipe(imagemin([], {}))
        .pipe(gulp.dest('dist/img'))
}

gulp.task('sass', compSass);
gulp.task('watch', watch);
gulp.task('minificarImg', minificarImg);
gulp.task('default', gulp.series('sass','watch'))