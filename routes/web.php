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

//user
Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/registration',function(){
	return view('frontend.registration');
})->name('registration');

Route::post('/registration','Frontend\StudentRegisterController@store');

//male
Route::get('register/index','Frontend\StudentRegisterController@index')->name('register.index');
Route::get('register/{id}','Frontend\StudentRegisterController@show')->name('register.show');
Route::post('register/{id}','Frontend\StudentRegisterController@update');
Route::get('select','Frontend\StudentRegisterController@user');
Route::get('fselect','Frontend\StudentRegisterController@fselect');
Route::get('fee','Backend\FeeController@user');
Route::get('rule','Backend\RuleController@user');

//rollcall
Route::get('rollcall/roll','Frontend\StudentRegisterController@roll');
Route::get('rollcall/{id}','Frontend\StudentRegisterController@rolledit')->name('rollcall.rolledit');
Route::post('rollcall/{id}','Frontend\StudentRegisterController@rollupdate')->name('rollcall.rollupdate');



//femalerollcall
Route::get('fregister/index','Backend\FemaleRegisterController@index')->name('fregister.index');
Route::get('fregister/{id}','Backend\FemaleRegisterController@show')->name('fregister.show');
Route::post('fregister/{id}','Backend\FemaleRegisterController@update');

//admin


Route::group(['prefix' => 'admin'], function () {
	Auth::routes();
});
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin','middleware' => 'auth', 'namespace' => 'Backend'], function () {
		Route::group(['middleware' => 'usertype'], function () {
			Route::resource('rule', 'RuleController');
			Route::resource('fee', 'FeeController');
			Route::resource('rollcall','RollCallController');
			Route::resource('frollcall','FemaleRollCallController');
			Route::resource('select','SelectController');
			Route::resource('fselect','FemaleSelectController');
			Route::resource('record','RecordController');
			Route::resource('frecord','FemaleRecordController');
			Route::resource('payment','PaymentController');
			Route::resource('fpayment','FemalePaymentController');
		});

	Route::resource('user','UserController');
});

