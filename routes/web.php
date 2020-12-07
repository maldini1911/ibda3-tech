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
// web routes

Route::pattern('id', '[0-9]+');
//===> Start Routes Login And Resigster Admin
Route::get('admin/login', 'BackEnd\Login@login');
Route::post('admin/login', 'BackEnd\Login@login_post');
Route::get('admin/logout', 'BackEnd\Login@logout');
Route::get('admin/register', 'BackEnd\Login@register');
Route::post('admin/register', 'BackEnd\Login@register_post');
Route::get('admin/forget/password', 'BackEnd\Login@forget_password');
Route::post('admin/forget/password', 'BackEnd\Login@forget_password_post');
Route::get('admin/reset/password/{token}', 'BackEnd\Login@reset_password');
Route::post('admin/reset/password/{token}', 'BackEnd\Login@reset_password_post');
//===> End Routes Login And Resigster Admin



Route::group(['middleware' => 'auth'], function(){


Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function(){

        Route::get('/', function () {   return view('Admin.app');   });


        //====> Admin Panel Routes
        Route::namespace('BackEnd')->prefix('admin')->group(function(){
            Route::get('dashboard', 'Login@dashboard');
            //===> Routes Users
            Route::resource('users', 'Users')->except(['show']);
            Route::resource('services', 'services')->except(['show']);
            Route::resource('projects', 'projects')->except(['show']);
            Route::resource('posts', 'posts')->except(['show']);
            Route::resource('clients', 'clients')->except(['show']);
            Route::resource('social_media', 'Social_Medias')->except(['show']);
            Route::resource('pages', 'Pages')->except(['show']);
            Route::resource('settings', 'Settings')->except(['show']);

        });


    });

});



//====> Website Routes
Route::namespace('FrontEnd')->group(function(){
    Route::get('/', 'pagesController@index');
    Route::get('works', 'pagesController@works');
    Route::get('app/{id}', 'pagesController@apps_works');
    Route::get('blogs', 'pagesController@blogs');
    Route::get('blog/{id}', 'pagesController@read_blog');

});
