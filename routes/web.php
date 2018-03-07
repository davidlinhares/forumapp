<?php
//MAIN APP ROUTES
Auth::routes();
Route::get('/', function () {
    if(Auth::check()){
      return redirect('home');
    } else {
      return redirect('welcome');
    }
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome', function(){
  return view('welcome');
})->name('welcome');
//TOPIC ROUTES
Route::get('/topic/{topic}', 'TopicController@index')->name('topic.index');
//POST ROUTES
Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post', 'PostController@store')->name('post.store');
Route::get('/post/{post}', 'PostController@show')->name('post.show');
Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/post/{post}', 'PostController@update')->name('post.update');
Route::delete('/post/{post}', 'PostController@destroy')->name('post.destroy');
Route::post('/search', 'PostController@search')->name('post.search');

//COMMENT ROUTES
Route::get('/comment', 'CommentController@index')->name('comment.index');
Route::get('/comment/create', 'CommentController@create')->name('comment.create');
Route::post('/post/{post}/comment', 'CommentController@store')->name('comment.store');
Route::get('/comment/{comment}', 'CommentController@show')->name('comment.show');
Route::get('/comment/{comment}/edit', 'CommentController@edit')->name('comment.edit');
Route::patch('/post/{post}/comment/{comment}', 'CommentController@update')->name('comment.update');
Route::delete('/post/{post}/comment/{comment}', 'CommentController@destroy')->name('comment.destroy');
