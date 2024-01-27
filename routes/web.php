<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;

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
//Route::fallback( function () {
   // return redirect('404Error');
//});
Route::get('HomeTest', [TestController::class,'inc'])->name('hometest');
Route::get('Classes', [TestController::class,'classes'])->name('classes');
Route::get('AboutUS', [TestController::class,'about'])->name('AboutUS');
Route::get('Facilities', [TestController::class,'facilities'])->name('Facilities');
Route::get('Team', [TestController::class,'team'])->name('Team');
Route::get('call', [TestController::class,'call'])->name('call');
Route::get('testimonial', [TestController::class,'testimonial'])->name('testimonial');
Route::get('404Error', [TestController::class,'error'])->name('404Error');
Route::get('ContactUs', [ContactController::class,'contact'])->name('ContactUs');
Route::post('contact_mail', [ContactController::class, 'contact_mail_send'])->name('contact_mail');
Route::get('Appointment', [AppointmentController::class,'create'])->name('Appointment');
Route::post('storeAppoint', [AppointmentController::class, 'store'])->name('storeAppoint');



Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
