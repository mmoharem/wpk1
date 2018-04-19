var gulp = require('gulp');


require('./app/gulp/styles');
require('./app/gulp/watch');



//....... GULP DEFAULT TASK

gulp.task('default', ['watch']);