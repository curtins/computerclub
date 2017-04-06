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
    return view('dashboard');
});

 

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/edit/{id}', function () {
    return view('edit');
});

Route::get('select2-autocomplete', 'Select2AutocompleteController@layout');
//Route::get('/', 'Select2AutocompleteController@layout');
Route::get('select2-autocomplete-ajax', 'Select2AutocompleteController@dataAjax');
Route::get('select2-getmember', 'Select2AutocompleteController@getMember');



//Route::get('search',array('as'=>'search','uses'=>'SearchController@search'));
//Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'SearchController@autocomplete'));


 


 
