<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\NoteController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\FrontController;
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

//Front
Route::get('/', [FrontController::class, 'home'])
    ->name('front.home');

Route::get('/hakkimizda', [FrontController::class, 'about'])
    ->name('front.about');

Route::get('/hizmetler', [FrontController::class, 'service'])
    ->name('front.service');

Route::get('/doktorlar', [FrontController::class, 'doctors'])
    ->name('front.doctors');

Route::get('/blogs', [FrontController::class, 'blogs'])
    ->name('front.blogs');

Route::get('/iletisim', [FrontController::class, 'contact'])
    ->name('front.contact');

// Admin
Route::prefix('/admin')->middleware(['auth'])->group(function () {

    // Dashboard
    Route::view('/', 'admin.pages.index')->name('admin.index');

    // About
    Route::resource('/about', AboutController::class)->only(['index', 'update']);

    //Appointment
    Route::resource('/appointment', AppointmentController::class)
        ->only(['show', 'store', 'index', 'destroy'])
        ->withoutMiddleware('auth');

    // Change Appointment - Status
    Route::post('/change-status-appointment', [AppointmentController::class, 'changeStatus'])
        ->name('appointment.change-status');

    // Services
    Route::resource('/service', ServiceController::class)->except('show');

    // Doctors
    Route::resource('/doctors', DoctorController::class)->except('show');

    // Calendar
    Route::get('/calendar', CalendarController::class)->name('calendar');

    // Contact Message
    Route::post('/contact',[ContactController::class,'store'])
        ->name('contact.store')
        ->withoutMiddleware('auth');

    Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
    Route::get('contact/{contact}',[ContactController::class,'show'])->name('contact.show');
    Route::delete('/contact/{contact}',[ContactController::class,'destroy'])->name('contact.destroy');

    //General Settings
    Route::resource('/settings', SettingsController::class);

    // Article
    Route::resource('/article', ArticleController::class)->except('show');

    // Article Category
    Route::resource('/category',ArticleCategoryController::class)->except('show');

    // Notes
    Route::resource('/notes',NoteController::class)->only(['index','store']);

    Route::delete('/remove-not',[NoteController::class,'removeNote'])->name('remove.not');

    // Appointment Chart
    Route::get('/',[ChartController::class,'index'])->name('dashboard.index');

    //Super Admin
    Route::middleware('admin')->group(function () {

        // Users
        Route::resource('/users', UserController::class)->except('show');

        //User Change Status
        Route::post('/change-status',[UserController::class,'changeStatus'])->name('user.change-status');

        //User Change Role
        Route::post('/change-role',[UserController::class,'changeRole'])->name('user.change-role');
    });
});

// Auth - Guest
Route::middleware('guest')->group(function () {

    // Register
    Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
    Route::post('/register-store', [RegisterController::class, 'store'])
        ->name('register.store');

    //Login
    Route::get('/login', [SessionsController::class, 'create'])->name('login.create');
    Route::post('/login-store', [SessionsController::class, 'store'])->name('login.store');
});

// Logout
Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
