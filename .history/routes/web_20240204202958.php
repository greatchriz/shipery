<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [MainPageController::class, 'home'])->name('home');
Route::get('/about-us', [MainPageController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [MainPageController::class, 'contactUs'])->name('contact-us');
Route::get('/tracking', [MainPageController::class, 'tracking'])->name('tracking');
Route::post('/track', [ItemController::class, 'show'])->name('track');


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// senders routes
Route::get('/senders', [DashboardController::class, 'senderIndex'])->middleware(['auth', 'verified'])->name('sender.index');
//sender.create
Route::get('/senders/create', [DashboardController::class, 'senderCreate'])->middleware(['auth', 'verified'])->name('sender.create');
//sender.store
Route::post('/senders', [DashboardController::class, 'senderStore'])->middleware(['auth', 'verified'])->name('sender.store');
//sender.edit
Route::get('/senders/{sender}/edit', [DashboardController::class, 'senderEdit'])->middleware(['auth', 'verified'])->name('sender.edit');
//sender.update
Route::put('/senders/{sender}', [DashboardController::class, 'senderUpdate'])->middleware(['auth', 'verified'])->name('sender.update');
//sender.destroy
Route::delete('/senders/{sender}', [DashboardController::class, 'senderDestroy'])->middleware(['auth', 'verified'])->name('sender.destroy');


// receivers routes
Route::get('/receivers', [DashboardController::class, 'receiverIndex'])->middleware(['auth', 'verified'])->name('receiver.index');
//receiver.create
Route::get('/receivers/create', [DashboardController::class, 'receiverCreate'])->middleware(['auth', 'verified'])->name('receiver.create');
//receiver.store
Route::post('/receivers', [DashboardController::class, 'receiverStore'])->middleware(['auth', 'verified'])->name('receiver.store');


// items routes
Route::get('/items', [DashboardController::class, 'itemIndex'])->middleware(['auth', 'verified'])->name('item.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
