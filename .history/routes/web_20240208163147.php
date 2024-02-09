<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\DashboardController;
use Spatie\LaravelPdf\Facades\Pdf;

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
//item.create
Route::get('/items/create', [DashboardController::class, 'itemCreate'])->middleware(['auth', 'verified'])->name('item.create');
//item.store
Route::post('/items', [DashboardController::class, 'itemStore'])->middleware(['auth', 'verified'])->name('item.store');
//item.edit
Route::get('/items/{item}/edit', [DashboardController::class, 'itemEdit'])->middleware(['auth', 'verified'])->name('item.edit');
//item.update
Route::put('/items/{item}', [DashboardController::class, 'itemUpdate'])->middleware(['auth', 'verified'])->name('item.update');
//item.destroy
Route::delete('/items/{item}', [DashboardController::class, 'itemDestroy'])->middleware(['auth', 'verified'])->name('item.destroy');

//item tracking events routes
Route::get('/items/{item}/tracking-events', [DashboardController::class, 'itemTrackingEvents'])->middleware(['auth', 'verified'])->name('item.tracking-events');
//item tracking events store
Route::post('/items/{item}/tracking-events', [DashboardController::class, 'itemTrackingEventsStore'])->middleware(['auth', 'verified'])->name('item.tracking-events.store');
//item tracking events edit
Route::get('/items/{item}/tracking-events/{event}/edit', [DashboardController::class, 'itemTrackingEventsEdit'])->middleware(['auth', 'verified'])->name('item.tracking-events.edit');
//item tracking events update
Route::put('/items/{item}/tracking-events/{event}', [DashboardController::class, 'itemTrackingEventsUpdate'])->middleware(['auth', 'verified'])->name('item.tracking-events.update');
//item tracking events destroy
Route::delete('/items/{item}/tracking-events/{event}', [DashboardController::class, 'itemTrackingEventsDestroy'])->middleware(['auth', 'verified'])->name('item.tracking-events.destroy');

//invoice route
Route::get('/create-invoice', function(){
    Pdf::view('invoice')
    ->format('a4')
    ->name('invoice.pdf')
    ->download('invoice.pdf');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
