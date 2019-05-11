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
     return view('welcome');
});

Auth::routes();

//======================== Routing untuk user =====================================
Route::get('/home', 'HomeController@index')->name('welcome');

//Pemanggilan tanpa controller
// Route::get('admin/dashboard', function(){
//     return view('templateAdmin.admin.dashboard');
// });


//=================================================================================
						//==Route Group Untuk Admin==//
//=================================================================================

Route::group(['prefix' => 'admin'], function() {
	Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');

	Route::get('/register', 'AuthAdmin\RegisterController@showRegistrationForm')->name('admin.register');
	Route::post('/register', 'AuthAdmin\RegisterController@register')->name('admin.register');
	Route::get('/', 'Admin\AdminController@index')->name('templateAdmin.admin.dashboard');
});

//=================================================================================
						//==Akhir dari Route Group Admin
//=================================================================================


//=================================================================================
					//==Route Group Untuk Super Admin==//
//=================================================================================

Route::get('/superadmin', 'SuperAdmin\SuperAdminController@index')->name('templateAdmin.superadmin.dashboard');

//=================================================================================
					//==Akhir dari Route Super Admin==//
//=================================================================================





// Route untuk login dan register admin
// Route::group(['prefix' => 'admin'], function() {
// 	//untuk login
// 	Route::get('/login' , 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
// 	Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');

// 	//untuk admin
// 	Route::post('/register', 'AuthAdmin\RegisterController@create')->name('admin.register');
// 	// Route::post('/register', 'AuthAdmin\AuthController@postRegister')->name('admin.register');
// 	Route::get('/register', 'AuthAdmin\RegisterController@showRegistrationForm')->name('admin.register.submit');
// 	Route::get('/', 'AdminController@index')->name('admin.dashboard');	
// });
