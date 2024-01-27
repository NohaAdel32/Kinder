<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
Route::prefix('admin')->middleware('verified')->group(function () {
    
        //testimonial
        Route::get('inserttest', [TestimonialController::class, 'create'])->name('inserttest');
        Route::post('storetest', [TestimonialController::class, 'store'])->name('storetest');
        Route::get('testi', [TestimonialController::class, 'index'])->name('testi');
        Route::get('showTestimonial/{id}', [TestimonialController::class,'show']);
        Route::get('updateTestimonial/{id}', [TestimonialController::class,'edit']);
        Route::put('updateTesti/{id}', [TestimonialController::class,'update'])->name('updateTesti');
        Route::get('trashTesti', [TestimonialController::class, 'trashed'])->name('trashTesti');
        Route::get('deleteTestimonial/{id}', [TestimonialController::class,'destroy']);
        Route::get('forceDeleteTesti/{id}', [TestimonialController::class,'forceDelete']);
        Route::get('restoreTesti/{id}', [TestimonialController::class,'restore']);
        //contactus
        Route::get('contacts', [ContactController::class, 'index'])->name('contacts');
        Route::get('showcontact/{id}', [ContactController::class,'show']);
        Route::get('deletecontact/{id}', [ContactController::class,'destroy']);
        Route::get('showMessage/{id}', [ContactController::class,'showMsg']);
        //appointment
        Route::get('appointments', [AppointmentController::class, 'index'])->name('appointments');
        Route::get('showappoint/{id}', [AppointmentController::class,'show']);
        Route::get('deleteappoint/{id}', [AppointmentController::class,'destroy']);

        //teacher
        Route::get('insertteacher', [TeacherController::class, 'create'])->name('insertteach');
        Route::post('storeteach', [TeacherController::class, 'store'])->name('storeteach');
        Route::get('teach', [TeacherController::class, 'index'])->name('teach');
        Route::get('showTeacher/{id}', [TeacherController::class,'show']);
        Route::get('updateTeacher/{id}', [TeacherController::class,'edit']);
        Route::put('updateTeach/{id}', [TeacherController::class,'update'])->name('updateTeach');
        Route::get('deleteTeacher/{id}', [TeacherController::class,'destroy']);
        Route::get('trashTeacher', [TeacherController::class, 'trashed'])->name('trashTeacher');
        Route::get('forceDeleteTeacher/{id}', [TeacherController::class,'forceDelete']);
        Route::get('restoreTeacher/{id}', [TeacherController::class,'restore']);

        //class
        Route::get('insertclass', [ClassController::class, 'create'])->name('insertclass');
        Route::post('storeclass', [ClassController::class, 'store'])->name('storeclass');
        Route::get('kiderClass', [ClassController::class, 'index'])->name('kiderClass');
        Route::get('showClass/{id}', [ClassController::class,'show']);
        Route::get('updateClass/{id}', [ClassController::class,'edit']);
        Route::put('updateCla/{id}', [ClassController::class,'update'])->name('updateCla');
        Route::get('deleteClass/{id}', [ClassController::class,'destroy']);
        Route::get('trashClass', [ClassController::class, 'trashed'])->name('trashClass');
        Route::get('forceDeleteClass/{id}', [ClassController::class,'forceDelete']);
        Route::get('restoreClass/{id}', [ClassController::class,'restore']);
    });
    Auth::routes(['verify'=>true]);
