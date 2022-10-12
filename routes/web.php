<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hospitals\Auth\HospitalController;
use App\Http\Controllers\Hospitals\Auth\EventController;

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
    return view('home');
});

Route::get('/home', function () {
    return view('auth.d_home');
})->middleware(['auth'])->name('d_home');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::get('/admin_dashboard', function () {
    return view('auth.admin_dashboard');
})->middleware(['auth'])->name('admin_dashboard');

require __DIR__ . '/auth.php';

Route::get('auth/t&c', function () {
    return view('auth/t&c');
});

Route::post('auth/t&c', function () {
    return view('auth/t&c');
});


Route::get('/gaboutUs', function () {
    return view('aboutUs');
})->name('gaboutUs');

Route::get('/gcontactUs', function () {
    return view('gcontactUs');
})->name('gcontactUs');

Route::get('Hospitals/auth/dashboard', function () {
    return view('Hospitals.auth.dashboard');
});

Route::post('Hospitals/auth/dashboard', function () {
    return view('Hospitals.auth.dashboard');
});

Route::get('/donar', [HospitalController::class, 'donarList'])->name('Hospitals.manage.donar');
Route::controller(EventController::class)->group(function () {
    Route::get('/Hospitals/event', 'index')->name('Hospitals.event.index');
    Route::get('/Hospitals/create', 'create')->name('Hospitals.event.create');
    Route::get('/Hospitals/event/{id}', 'edit')->name('Hospitals.event.edit');
    Route::post('/Hospitals/event', 'submitEvent')->name('Hospitals.event.submitevent');
    Route::get('/Hospitals/event/delete/{id}', 'deleteEvent')->name('Hospitals.event.delete');
});
Route::get('/dashboard', [HospitalController::class, 'dashboard'])->name('Hospitals.manage.dashboard');
Route::get('/bloodqty', [HospitalController::class, 'bloodQty'])->name('Hospitals.manage.bloodqty');
Route::post('/store', [HospitalController::class, 'bloodQtyStore'])->name('Hospitals.manage.bloodqtystore');
