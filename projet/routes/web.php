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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ges', function () {
    return view('admin.gestion_users');
});

Route::get('/profil', 'UserapiController@updateProfil_page')->middleware('authentifie');
Route::put('/profil', 'UserapiController@updateProfil')->middleware('authentifie');
Route::get('/logout', 'UserapiController@logout')->middleware('authentifie');


Route::get('/about', function () {
    return view('admin.gestion_users');
})->middleware('auth');
/************list************/
Route::get('/allList','ListController@all_list');
Route::get('/addList','ListController@add_list');
Route::get('/listId','ListController@list_id');
Route::get('/listedit','ListController@put_list');
Route::get('/lang/{lang}','LangController@index');
/*****************************************/
Route::post('/addGroup','groupController@addGroup')->middleware('authentifie');
Route::post('/updateGroup/{title}','groupController@update')->middleware('authentifie');
Route::get('/allGroup','groupController@allGroup')->middleware('authentifie');
Route::get('/deleteGroup/{id}','groupController@delete')->middleware('authentifie');
Route::get('/followers/{title}','groupController@followers')->middleware('authentifie','lang');
//Route::get('/followers','groupController@followers');
Route::get('/followers/{title}/{email}','groupController@addFollower')->middleware('authentifie');
Route::get('/deleteFollower/{id}','groupController@deleteFollower')->middleware('authentifie');

Route::get('/login','VisiteurController@login_page');
Route::get('/signup','VisiteurController@signup_page');
Route::post('/reg','VisiteurController@signup');

Route::post('/login','VisiteurController@login');
Route::get('/home','siteController@index');
Route::get('/blog/{id?}','siteController@blog');
Route::get('/post/{slug}','siteController@show');
Route::get('/about','siteController@about');
Route::get('/contact','siteController@contact')->middleware('authentifie','admin');
Route::post('/contact','siteController@store');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
