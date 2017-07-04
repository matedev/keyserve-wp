var gulp = require('gulp'),
    gulpLoadPlugins = require('gulp-load-plugins'),
    plugins = gulpLoadPlugins();


gulp.task('minify', function () {
   gulp.src('wp-content/themes/citytrack/assets/js/app.js')
      .pipe(uglify())
      .pipe(gulp.dest('build'))
});

gulp.task('js', function () {
   return gulp.src('../src/**/*.js')
      .pipe(plugins.jshint())
      .pipe(plugins.jshint.reporter('default'))
      .pipe(plugins.uglify())
      .pipe(plugins.concat('app.min.js'))
      .pipe(gulp.dest('../../prod'));
});

gulp.task('css', function () {
	return gulp.src('../src/**/*.css')
		.pipe(plugins.minify())
		.pipe(plugins.autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))
		.pipe(plugins.concat('style.min.css'))
		.pipe(gulp.dest('../../prod'))
});

gulp.task('greet', function () {
   console.log('Hello world!');
});