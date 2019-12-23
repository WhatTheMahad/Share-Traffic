<?php

Route::get('/ ' ,function () {
    return view('index');
});

Route::get('/ contact' ,function () {
    return view('contact');
});

//Route::get('/ view' ,function () {
  //  return view('view');
//});

Route::get('/page','FileController@showUploadForm')->name('page.file')->middleware('sec1');

Route::post('/page','FileController@storeFile')->name('storeFile')->middleware('sec1');


Route::get('/view','FileController@display')->middleware('sec1');   //Files Showing  //Working

Route::get('/delete/{id}','FileController@delete')->middleware('sec1');        //Delete

Route::get('/download', 'FileController@download')->middleware('sec1');         //Download

Route::get('/editimage/{id}','FileController@update')->middleware('sec1');     //update

Route::get('/updateimage/(id)','FileController@updated');

Route::get('/update' ,function () {
    return view('update');
});



Route::get('/ auth.app' ,function () {
    return view('auth.app');
});


Route::get('/ account' ,function () {
    return view('account');
});

Route::get('/ auth.login' ,function () {
    return view('auth.login');
});

Route::get('/ auth.register' ,function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
