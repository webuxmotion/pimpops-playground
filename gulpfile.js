var gulp         = require('gulp'),
		sass         = require('gulp-sass'),
		autoprefixer = require('gulp-autoprefixer'),
		cleanCSS    = require('gulp-clean-css'),
		rename       = require('gulp-rename'),
		browserSync  = require('browser-sync').create(),
		concat       = require('gulp-concat'),
		uglify       = require('gulp-uglify'),
    babel = require('gulp-babel'),
    sourcemaps = require('gulp-sourcemaps'),
    include = require('gulp-include'),
    pump = require('pump');

gulp.task('browser-sync', function() {
		browserSync.init({
      proxy: "pimpops-playground",		
			notify: false
		});
});

// SITE
gulp.task('scss-site', function () {
	return gulp.src('site/View/themes/default/*.scss')
	.pipe(sass({
		includePaths: require('node-bourbon').includePaths
	}).on('error', sass.logError))
	.pipe(rename({suffix: '.min', prefix : ''}))
	.pipe(autoprefixer({browsers: ['last 15 versions'], cascade: false}))
	.pipe(cleanCSS())
	.pipe(gulp.dest('site/View/themes/default/app'))
	.pipe(browserSync.stream());
});

// WATCH
gulp.task('watch', function () {

  // SITE
	gulp.watch('site/View/themes/**/*.scss', ['scss-site']);

	// ON CHANGE
	gulp.watch('**/*.php').on('change', browserSync.reload);
});

gulp.task('default', ['scss-site', 'browser-sync', 'watch']);
