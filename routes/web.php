<?php

use App\Models\Need;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\NeedController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

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

Route::get('/', [PageController::class, 'home']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/artikel', [PageController::class, 'artikel']);
Route::get('/faq', [PageController::class, 'faq']);
Route::get('/tentang', [PageController::class, 'tentang']);

Route::get('/login', [PageController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/masuk', [UserController::class, 'masuk']);
Route::get('/signup', [PageController::class, 'signup']);
Route::post('/signup/daftar', [UserController::class, 'daftar']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/email_available', [UserController::class, 'emailCheck']);
Route::post('/email_available/check', [UserController::class, 'check'])->name('email_available.check');

Route::get('/permohonan', [PageController::class, 'permohonan']);
Route::resource('/permohonan/needs', NeedController::class)->middleware('auth');

Route::get('/events', [PageController::class, 'events']);
Route::get('/event/{events}', [PageController::class, 'event']);

Route::get('/needs', [PageController::class, 'needs']);
Route::get('/need/{needs}', [PageController::class, 'need']);

Route::get('/report', [PageController::class, 'report'])->middleware('auth');
Route::get('/report/pdf', [PDFController::class, 'createPDF']);

Route::get('/dashboard', function () {
    return view('dashboard.home', [
        'stocks' => json_decode(file_get_contents('http://localhost:3000/api/bloodstocks'), true)
    ]);
})->middleware('auth');

Route::get('/dashboard/reports', function (User $users) {
    return view('dashboard.reports', [
        'users' => $users->all()
    ]);
})->middleware('auth');

Route::get('/dashboard/requests', function (Need $needs) {
    return view('dashboard.requests', [
        'needs' => $needs->all()
    ]);
})->middleware('auth');

Route::get('/dashboard/events', function (Event $events) {
    return view('dashboard.events', [
        'events' => $events->all()
    ]);
})->middleware('auth');

Route::resource('/dashboard/event', EventController::class)->middleware('auth');
Route::resource('/dashboard/need', NeedController::class)->middleware('auth');
Route::resource('/dashboard/user', UserController::class)->middleware('auth');

Route::get('/dashboard/event/form', function (Event $events) {
    return view('dashboard.event-form', [
        'events' => $events->all()
    ]);
})->middleware('auth');

Route::get('/dashboard/request/form', function (Event $events) {
    return view('dashboard.request-form', [
        'events' => $events->all()
    ]);
})->middleware('auth');