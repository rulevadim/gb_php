'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var jsonServer = require('gulp-json-srv').create();
var reload = browserSync.reload;

var src = {
	content: 'source/content/**/*.*',
	sass: 'source/styles/sass/**/*.*',
	css: 'source/styles/**/*.css'
}

var www = 'E:/OpenServer/OSPanel/domains/mydomain.dev';

var dest = {
	css: www + '/css',
	db: www + '/db.json',
	watch: www + '/**/*.*'
}

gulp.task('source', function(){
	return gulp.src(src.content, {since: gulp.lastRun('source')})
		.pipe(gulp.dest(www))
});

gulp.task('sass', function() {
	return gulp.src(src.sass)
		.pipe(sass())
		.pipe(gulp.dest(dest.css));
});

gulp.task('css', function() {
	console.log(dest.css);
	return gulp.src(src.css)
		.pipe(gulp.dest(dest.css));
});

gulp.task('json', function() {
	return gulp.src(dest.db)
		.pipe(jsonServer.pipe());
});

gulp.task('watch', function() {
	gulp.watch(src.content, gulp.series('source'));
	gulp.watch(src.sass, gulp.series('sass'));
	gulp.watch(src.css, gulp.series('css'));
	gulp.watch(dest.db, gulp.series('json'));
});

gulp.task('server', function() {
	browserSync.init({
		proxy: 'mydomain.dev'
		// server: www,
		// port: 1000
	});
	browserSync.watch(dest.watch).on('change', reload);
});


gulp.task('default', gulp.series('source', 'sass', 'css', gulp.parallel('watch', 'server')));
// gulp.task('default', gulp.series('source', 'sass', 'css', 'watch'));