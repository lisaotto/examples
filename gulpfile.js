var _ = require('lodash'),
    gulp = require('gulp'),
    sass = require('gulp-sass'),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
	uglify = require('gulp-uglify'),
	browserify = require('browserify'),
	source = require('vinyl-source-stream'),
	buffer = require('vinyl-buffer'),
    sourcemaps = require('gulp-sourcemaps'),
    babelify = require('babelify'),
    watchify = require('watchify');

var paths = {
    cssIn: 'scss/**/*.scss',
    cssOut: 'css',
    jsIn: 'js/src/main.js',
    jsOut: 'js/min'
};

function css() {
    var processors = [
        autoprefixer('last 2 versions')
    ];

    gulp.src( paths.cssIn )
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(postcss(processors))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest( paths.cssOut ));
}

gulp.task('css', css);

function build(watch) {

    var bundler;

    if ( watch ) {
        bundler = watchify(
            browserify(paths.jsIn,
                _.assign(watchify.args, {
                    debug: true
                })
            )
        );

        bundler.on('update', bundle);
    } else {
        bundler = browserify(paths.jsIn, {
            debug: true
        });
    }

    bundler.on('error', function(error) {
        console.log('Browserify error', error);
    });

    function bundle() {

        console.log('Bundle...');

        var hrTime = process.hrtime();
        var t1 = hrTime[0] * 1000 + hrTime[1] / 1000000;

        bundler
            .transform('babelify', {
                presets: ['es2015']
            })
            .bundle()
            .pipe(source('script.js'))
            .pipe(buffer())
            .pipe(sourcemaps.init({
                loadMaps: true
            }))
            .pipe(sourcemaps.write())
            .pipe(gulp.dest( paths.jsOut ));

        if ( !watch ) {
            bundler
                .transform('babelify', {
                    presets: ['es2015']
                })
                .bundle()
                .pipe(source('script.min.js'))
                .pipe(buffer())
                .pipe(uglify())
                .pipe(gulp.dest( paths.jsOut ));
        }

        hrTime = process.hrtime();
        var t2 = hrTime[0] * 1000 + hrTime[1] / 1000000;

        console.log('Bundle took ' + Math.round(t2 - t1) + ' ms');

    }

    return bundle();
}

gulp.task('build', function() {
    build();
});

gulp.task('build-watch', function() {
    build(true);
});

gulp.task('watch', ['css', 'build-watch'], function() {
    gulp.watch('./scss/*.scss', ['css']);
});

gulp.task('default', ['css', 'build', 'watch']);