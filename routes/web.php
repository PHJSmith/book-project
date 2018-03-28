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

Route::view('/dashboard', 'dashboard.index')->name('dashboard');

Route::resource('/', 'DashboardController');

Route::resource('characterinformation', 'CharacterController');

Route::resource('plotinfo', 'PlotController');

//Route::get('/newproject', 'NewProjectController@index')->name('newproject');

Route::resource('newproject', 'NewProjectController');

Route::resource('relationshipmanagement', 'RelationshipManagementController');

Route::resource('editproject', 'EditProjectController');

Route::resource('deleteproject', 'DeleteProjectController');

Route::resource('accountmanagement', 'AccountManagementController');

Route::resource('logout', 'LogoutController');

Route::resource('resetpassword', 'ResetPasswordController');

Route::resource('editcharacter', 'EditCharacterController');

Route::post('project/create', 'ProjectController@create')->name('project.create');
Route::resource('project', 'ProjectController');

Route::resource('character', 'CharacterController');

Route::resource('plotnote', 'PlotnoteController');

Route::post('/login', 'Auth\AuthController@login')->name('login');
Route::view('/login', 'auth.login')->name('login');
Route::resource('auth', 'AuthController');

Route::get('logout', ['uses' => 'Auth\AuthController@logout'])->name('logout');

Route::post('/register', 'Auth\AuthController@register')->name('register');
Route::view('/register', 'auth.register')->name('register');
