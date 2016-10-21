var gulp = require('gulp');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

gulp.task('default', function(){
    gulp.src([
            'FlipClock/dist/flipclock.css',
        ])
        .pipe(gulp.dest('../../css'));
    gulp.src([
            'FlipClock/dist/flipclock.min.js',
        ])
        .pipe(gulp.dest('../../js'));
});
