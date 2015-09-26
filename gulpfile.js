var gulp = require('gulp');
var elixir = require('laravel-elixir');

/**
 * Copy any needed files.
 *
 * Do a 'gulp copyfiles' after bower updates
 */
gulp.task("copyfiles", function() {

  gulp.src("vendor/bower_dl/jquery/dist/jquery.js")
    .pipe(gulp.dest("resources/assets/js/"));

  gulp.src("vendor/bower_dl/Materialize/sass/**")
    .pipe(gulp.dest("resources/assets/sass/materialize"));

  gulp.src("vendor/bower_dl/Materialize/dist/js/materialize.js")
    .pipe(gulp.dest("resources/assets/js/"));

  gulp.src("vendor/bower_dl/Materialize/dist/font/**")
    .pipe(gulp.dest("public/assets/font"));

});

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	// Combine scripts
  	mix.scripts([
      'js/jquery.js',
      'js/materialize.js'
    ],
    'public/assets/js/admin.js',
    'resources/assets'
  	);

  	// Compile Less
  	mix.sass('login.scss', 'public/assets/css/login.css');

    //@TODO: need to create admin_all.css
    /*
    * materialize
    * fullcalendar
    * datatable
    * schedular
    * select2
    */


    // mix.sass('app.scss');
});
