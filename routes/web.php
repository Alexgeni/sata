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

Route::get('','PostsController@index');




Route::get('post',function(){
	return redirect('/');
});



Route::get('post/{id}','PostsController@post');


Route::get('post/post/{id}',function($id){
	return redirect('post/'.$id);
});


Route::get('create','PostsController@create');


Route::post('create','PostsController@store');





Route::get('livesearch/{q}','PostsController@livesearch');


//controller => PostsController


//Elequent model = > Post


//migration => create_posts_table
 //do all by
//php artisan  make:model Post -mc