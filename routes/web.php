<?php

use App\Category;

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
		\DB::enableQueryLog();
		            // ->join('contacts', 'users.id', '=', 'contacts.user_id')

		// $data = Category::join('news_articles', function($join) {
		// 		$join->on('news_articles.category_id', '=' , 'news_categories.id')
		// 					->take(10)->orderBy('news_articles.id','DESC');
		// })->groupBy('news_categories.id')->get();
		$starttime = microtime(true);

		$data = Category::paginate(10);
		$data = $data->transform(function($category) {
			    $topProducts = $category->articles()->orderBy('id','DESC')->take(10)->get();
			    unset($category->articles);
			    $category->articles = $topProducts;
			    return $category;
		});
		$endtime = microtime(true);
		$timediff = $endtime - $starttime;
		// return $timediff;
		// return $data;
		// return $data;
		// 				->join('contacts', function ($join) {
  //           $join->on('users.id', '=', 'contacts.user_id')->orOn(...);
  //       })
  //       ->get();

		// with(['articles' => function($query) {
		// 	    $query->latest()->take(10);
		// }])->get();
		
            return \DB::getQueryLog();
     
		// dd($data);
    // return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('category','CategoriesController');
Route::resource('article','ArticlesController');

Route::get('/site', function() {
	$breaking_news = [
		'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ipsum!',
		'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero est minus consequatur ullam ex obcaecati non voluptatibus. At, corrupti minus.',
		'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos a veritatis, explicabo assumenda debitis.',
	];
	return view('layouts.site',compact('breaking_news'));
});
