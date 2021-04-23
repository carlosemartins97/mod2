const gulp = require('gulp');
const sass = require('gulp-sass');
const minImg = require('gulp-imagemin');
const autoprefixer = require('gulp-autoprefixer');

sass.compiler = require('node-sass');



function compSass() {
    return gulp
        .src('scss/**/*.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(autoprefixer({cascade: false}))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest('css/teste'));
        
  }

function watch() {
    gulp.watch('scss/**/*.scss', compSass);

}

function minificarImg(){
    return gulp
        .src('img/**/*')
        .pipe(minImg())
        .pipe(gulp.dest('dist'))
}

gulp.task('sass', compSass);
gulp.task('watch', watch);
gulp.task('minificarImg', minificarImg);
gulp.task('default', gulp.series('sass','watch'))