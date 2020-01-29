<?php


Route::get('/', 'MainController@index') -> name('emp.index');

Route::get('/create', 'MainController@createNewEmp')-> name('emp.create');

Route::post('/store' , 'MainController@storeNewEmp') -> name('emp.store');

Route::get('/destroy/{id}', 'MainController@destroyEmp') -> name('emp.delete');

Route::get('/edit/{id}' , 'MainController@editEmp')-> name('emp.edit');

Route::post('/update/{id}', 'MainController@updateEmp')-> name('emp.update');

Route::get('/destroy/{ide}/destroy/{idt}' , 'MainController@destroyBond')-> name('emp.task.destroy');

Route::get('/show/{id}', 'MainController@showEmp')-> name('emp.show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
