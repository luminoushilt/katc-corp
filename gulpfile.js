// --------------------------------------------------------------------
// Plugins
// --------------------------------------------------------------------

var gulp        	= require('gulp'),
	sass        	= require('gulp-sass'),
	plumber     	= require('gulp-plumber'),
	prefix      	= require('gulp-autoprefixer'),
	config 			= require('./config.json'), // external config file
	browserSync 	= require('browser-sync').create();


// --------------------------------------------------------------------
// Settings
// --------------------------------------------------------------------

var code = config.code;


// --------------------------------------------------------------------
// Error Handler
// --------------------------------------------------------------------

var onError = function(err) {
	console.log(err);
	this.emit('end');
};


// --------------------------------------------------------------------
// Task: Sass
// --------------------------------------------------------------------

gulp.task('sass', function() {

	return gulp.src(code.sass)
		.pipe(plumber({
			errorHandler: onError
		}))
		.pipe(sass({
			includePaths: ['css'],
			outputStyle: 'expanded',
			onError: browserSync.notify
		}))
		.pipe(prefix(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], {cascade: true}))
		.pipe(gulp.dest(code.css))
		.pipe(browserSync.stream());
});


// --------------------------------------------------------------------
// Task: Browser Sync Server
// --------------------------------------------------------------------

gulp.task('serve', ['sass'], function() {
	browserSync.init({
		server: {
			baseDir: code.root
		}
	});
});


// --------------------------------------------------------------------
// Task: Watch
// --------------------------------------------------------------------

gulp.task('watch', function() {
	gulp.watch(code.sass, ['sass']);
	gulp.watch(code.html).on('change', browserSync.reload);
	gulp.watch(code.js).on('change', browserSync.reload);
});


// --------------------------------------------------------------------
// Task: Default
// --------------------------------------------------------------------

gulp.task('default', ['serve','watch']);