<?php
Auth::routes();
//frontend
Route::get('/', 'FrontendController@welcome')->name('welcome');
Route::get('about', 'FrontendController@about')->name('about');
Route::get('service', 'FrontendController@service')->name('service');
Route::get('login', 'FrontendController@log')->name('login');
Route::get('register', 'FrontendController@reg')->name('register');

//dashboard
Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');

Route::get('Respiratorydisease', 'DashboardController@Rdisease')->name('Respiratorydisease');
Route::get('TRespiratorydisease', 'DashboardController@TRdisease')->name('TRespiratorydisease');
Route::get('Cancerdisease', 'DashboardController@Cdisease')->name('Cancerdisease');
Route::get('TCancerdisease', 'DashboardController@TCdisease')->name('TCancerdisease');
Route::get('Generaldisease', 'DashboardController@Gdisease')->name('Generaldisease');
Route::get('TGeneraldisease', 'DashboardController@TGdisease')->name('TGeneraldisease');

Route::get('RawHerbs', 'DashboardController@Rherbs')->name('RawHerbs');
Route::get('Products', 'DashboardController@Products')->name('Products');
Route::get('Generalherbs', 'DashboardController@Gherbs')->name('Generalherbs');

Route::get('contact', 'AdminController@contact')->name('contact');
Route::post('contactPost', 'AdminController@contactPost')->name('contactPost');
Route::get('showContacts', 'AdminController@showC')->name('showContacts');
Route::delete('/contactDelete/{id}','AdminController@contactDelete');


//Super
Route::group(['middleware' => ['auth','super' ]], function () {
Route::get('super','SuperController@super')->name('super');
Route::get('showUser', 'SuperController@showU')->name('showUser');
Route::get('editUser{id}', 'SuperController@editU');
Route::put('updateUser{id}', 'SuperController@updateU');
Route::delete('/userDelete/{id}','SuperController@userDelete');

});
//admin
Route::group(['middleware' => ['auth','admin' ]], function () {
Route::get('admin', 'AdminController@admin')->name('admin'); 
Route::get('addDisease', 'AdminController@addD')->name('addDisease');
Route::post('Disease', 'AdminController@store')->name('Disease');
Route::get('showDiseases', 'AdminController@showD')->name('showDiseases');
Route::get('editDisease{id}','AdminController@editD');
Route::put('updateDisease{id}','AdminController@updateD');
Route::delete('/diseaseDelete/{id}','AdminController@diseaseDelete');


Route::get('addHerb', 'AdminController@addH')->name('addHerb');
Route::post('herb', 'AdminController@herbPost')->name('herb');
Route::get('showHerbs', 'AdminController@showH')->name('showHerbs');
Route::get('editHerb{id}','AdminController@editH');
Route::put('updateHerb{id}','AdminController@updateH');
Route::delete('/herbDelete/{id}','AdminController@herbDelete');

});
    