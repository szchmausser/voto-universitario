const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/*
mix.js('resources/assets/js/vio/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
;
*/

mix.sass('resources/assets/sass/app.scss', 'public/css')
	.scripts([
	'resources/assets/js/vio/jquery-2.2.4.min.js',
	'resources/assets/js/vio/jquery.dataTables.min.js',
	'resources/assets/js/vio/dataTables.buttons.min.js',
	'resources/assets/js/vio/jszip.min.js',
	'resources/assets/js/vio/pdfmake.min.js',
	'resources/assets/js/vio/vfs_fonts.js',
	'resources/assets/js/vio/buttons.print.min.js',
	'resources/assets/js/vio/buttons.html5.min.js',
	'resources/assets/js/vio/moment.min.js',
	'resources/assets/js/vio/moment-with-locales.js'
	], 'public/js/app.js')
   .styles([
		'public/css/app.css',
    	'resources/assets/css/jquery.dataTables.min.css',
    	'resources/assets/css/buttons.dataTables.min.css',
    	'resources/assets/css/my_css.css'
	], 'public/css/app.css')
;