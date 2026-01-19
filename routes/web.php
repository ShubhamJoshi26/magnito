<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/',function(){
    return view('home');
});
Route::get('/services',function(){
    return view('services');
})->name('services');
Route::get('/school-erp',function(){
    return view('school_erp');
})->name('erp');
