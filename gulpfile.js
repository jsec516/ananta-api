var gulp = require('gulp');
var elixir = require('laravel-elixir');

elixir(function(mix) {
  // copy files
  mix
    // Copy webfont files from /vendor directories to /public or /resources directory.
    .copy("vendor/bower_dl/jquery/dist/jquery.min.js", "resources/assets/js/")
    .copy("vendor/bower_dl/Materialize/dist/css/materialize.min.css", "resources/assets/js/")
    .copy("vendor/bower_dl/Materialize/dist/js/materialize.min.js", "resources/assets/js/")
    .copy("vendor/bower_dl/Materialize/dist/font/**", "public/assets/font")
    .copy("vendor/bower_dl/perfect-scrollbar/css/perfect-scrollbar.min.css", "resources/assets/css")
    .copy("vendor/bower_dl/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js", "resources/assets/js")
    .copy("vendor/bower_dl/angular/angular.min.js", "resources/assets/js")
    .copy("vendor/bower_dl/moment/min/moment.min.js", "resources/assets/js")
    .copy("vendor/bower_dl/fullcalendar/dist/fullcalendar.min.css", "resources/assets/css")
    .copy("vendor/bower_dl/fullcalendar/dist/fullcalendar.min.js", "resources/assets/js")
    .copy("vendor/bower_dl/fullcalendar-scheduler/dist/scheduler.min.css", "resources/assets/css")
    .copy("vendor/bower_dl/fullcalendar-scheduler/dist/scheduler.min.js", "resources/assets/js")
    // compile preprocessor
    .sass('backend/b_app.scss', 'resources/assets/css/b_app.css')
    .sass('frontend/f_app.scss', 'resources/assets/css/f_app.css')
    // merge css
    .styles([
      'css/materialize.min.css',
      'css/b_app.css'
      ], 
      'public/assets/css/min_all.css',
      'resources/assets')
    .styles([
      'css/materialize.min.css',
      'css/f_app.css'
      ], 
      'public/assets/css/f_min_all.css',
      'resources/assets')
    .styles([
      'css/materialize.min.css',
      'css/fullcalendar.min.css',
      'css/scheduler.min.css',
      'css/b_app.css'
      ], 
      'public/assets/css/cal_all.css',
      'resources/assets')
    .styles([
      'css/materialize.min.css',
      'css/datatable.css',
      'css/responsive.dataTables.min.css',
      'css/select2-materialized.css',
      'css/b_app.css'
      ],
      'public/assets/css/tf_all.css',
      'resources/assets')
    .styles([
      'css/materialize.min.css',
      'css/select2-materialized.css',
      'css/b_app.css'
      ],
      'public/assets/css/frm_all.css',
      'resources/assets')
    // merge js
    .scripts([
      'js/jquery.min.js',
      'js/materialize.min.js',
      'js/perfect-scrollbar.jquery.min.js',
      'js/backend/app.js'
      ],
      'public/assets/js/min_all.js',
      'resources/assets')
    .scripts([
      'js/jquery.min.js',
      'js/angular.min.js',
      'js/materialize.min.js',
      'js/frontend/app.js'
      ],
      'public/assets/js/f_min_all.js',
      'resources/assets')
    .scripts([
      'js/jquery.min.js',
      'js/angular.min.js',
      'js/materialize.min.js',
      'js/perfect-scrollbar.jquery.min.js',
      'js/backend/app.js'
      ],
      'public/assets/js/ma_all.js',
      'resources/assets')
    .scripts([
      'js/jquery.min.js',
      'js/materialize.min.js',
      'js/moment.min.js',
      'js/fullcalendar.min.js',
      'js/scheduler.min.js',
      'js/perfect-scrollbar.jquery.min.js',
      'js/backend/app.js'
      ],
      'public/assets/js/cal_all.js',
      'resources/assets')
    mix.scripts([
      'js/jquery.min.js',
      'js/jquery.dataTables.min.js',
      'js/dataTables.responsive.min.js',
      'js/select2.min.js',
      'js/perfect-scrollbar.jquery.min.js',
      'js/backend/app.js'
      ],
      'public/assets/js/tf_all.js',
      'resources/assets')
    mix.scripts([
      'js/jquery.min.js',
      'js/select2.min.js',
      'js/perfect-scrollbar.jquery.min.js',
      'js/backend/app.js'
      ],
      'public/assets/js/frm_all.js',
      'resources/assets')
    // Apply version control
    .version(["public/assets/css/min_all.css", "public/assets/css/f_min_all.css", "public/assets/css/cal_all.css", "public/assets/css/tf_all.css", "public/assets/css/frm_all.css", "public/assets/js/f_min_all.js", "public/assets/js/min_all.js", "public/assets/js/ma_all.js", "public/assets/js/cal_all.js", "public/assets/js/tf_all.js", "public/assets/js/frm_all.js"])
});
/**
 * Copy any needed files.
 *
 * Do a 'gulp copyfiles' after bower updates
 */
 /*gulp.task("copyfiles", function() {

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
});*/

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

 /*elixir(function(mix) {
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
  );*/

  	// Compile Less
  	//mix.sass('login.scss', 'public/assets/css/login.css');
    //mix.sass('app.scss', 'resources/assets/css/app.css');
    //@TODO: need to create admin_all.css
    /*
    * materialize
    * fullcalendar
    * datatable
    * schedular
    * select2
    */
    /*mix.styles([
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
      );*/

    // mix.sass('app.scss');
  //});
