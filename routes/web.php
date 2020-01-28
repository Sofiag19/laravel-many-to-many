<?php


Route::get('/', 'MainController@index') -> name('emp.index');

Route::get('/create', 'MainController@createNewEmp')-> name('emp.create');

Route::post('/store' , 'MainController@storeNewEmp') -> name('emp.store');

Route::get('/destroy/{id}', 'MainController@destroyEmp') -> name('emp.delete');
