<?php


Route::get('/', 'MainController@index') -> name('emp.index');


Route::get('/show/{id}', 'MainController@showEmp')-> name('emp.show');


Route::get('/create', 'MainController@createNewEmp')-> name('emp.create')-> middleware('auth');
Route::post('/store' , 'MainController@storeNewEmp') -> name('emp.store');


Route::get('/destroy/{id}', 'MainController@destroyEmp') -> name('emp.delete')->middleware('auth');


Route::get('/edit/{id}' , 'MainController@editEmp')-> name('emp.edit')->middleware('auth');
Route::post('/update/{id}', 'MainController@updateEmp')-> name('emp.update');


Route::get('/destroy/{ide}/destroy/{idt}' , 'MainController@destroyBond')-> name('emp.task.destroy')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/show' , 'LoggedController@showUser')->name('user.show');

Route::post('/user/image/set' , 'LoggedController@setUserImg') -> name('userImage.set');
