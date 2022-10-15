<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\ExplanationTypeController;
use App\Http\Controllers\Admin\ReportingTypeController;
use App\Http\Controllers\Admin\SubmissionTypeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", function() {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerSubmit'])->name('register.submit');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('operator')->name('operator.')->group(function() {
    Route::get("/", function() {
        dd('operator');
    })->name('dashboard');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function() {
    Route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');
    Route::resource('/reportingtypes', ReportingTypeController::class)->except('show');
    Route::resource('/submissiontypes', SubmissionTypeController::class)->except('show');
    Route::resource('/explanationtypes', ExplanationTypeController::class)->except('show');
});
