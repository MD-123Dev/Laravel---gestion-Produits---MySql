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

Route::get('/', function () {
    return view('welcome');
});

Route::get('produit/create','ProductController@index');
//Route::get('/search', 'LiveSearch@search');
Route::get('/produit/action', 'LiveSearch@action')->name('search.produit');
Route::resource('produit', 'ProductController'); //***group tput get patch ...and he know inteligent what you need */
Route::get('detail/view/{id}', 'DetailController@detailProduit')->name('detail.view'); //*you must add route diffrent with produit if youw ant work
Route::post('file-import', 'ProductController@cvsImpoter')->name('file-import');


///**ajax */

//Route::get('/utenti', 'TestController@index')->name('formatore.utenti');
//Route::get('/utenti/action', 'TestController@action')->name('formatore.utenti.action');