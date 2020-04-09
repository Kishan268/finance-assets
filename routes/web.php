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

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware' => ['role:finance_assets_superadmin']], function () {
Route::Resource('grade','Admin\GradeController');
Route::Resource('department','Admin\DepartmentController'); 
Route::Resource('entitleclass','Admin\EntitleClassController');
Route::Resource('designation','Admin\DesignationController');
Route::Resource('employee','Admin\EmpMastController');
Route::Resource('company','Admin\CompanyController');
Route::resource('roles', 'RolePermission\RoleController');
Route::resource('permissions', 'RolePermission\PermissionController');	

Route::Resource('users','RolePermission\UserController');
Route::Resource('add-branch','Admin\BranchController');

Route::Resource('assets','Assets\AssetsController');


//});

// Route::group(['middleware' => ['role:users|manager']], function () {
// });
