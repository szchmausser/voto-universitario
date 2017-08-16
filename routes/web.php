<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/* COLOCAR NOMBRE A UNA RUTA (para usarla en los enlaces con Laravel Collective):
https://laravel.com/docs/5.4/routing#named-routes
https://laravel.io/forum/09-25-2014-how-to-get-font-awesome-icons-to-show-up-when-using-link-to-route */
Route::get('/', 'CRUDController@index')->name('index');

Route::delete('/destroy/{id}', 'CRUDController@destroy');

Route::resource('crud', 'CRUDController');

Route::get('/descargarpdf/{id}', 'CRUDController@DescargarPDF');

Route::get('datatable', 'CRUDController@get_datatable');

/*******************************************************************************/
/*Eliminar index.php de la url de la aplicacion cuando se accede por IP*/
/*https://laravel.io/forum/09-15-2015-removing-indexphp-from-url-laravel-5116*/
/* 1) cambiar DocumentRoot /var/www/html/ a DocumentRoot /var/www/
/* 2) agregar debajo:
 <Directory /var/www/laravel5app/public/>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
</Directory>
/*******************************************************************************/

/*******************************************************************************/
/* Corregir error de storage cuando migramos el sistema de un servidor a otro */
/* file_put_contents(/var/www/laravel5app/storage/framework/sessions/cYJGmqjvR9W5izriOTQT6yWUJldCoJuWlHuMzGZv): failed to open stream: No such file or directory */
/*https://laravel.io/forum/06-19-2015-laravel-storageframeworksessions-on-ec2-gives-failed-to-open-stream*/
/* 1) ejecutar en la consola: php artisan config:clear
/*******************************************************************************/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//https://stackoverflow.com/questions/43585416/how-to-logout-and-redirect-to-login-page-using-laravel-5-4
//https://github.com/Laraveles/lang-spanish
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
