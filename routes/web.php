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

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@verify');

//employee routes

Route::group(['middleware' => 'sess'], function(){
    Route::get('/employee', 'EmployeeController@home')->name('employee.home');

    Route::get('/employee/orders', 'EmployeeController@showOrders')->name('employee.showOrders');

    Route::get('/employee/orders/id/edit', 'EmployeeController@editOrder')->name('employee.editOrder');

    Route::get('/employee/orders/id/delete', 'EmployeeController@deleteOrder')->name('employee.deleteOrder');

<<<<<<< HEAD
Route::get('/employee/tables', 'EmployeeController@showTables')->name('employee.tables.show');
Route::post('/employee/tables', 'EmployeeController@toggleTable');

Route::get('/employee/tables/available', 'EmployeeController@showAvailableTables')->name('employee.availableTables');
Route::get('/employee/tables/occupied', 'EmployeeController@showOccupiedTables')->name('employee.occupiedTables');
Route::post('/employee/tables/occupied', 'EmployeeController@toggleTable');
Route::post('/employee/tables/available', 'EmployeeController@toggleTable');



Route::get('/employee/categories', 'EmployeeController@showCategories')->name('employee.showCategories');
Route::get('/employee/items', 'EmployeeController@showItems')->name('employee.items.show');
=======
    Route::get('/employee/orders/new', 'EmployeeController@newOrder')->name('employee.newOrder');
>>>>>>> e68a402adebea77625da524a5d440605101cc4b7

    Route::get('/employee/tables', 'EmployeeController@showTables')->name('employee.tables.show');
    Route::get('/employee/categories', 'EmployeeController@showCategories')->name('employee.showCategories');
    Route::get('/employee/items', 'EmployeeController@showItems')->name('employee.items.show');




    //admin routes
    Route::group(['middleware' => 'admin'], function(){
        Route::get('/admin', 'AdminController@home')->name('admin.home');

        Route::get('/admin/items', 'AdminController@showItems')->name('admin.showItems');

        Route::get('/admin/items/new', 'AdminController@newItem')->name('admin.newItem');
        Route::post('/admin/items/new', 'AdminController@storeItem')->name('admin.storeItem');

        Route::get('/admin/items/{id}/edit', 'AdminController@editItem')->name('admin.editItem');
        Route::post('/admin/items/{id}/edit', 'AdminController@updateItem');

        Route::get('/admin/items/{id}/remove', 'AdminController@removeItem')->name('admin.removeItem');
        Route::post('/admin/items/{id}/remove', 'AdminController@deleteItem');

        Route::get('/admin/categories', 'AdminController@showCategories')->name('admin.showCategories');

        Route::get('/admin/categories/new', 'AdminController@newCategory')->name('admin.newCategory');
        Route::post('/admin/categories/new', 'AdminController@createCategory');

        Route::get('/admin/categories/{id}/edit', 'AdminController@editCategory')->name('admin.editCategory');

        Route::post('/admin/categories/{id}/edit', 'AdminController@updateCategory');

        Route::get('/admin/categories/{id}/remove', 'AdminController@removeCategory')->name('admin.removeCategory');
        Route::post('/admin/categories/{id}/remove', 'AdminController@deleteCategory');

        Route::get('/admin/employees', 'AdminController@showEmployees')->name('admin.showEmployees');
        Route::post('/admin/employees', 'AdminController@searchEmployees');

        Route::get('/admin/employees/new', 'AdminController@newEmployee')->name('admin.newEmployee');
        Route::post('/admin/employees/new', 'AdminController@createEmployee');

        Route::get('/admin/employees/{id}/edit', 'AdminController@editEmployee')->name('admin.editEmployee');
        Route::post('/admin/employees/{id}/edit', 'AdminController@updateEmployee');

        Route::get('/admin/employees/{id}/remove', 'AdminController@removeEmployee')->name('admin.removeEmployee');
        Route::post('/admin/employees/{id}/remove', 'AdminController@deleteEmployee');

        Route::get('/admin/tables', 'AdminController@showTables')->name('admin.showTables');
        Route::post('/admin/tables', 'AdminController@toggleTables');

        Route::get('/admin/tables/available', 'AdminController@showAvailableTables')->name('admin.showAvailableTables');
        Route::post('/admin/tables/available', 'AdminController@toggleAvailableTables');

        Route::get('/admin/tables/occupied', 'AdminController@showOccupiedTables')->name('admin.showOccupiedTables');
        Route::post('/admin/tables/occupied', 'AdminController@toggleOccupiedTables');

        Route::get('/admin/tables/new', 'AdminController@newTable')->name('admin.newTable');
        Route::post('/admin/tables/new', 'AdminController@addTable');

        Route::get('/admin/tables/{id}/remove', 'AdminController@removeTable')->name('admin.removeTable');
        Route::post('/admin/tables/{id}/remove', 'AdminController@deleteTable');

        Route::get('/admin/profile', 'AdminController@showProfile')->name('admin.showProfile');

        Route::get('/admin/profile/edit', 'AdminController@editProfile')->name('admin.editProfile');
        Route::post('/admin/profile/edit', 'AdminController@updateProfile');

        Route::get('/admin/profile/password', 'AdminController@editPassword')->name('admin.editPassword');
        Route::post('/admin/profile/password', 'AdminController@updatePassword');

        Route::get('/admin/orders/new', 'AdminController@newOrder')->name('admin.newOrder');
        Route::post('/admin/orders/new', 'AdminController@addOrder');

        Route::get('/cart', 'AdminController@retrieve')->name('admin.cart');
    });


    Route::get('/logout', 'LogoutController@logout')->name('logout');
});
