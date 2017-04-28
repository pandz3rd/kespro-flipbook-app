var gulp = require('gulp');
var browserSync = require('browser-sync').create();

gulp.task('serve',function(){
	browserSync.init({
	     open:false,
	     notify: false,
	     port: 9000,
	     server: {
	       baseDir: ['app'],
	       routes: {
		 '/bower_components': 'bower_components'
	       }
	     }
	   });
})
gulp.task('default', function() {
  // place code for your default task here
});
