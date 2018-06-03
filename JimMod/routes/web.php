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

Route::get('/','indexControllers@index');
Route::get('/Login', 'LoginControllers@Login');
Route::post('/Login', 'LoginControllers@LoginUser');

Route::get('/Registered','RegisteredControllers@Registered');
Route::post('/Registered','RegisteredControllers@RegisteredUser');

Route::get('/ForgetPassword', 'ForgetPasswordControllers@forgetpassword');

Route::get('/Home', 'HomeControllers@Home');
