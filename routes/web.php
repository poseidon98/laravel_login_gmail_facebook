<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialAuthController;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/auth/{provider}', [SocialAuthController::class, 'redirect']);
// Route::get('/auth/{provider}/callback', [SocialAuthController::class, 'callback']);

Route::get('/auth/redirect/google', [SocialAuthController::class, 'redirectToGoogle']);
Route::get('/auth/callback/google', [SocialAuthController::class, 'handleGoogleCallback']);

Route::get('/auth/redirect/facebook', [SocialAuthController::class, 'redirectToFacebook']);
Route::get('/auth/callback/facebook', [SocialAuthController::class, 'handleFacebookCallback']);

Route::post('/update-role', [\App\Http\Controllers\ProfileController::class, 'updateRole'])->name('update.role');



require __DIR__ . '/auth.php';
