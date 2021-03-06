'use strict';

//DEPENDENCIAS
var gulp 		= require('gulp'),
	scss 		= require('gulp-sass'),
	rename 		= require('gulp-rename'),
	uglify 		= require('gulp-uglifyjs'),
	pump 		= require('pump'),
	imagemin 	= require('gulp-imagemin'),
	browserSync = require('browser-sync').create(),
	reload      = browserSync.reload;

//Main vars
var baseDir = {
		dest: 'app/wp-content/themes/cosas',
		src: 'prod',
		scss: '/sass/cosas/**/*.scss',
		css: '/css',
		cssName:'cosas.min.css',
		jsName:'cosas.min.js',
		jsIn: '/js/cosas/**/*.js',
		jsOut: '/js',
		img: '/img',
		local: 'http://cosas.localhost/'
};

//SCSS compiler
gulp.task('scss-dev', function(){
	return gulp.src(baseDir.src+baseDir.scss)
		.pipe(scss.sync({outputStyle:'nested'}).on('error', scss.logError))
		.pipe(rename(baseDir.cssName))
		.pipe(gulp.dest(baseDir.dest+baseDir.css))
		.pipe(browserSync.stream());
});
gulp.task('scss-prod', function(){
	return gulp.src(baseDir.src+baseDir.scss)
		.pipe(scss.sync({outputStyle:'compressed'}).on('error', scss.logError))
		.pipe(rename(baseDir.cssName))
		.pipe(gulp.dest(baseDir.dest+baseDir.css))
});

//JS compiler
gulp.task('uglify-dev', function() {
  gulp.src(baseDir.src+baseDir.jsIn)
    .pipe(uglify({
		output:{
			beautify:true
		}  
  	}))
  	.pipe(rename(baseDir.jsName))
    .pipe(gulp.dest(baseDir.dest+baseDir.jsOut))
	.pipe(browserSync.stream());
});
gulp.task('uglify-prod', function() {
  gulp.src(baseDir.src+baseDir.jsIn)
    .pipe(uglify())
  	.pipe(rename(baseDir.jsName))
    .pipe(gulp.dest(baseDir.dest+baseDir.jsOut))
});

//IMG compress
gulp.task('imagemin',()=>
	gulp.src(baseDir.src+baseDir.img+'**/*{.png,.jpg,.gif,.svg}')
		  .pipe(imagemin())
		  .pipe(gulp.dest(baseDir.dest))
);

//BrowsrSync
gulp.task('browser-sync', function() {
    browserSync.init({
		proxy:baseDir.local
    });

    gulp.watch('**/*{.html,.php}').on('change', reload);
	gulp.watch([baseDir.src+baseDir.scss],['scss-dev']);
	gulp.watch([baseDir.src+baseDir.jsIn],['uglify-dev']);
});

//TASK
gulp.task('dev', ['browser-sync']);

gulp.task('prod',['scss-prod','uglify-prod','imagemin']);
