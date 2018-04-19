var gulp = require('gulp');
var browserSync = require('browser-sync').create('server-name');
var watch = require('gulp-watch');




//....... GULP WATCH TASK

gulp.task('watch', function() {

    browserSync.init({
        server: {
            baseDir: "./"
        }
        // proxy: "http://localhost/job/work-flow/wf1"
    });

    // ..  WATCH Styles
    gulp.watch('./index.html', function() {
        browserSync.reload();
    });

    // // ..  WATCH Styles
    // gulp.watch('./src/sass/style.scss', ['styles'])
    // browserSync.reload();
    // ..  WATCH Styles
    gulp.watch('./app/src/sass/style.scss', function() {
        gulp.start('cssInject');
    });

});

gulp.task('cssInject', ['styles'], function() {
    return gulp.src('./app/dest/css/style.css')
        .pipe(browserSync.stream());
})