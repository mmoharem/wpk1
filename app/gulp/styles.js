var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var postcss = require('gulp-postcss');
var postcssImport = require('postcss-import');
var rename = require('gulp-rename');
var prefixerCore = require('autoprefixer-core');
var rtlcss = require('gulp-rtlcss');



var styleSrc = './app/src/sass/style.scss';
var styleDest = './app/dest/css';




//....... GULP STYLES TASK

gulp.task('styles', function() {

    var processors = [
        prefixerCore({
            browsers: ['last 5 versions']
        }),

        rtlcss,
        rename
    ];

    return gulp.src(styleSrc)

    .pipe(sourcemaps.init())
        // .pipe(sass().on('error', sass.logError))
        .pipe(sass())
        .on('error', function(errorInfo) {
            console.log(errorInfo.toString());
            this.emit('end');
        })
        .pipe(postcss(processors))

    .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(styleDest));
});