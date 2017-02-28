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

Route::get('', 'HomepageController')->name('home');

Route::get('blog/{id?}', 'BlogPostController@post_detail')->where('id', '[0-9]+')->name('blog_detail');

Route::get('list', 'BlogPostController@post_list')
    ->name('post_list');

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('contact/{who?}', function ($who = null) {

    $contact_view = view('contact');
    $contact_view->who = $who;
    $contact_view->recipients = ['Stuart', 'Kevin', 'John'];

    return $contact_view;
})->name('contact someone');


/*Route::get('laracast', function () {
    return view('laracast');
});

Route::get('product/{id}', function ($product_id) {
    return 'This is product ' . $product_id;
})->where('id', '[0-9]+');

Route::get('contact/{name}', function ($name) {
    return 'Hello ' . $name;
})->where('name', '[a-zA-Z]+');*/


