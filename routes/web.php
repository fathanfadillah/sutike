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
    return view('index');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/cargo', function () {
    return view('pages.cargo');
});
Route::get('/catalog/casket', function () {
    return view('pages.catalog.casket');
});
Route::get('/catalog/formula', function () {
    return view('pages.catalog.formula');
});

Auth::routes();

Route::group([
    'prefix' => 'account',
    'middleware' => 'auth'
], function()
{
    Route::get('/dashboard', 'UserController@index')->name('user.dashboard');
    Route::put('/dashboard', 'UserController@update_account_settings')->name('user.account-settings');
    // Billing
    Route::get('/add/billing', 'UserController@create_billing')->name('user.billing-form');
    Route::get('/edit/billing/{id}', 'UserController@edit_billing')->name('user.edit-billing');
    Route::get('/add/shipping', 'UserController@create_shipping')->name('user.shipping-form');
    Route::get('/edit/shipping/{id}', 'UserController@edit_shipping')->name('user.edit-shipping');
    Route::delete('/delete/shipping/{id}', 'UserController@destroy_shipping')->name('user.delete-shipping');
    Route::post('/add/billing', 'UserController@store_billing')->name('user.store-billing');
    Route::put('/edit/billing/{id}', 'UserController@update_billing')->name('user.update-billing');
    Route::post('/add/shipping', 'UserController@store_shipping')->name('user.store-shipping');
    Route::put('/edit/shipping/{id}', 'UserController@update_shipping')->name('user.update-shipping');
    // RajaOngkir
    Route::get('/province/select2', 'RajaOngkirProvinceController@select2')->name('raja-ongkir-provinces.select2');
    Route::get('/city/select2', 'RajaOngkirCityController@select2')->name('raja-ongkir-cities.select2');

});
