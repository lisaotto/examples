var gulp = require('gulp'),
	uglify = require('gulp-uglify'),
	browserify = require('browserify'),
	source = require('vinyl-source-stream'),
	buffer = require('vinyl-buffer');

gulp.task('js', function() {

    browserify('js/src/main.js').bundle()
        .pipe(source('script.js'))
        .pipe(gulp.dest('js/min'));

    browserify('js/src/main.js').bundle()
        .pipe(source('script.min.js'))
        .pipe(buffer())
        .pipe(uglify())
        .pipe(gulp.dest('js/min'));
});

gulp.task('watch', ['js'], function() {
	gulp.watch( 'js/src/**/*.js', ['js'] )
});

gulp.task('default', ['js', 'watch']);