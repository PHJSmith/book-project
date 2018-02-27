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
