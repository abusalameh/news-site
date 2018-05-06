<?php

use News\Category;

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
		return redirect()->route('site.index');
	// 	$categories = Category::paginate(3);
	// 	return $categories[0]->getLatestFourArticles();
	// 	$breaking_news = [
	// 	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ipsum!',
	// 	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero est minus consequatur ullam ex obcaecati non voluptatibus. At, corrupti minus.',
	// 	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos a veritatis, explicabo assumenda debitis.',
	// ];
	// return view('layouts.site',compact('breaking_news'));
});
Route::resource('site','SiteController');
Route::get('/category/{id}', 'SiteController@getCategory');
Route::get('/article/{id}', 'SiteController@getArticle');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
		Route::get('/', function() {
				return redirect()->route('category.index');
		});
    Route::resource('category','CategoriesController');
		Route::resource('article','ArticlesController');
});


