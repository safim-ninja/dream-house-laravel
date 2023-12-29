<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\OwnerController;
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

Route::get('/', [AdvertisementController::class, 'index'])->name('home');
Route::post('/search', [AdvertisementController::class, 'search'])->name('home.search');

Route::get('/dashboard', [AdvertisementController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/signup', function () {
    return view('auth.login');
})->name('signup');

// Route::get('/profile/{username}')
require __DIR__ . '/auth.php';

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'admindashboard'])->name('admin.dashboard');
    Route::get('/admin/verify-owner/{id}', [AdminController::class, 'verifyOwner'])->name('admin.verify-owner');
    Route::get('/admin/confirm-owner/{id}', [AdminController::class, 'confirmOwner'])->name('admin.confirm-owner');
});

Route::middleware(['auth', 'role:owner'])->group(function () {
    Route::get('/owner/dashboard', [OwnerController::class, 'ownerDashboard'])->name('owner.dashboard');
    Route::post('/owner/verification/{id}', [OwnerController::class, 'verification'])->name('owner.verification');
    Route::post('/owner/placead/{id}', [OwnerController::class, 'placeAd'])->name('owner.placead');
});
