<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StopsController;
use App\Http\Controllers\DistrictsController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LocalizationController;



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
    return view('index');
});

Route::get('/administrator', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
   Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Admin All Route

Route::controller(AdminController::class)->group(function() {
    Route::get('/admin/logout', 'destroy') -> name('admin.logout');
    Route::get('/admin/profile', 'Profile') -> name('admin.profile');
    Route::get('/edit/profile', 'EditProfile') -> name('edit.profile');
    Route::post('/store/profile', 'StoreProfile') -> name('store.profile');
    Route::get('/change/password', 'ChangePassword') -> name('change.password');
    Route::post('/update/password', 'UpdatePassword') -> name('update.password');
   // Route::get('/admin/cennik', 'StopsMethod') -> name('stops.page');
});

Route::controller(LoginController::class)->group(function() {
    Route::get('/logout', 'destroy') -> name('logout');
    Route::get('/profile', 'Profile');
   // Route::get('/admin/cennik', 'StopsMethod') -> name('stops.page');
});

Route::get('admin/cennik', [StopsController::class, 'index_stops']);
Route::post('admin/cennik/stops', [StopsController::class, 'store_stops']);

Route::get('admin/cennik', [DistrictsController::class, 'index']);
Route::post('admin/cennik', [DistrictsController::class, 'store']);

Route::get('admin/faq', [FAQController::class, 'index']);
Route::post('admin/faq', [FAQController::class, 'store']);

Route::get('/cennik', function () {
    return view('price');
});

Route::get('/faq', function () {
    return view('faq');
});


Route::get('/map', function () {
    return view('map');
});

Route::get('/kontakt', function () {
    return view('contact');
});

Route::get('/rezerwacja', function () {
    return view('reservation');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('cennik', [PriceController::class, 'index']);
Route::get('faq', [FAQController::class, 'index_display']);
//Route::get('kontakt', [ContactController::class, 'change'])->name('LangChange');

Route::get('lang/home', [LocalizationController::class, 'index']);
Route::get('lang/change', [LocalizationController::class, 'change'])->name('changeLang');


require __DIR__.'/auth.php';
