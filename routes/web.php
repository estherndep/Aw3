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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/projects', 'ProjectController@index')->name('projects');
Route::get('/services/{title}', 'CategoryController@show');

Route::get('/contact', 'ContactController@create')->name('contact');
Route::post('/contact',  'ContactController@mailToAdmin'); 
Route::get('/tis',  'PageController@tis')->name('tis'); 


Route::resource('blog', 'BlogController');

Route::get('/demo', function(){
    return view('blog.single');
});




Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  
    // Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
  


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
