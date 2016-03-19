<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'blog'], function(){
    Route::group(array('prefix' => 'article'),function(){
        Route::get('/', array(
            'as' => 'blog_article_index',
            'uses' => 'blog\ArticleController@indexArticle',
        ));
        Route::get('/', array(
            'as' => 'blog_article_detail',
            'uses' => 'blog\ArticleController@detailArticle',
        ));
    });
});

/*
|--------------------------------------------------------------------------
| Application Routeste
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
