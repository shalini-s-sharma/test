<?php

use Illuminate\Support\Facades\Route;

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

#front end

Route::get('/', 'HomeController@index');
Route::any('/contact-us','HomeController@contactus');
Route::get('google',function(){
    return Socialite::driver('google')->redirect();
});
Route::get('callback','HomeController@googleCallback');




Auth::routes();
Route::middleware(['auth'])->group(function(){
   // Route::any('dashboard','DashboardController@home');
    Route::any('dashboard','DashboardController@index');
    Route::any('tickets','TicketController@index');
    Route::any('projects','ProjectController@index')->name('project.view');
    Route::any('projects/create','ProjectController@create')->name('project.create');
    Route::any('projects/delete','ProjectController@delete')->name('project.delete');
    

    // invoices
    Route::any('invoice','InvoiceController@index')->name('company.invoice');
    Route::any('invoice/{company_id}','InvoiceController@invoices')->name('invoice.view');
    Route::any('new_invoice/{company_id}','InvoiceController@new_invoice')->name('new_invoice');



    Route::any('editcard','DashboardController@editcard')->name('editcard');

});

