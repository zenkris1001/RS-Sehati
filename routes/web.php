
<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $title = 'Rumah Sakit';
    return view('welcome',compact('title'));
})->name('beranda');

Route::get('/takeatest', function () {
    return view('takeatest');
})->name('takeatest');

Route::get('/doktor', function () {   
    return view('doktor');
})->name('doktor');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/department', function() {
    return view('department'); 
})->name('department');

#LoginDB

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function() {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

#dashbord


Route::get('/setting', function () {
    // Cek apakah user login
    if(!session()->has('username')){
        return redirect()->route('login');
    }

    return view('setting'); // nanti kita buat file resources/views/setting.blade.php
})->name('setting'); // <--- penting! nama route harus 'setting'
use App\Http\Controllers\SettingController;

// halaman setting (list + form)
Route::get('/setting', [SettingController::class, 'index'])->name('setting');

// create
Route::post('/setting/users', [SettingController::class, 'store'])->name('setting.users.store');

// update
Route::put('/setting/users/{id}', [SettingController::class, 'update'])->name('setting.users.update');

// delete
Route::delete('/setting/users/{id}', [SettingController::class, 'destroy'])->name('setting.users.destroy');

Route::get('/', function () {
    $title = 'Rumah Sakit';
    return view('welcome',compact('title'));
})->name('beranda');



#dktr
use App\Http\Controllers\DoctorController;


// Frontend
Route::get('/doktor', [DoctorController::class, 'index'])->name('doktor');

// Backend CRUD

Route::get('/dokcrud', [DoctorController::class, 'crud'])->name('dokcrud');
Route::post('/dokcrud/store', [DoctorController::class, 'store'])->name('doktor.store');
Route::get('/dokcrud/{id}/edit', [DoctorController::class, 'edit'])->name('dokcrud.edit');
Route::put('/dokcrud/{id}', [DoctorController::class, 'update'])->name('doktor.update');
Route::delete('/dokcrud/{id}', [DoctorController::class, 'destroy'])->name('doktor.destroy');

use App\Http\Controllers\DepartmentController;

// Frontend
Route::get('/department', [DepartmentController::class, 'show'])->name('department');

// Backend (CRUD)
Route::get('/departmentback', [DepartmentController::class, 'index'])->name('departmentback');
Route::post('/departmentback/store', [DepartmentController::class, 'store'])->name('department.store');
Route::get('/departmentback/{id}/edit', [DepartmentController::class, 'edit'])->name('departmentback.edit');
Route::put('/departmentback/{id}', [DepartmentController::class, 'update'])->name('department.update');
Route::delete('/departmentback/{id}', [DepartmentController::class, 'destroy'])->name('department.destroy');

use App\Http\Controllers\ServiceController;

// FRONTEND
Route::get('/layanan', [ServiceController::class, 'frontend'])->name('layanan');

// BACKEND (harus login)
Route::get('/layback', [ServiceController::class, 'index'])->name('layback');
Route::post('/layback/store', [ServiceController::class, 'store'])->name('layback.store');
Route::get('/layback/{id}/edit', [ServiceController::class, 'edit'])->name('layback.edit');
Route::put('/layback/{id}', [ServiceController::class, 'update'])->name('layback.update');
Route::delete('/layback/{id}', [ServiceController::class, 'destroy'])->name('layback.destroy');
