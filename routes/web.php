<?php

use Illuminate\Support\Facades\Route;

Route::get('/','LoginController@login')->middleware('alreadyLoggedIn');
Route::post('login','LoginController@LoginUser')->middleware('alreadyLoggedIn');
Route::get('/register','LoginController@register')->middleware('alreadyLoggedIn');
Route::post('/register-user','LoginController@RegisterUser')->middleware('alreadyLoggedIn');
Route::get('/dashboard','loginController@Dashboard')->middleware('isLoggedIn');
Route::get('logout','loginController@Logout');


Route::get('/list','ToDoListController@List')->middleware('isLoggedIn');
Route::get('/add','ToDoListController@ListAdd')->middleware('isLoggedIn');
Route::post('/add-user','ToDoListController@ListAddUser')->middleware('isLoggedIn');
Route::get('/edit/{id}','ToDoListController@Edit')->middleware('isLoggedIn');
Route::post('/update-user/{id}','ToDoListController@update')->middleware('isLoggedIn');
Route::delete('/delete/{id}','ToDoListController@Delete')->middleware('isLoggedIn');



