// --------------------------------------------------------------------
// Plugins
// --------------------------------------------------------------------

var gulp        	= require('gulp'),
	pug				= require('gulp-pug'),
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
// Task: Pug
// --------------------------------------------------------------------

gulp.task('pug', function buildHTML() {

	return gulp.src(code.pug)
		.pipe(plumber({
			errorHandler: onError
		}))
		.pipe(pug())
		.pipe(gulp.dest(code.root))
		.pipe(browserSync.stream());
});

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

gulp.task('serve', ['pug','sass'], function() {
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
	gulp.watch(code.pug, ['pug']);
	gulp.watch(code.sass, ['sass']);
	gulp.watch(code.js).on('change', browserSync.reload);
});


// --------------------------------------------------------------------
// Task: Default
// --------------------------------------------------------------------

gulp.task('default', ['serve','watch']);