<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\staffController;
use App\Models\menu;
use App\Models\staff;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/register', function () {
    return view('auth.regist');
})->name('register');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::post('/register/action', [
    AuthController::class, 'registerAction'
])->name('register.action');


Route::post('/login/action', [
    AuthController::class, 'loginAction'
])->name('login.action');



Route::get('about', function () {
    return view('about');
})->name('about');


Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard', [
            'user' => User::all(),
            'menu' => menu::all(),
            'staff' => staff::all(),
            'userCount' => User::count(),
            'menuCount' => menu::count(),
            'staffCount' => staff::count(),
        ]);
    })->name('admin.dashboard');

    Route::controller(staffController::class)->group(function () {
        Route::get('/admin/dashboard/add-staff', 'addStaff')->name('admin.add_staff');
        Route::post('/admin/dashboard/add-staff/action', 'storeStaff')->name('admin.store_staff');
        Route::get('/admin/dashboard/delete-staff/{id}/action', 'deleteStaff')->name('admin.delete_staff');
    });

    Route::controller(menuController::class)->group(function () {
        Route::get('/admin/dashboard/add-menu', 'addMenu')->name('admin.add_menu');
        Route::post('/admin/dashboard/add-menu/action', 'storeMenu')->name('admin.store_menu');
        Route::get('/admin/dashboard/edit-menu/{id}', 'editMenu')->name('admin.edit_menu');
        Route::post('/admin/dashboard/edit-menu/{id}/action', 'updateMenu')->name('admin.update_menu');
        Route::get('/admin/dashboard/delete-menu/{id}/action', 'deleteMenu')->name('admin.delete_menu');
        Route::get('/admin/dashboard/export', 'exportExcelMenu')->name('admin.exportExcelMenu');
    });
});


Route::middleware('auth:user')->group(function () {
    Route::get('/home-page', function () {
        return view('user.home_page');
    })->name('user.home_page');

    Route::get('/menu', function () {
        return view('user.menu', [
            'menu' => menu::all(),
        ]);
    })->name('menu');
});


Route::get('/logout', [
    AuthController::class, 'logout'
])->name('logout');
