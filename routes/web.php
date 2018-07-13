<?php

use App\Http\Controllers\PagesController;

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





 //pages routes
 Route::get('/','PagesController@index');
  Route::post('/home','PagesController@index');
Route::get('/index','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/blog','PagesController@blog');
Route::get('/contact','PagesController@contact');
Route::get('/gallery','PagesController@gallery');
Route::get('/lifestyle','PagesController@lifestyle');
Route::get('/travels','PagesController@travels');
Route::get('/work','PagesController@work');

//admin 
Route::get('/admin/users','PagesController@users');
Route::get('/admin/users/{id}/delete','PagesController@delete');
Route::get('/admin/articles','PagesController@articles');
Route::post('upload','articleController@create');
Route::get('/admin/addarticle','articleController@addarticle');
Route::get('/admin/{id}/editarticle','articleController@editarticle');
Route::get('/admin/{id}/delete','articleController@delete');
Route::post('/admin/{id}/edit','articleController@edit');
//tags 
Route::get('/index/{tag}','PagesController@index_tag');

Auth::routes();

Route::get('/home', 'PagesController@index')->name('index');
Route::get('/adminlogin', 'PagesController@admin');

////middleware  to assign roles between users and admins
Route::group(['middleware'=>'roles','roles'=>['admin']],function(){
  Route::get('/users','PagesController@users');
  Route::get('/articles','PagesController@articles');
  Route::post('/add-role', 'PagesController@addrole');
});


