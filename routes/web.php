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

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

//login admin
Route::get('admin', 'HomeController@admin')->middleware('admin');

//Main pages
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/about', function() {
    return view('about');
});
Route::get('/help', function() {
    return view('help');
});

//Route for data table
Route::get('/table/data', function() {
    return view('data_table.table');
});


//Route for Menu Mailbox
Route::get('/mailbox', 'MailboxController@inbox')->name('inbox');
Route::get('/mailbox/inbox', 'MailboxController@inbox')->name('inbox');
Route::get('/mailbox/compose', 'MailboxController@compose')->name('compose');
Route::get('/mailbox/sent', 'MailboxController@sent')->name('sent');
Route::get('/mailbox/draft', 'MailboxController@draft')->name('draft');
Route::get('/mailbox/trash', 'MailboxController@trash')->name('trash');
Route::get('/mailbox/readmail', 'MailboxController@readEmail')->name('read_email');

//Route for Table
Route::get('/table', function() {
    return view('table.table');
});

//Route for Menu Users
Route::get('/user/profile', function(){
	return view('profile');
});

//Route Menu agenda
Route::get('/calendar', function() {
    return view('calendar');
});

//Route Test
Route::get('/test', 'TestController@layout')->name('layout');
Route::post('/prosesuser', 'TestController@index')->name('test');