'use strict';
var gulp = require('gulp'),
    watch = require('gulp-watch'),
    autoprefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    rigger = require('gulp-rigger'),
    concat = require('gulp-concat'),
    htmlmin = require('gulp-html-minifier'),
    csso = require('gulp-csso');

var path = {
    build: {
        html: 'html/',
        js: 'assets/js/',
        style: 'assets/style/',
    },
    src: {
        html: [
            'src/*.html',
            '!src/*.inc.html'
        ],
        js: 'src/assets/js/main.js',
        style: 'src/assets/style/style.sass',
    },
    watch: {
        html: 'src/*.html',
        js: 'src/assets/js/**/*.*',
        style: 'src/assets/style/**/*.*',
    }
};

gulp.task('html', function () {
    gulp.src(path.src.html)
        .pipe(rigger())
        .pipe(htmlmin({collapseWhitespace: true, conservativeCollapse: true, decodeEntities: true, html5: true, useShortDoctype: true, sortAttributes: true}))
        .pipe(gulp.dest(path.build.html));
});

gulp.task('js', function () {
    gulp.src(path.src.js)
        .pipe(rigger())
        .pipe(sourcemaps.init())
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.build.js));
});

gulp.task('style', function () {
    gulp.src(path.src.style)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('style.css'))
        .pipe(rigger())
        .pipe(autoprefixer('last 3 versions'))
        .pipe(csso())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.build.style));
});

gulp.task('build', [
    'html',
    'style',
    'js'
]);

gulp.task('watch', function () {
    watch([path.watch.html], function (event, cb) {
        gulp.start('html');
    });

    watch([path.watch.style], function (event, cb) {
        gulp.start('style');
    });

    watch([path.watch.js], function (event, cb) {
        gulp.start('js');
    });
});

gulp.task('default', ['build', 'watch']);
