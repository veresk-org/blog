var gulp = require("gulp");
var minifyCSS = require('gulp-minify-css'); 
var concat = require('gulp-concat');

gulp.task('css' , function () {
    return gulp.src([
        './style.css',
        './styles/responsive.css',
        './styles/bootstrap/bootstrap.min.css',
        './plugins/toastr/toastr.min.css',
        './plugins/font-awesome-4.7.0/css/font-awesome.min.css'
    ])
    .pipe(concat('styles.min.css'))
    .pipe(minifyCSS())
    .pipe(gulp.dest('./'))
});

gulp.task('default' , ['css']);