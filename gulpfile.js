var gulp = require("gulp");
var minifyCSS = require('gulp-minify-css'); 
var concat = require('gulp-concat');
var uglify = require('gulp-uglify-es').default;
var purify = require('gulp-purifycss');


gulp.task('css' , function () {
    return gulp.src([
        './styles/iranyekan/css/fontiran.css',
        './styles/bootstrap/css/bootstrap.min.css',
        './style.css',
        
        './plugins/font-awesome-4.7.0/css/font-awesome.min.css',
        './styles/responsive.css',
        './plugins/toastr/toastr.min.css',
        
    ])
    // .pipe(purify(['*.css']))
    .pipe(concat('styles.min.css'))
    .pipe(minifyCSS())
    .pipe(gulp.dest('./dist/css'))
});

gulp.task('js', function () {
	return gulp.src([
			'./js/jquery/jquery-3.2.1.min.js',
            './js/bootstrap/js/bootstrap.min.js',
            './plugins/toastr/toastr.js',
            './js/script.js',
		])
		
		.pipe(concat('script.min.js'))
		.pipe(uglify().on('error', function (e) {
			console.log(e);
		}))
		.pipe(gulp.dest('./js'));
});

gulp.task('default' , ['css' , 'js']);