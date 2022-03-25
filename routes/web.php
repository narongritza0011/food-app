<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
    return view('auth.login');
    // return view('admins.dashboards.dashboard');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/logout', function () {
    Auth::logout();
    return view('auth.login');
});



Route::group(['prefix' =>  'admin', 'middleware' => ['isAdmin', 'auth',]], function ($locale) {


    // Route::get('locale/{locale}', function ($locale) {
    //     Session::put('locale', $locale);
    //     return redirect()->back();
    // });

    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    //รายการอาหาร
    Route::get('order', [OrdersController::class, 'index'])->name('admin.order');
    Route::post('order/add', [OrdersController::class, 'store'])->name('order.store');
    Route::get('order/edit/{id}', [OrdersController::class, 'edit'])->name('order.edit');
    Route::post('order/update/{id}', [OrdersController::class, 'update'])->name('order.update');
    Route::get('order/delete/{id}', [OrdersController::class, 'delete'])->name('order.delete');


    //ประเภทอาหาร
    Route::get('category', [CategoryController::class, 'index'])->name('admin.category');
    Route::post('category/add', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
});





Route::group(['prefix' => 'manager', 'middleware' => ['isManager', 'auth']], function () {
    Route::get('dashboard', [ManagerController::class, 'index'])->name('manager.dashboard');
    Route::get('category', [ManagerController::class, 'index'])->name('manager.category');
    Route::get('menu', [ManagerController::class, 'index'])->name('manager.menu');
});





Route::group(['prefix' => 'employee', 'middleware' => ['isEmployee', 'auth']], function () {
    Route::get('dashboard', [EmployeeController::class, 'index'])->name('employee.dashboard');
});
