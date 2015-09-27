var gulp = require('gulp');
var elixir = require('laravel-elixir');

/**
 * Copy any needed files.
 *
 * Do a 'gulp copyfiles' after bower updates
 */
gulp.task("copyfiles", function() {

  gulp.src("vendor/bower_dl/jquery/dist/jquery.min.js")
    .pipe(gulp.dest("resources/assets/js/"));

  gulp.src("vendor/bower_dl/Materialize/sass/**")
    .pipe(gulp.dest("resources/assets/sass/materialize"));

  gulp.src("vendor/bower_dl/Materialize/dist/css/materialize.min.css")
    .pipe(gulp.dest("resources/assets/css"));

  gulp.src("vendor/bower_dl/Materialize/dist/js/materialize.min.js")
    .pipe(gulp.dest("resources/assets/js/"));

  gulp.src("vendor/bower_dl/Materialize/dist/font/**")
    .pipe(gulp.dest("public/assets/font"));

  gulp.src("vendor/bower_dl/perfect-scrollbar/css/perfect-scrollbar.min.css")
    .pipe(gulp.dest("resources/assets/css"));

  gulp.src("vendor/bower_dl/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js")
    .pipe(gulp.dest("resources/assets/js"));
  
  gulp.src("vendor/bower_dl/angular/angular.min.js")
    .pipe(gulp.dest("resources/assets/js"));

  gulp.src("vendor/bower_dl/moment/min/moment.min.js")
    .pipe(gulp.dest("resources/assets/js"));
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
      'js/jquery.min.js',
      'js/angular.min.js',
      'js/materialize.min.js',
      'js/jquery.dataTables.min.js',
      'js/dataTables.responsive.min.js',
      'js/dataTables.bootstrap.min.js',
      'js/moment.min.js',
      'js/fullcalendar.min.js',
      'js/scheduler.min.js',
      'js/select2.min.js',
      'js/perfect-scrollbar.jquery.min.js',
      'js/app.js'
    ],
    'public/assets/js/all.js',
    'resources/assets'
  	);

  	// Compile Less
  	mix.sass('login.scss', 'public/assets/css/login.css');
    mix.sass('app.scss', 'resources/assets/css/app.css');
    //@TODO: need to create admin_all.css
    /*
    * materialize
    * fullcalendar
    * datatable
    * schedular
    * select2
    */
    mix.styles([
        'css/materialize.min.css',
        'css/fullcalendar.min.css',
        'css/scheduler.min.css',
        'css/datatable.css',
        'css/responsive.dataTables.min.css',
        'css/select2-materialized.css',
        'css/app.css'
    ], 
    'public/assets/css/all.css',
    'resources/assets'
    );

    // mix.sass('app.scss');
});
