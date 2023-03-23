<?php

use App\Http\Controllers\DavomatController;
use App\Http\Controllers\GroupsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeachersController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function(){
    return view('admin/dashboard');
});
Route::resource('/admin/students', StudentsController::class);
// Route::get('/admin/students', [StudentsController::class, 'index']);
// Route::get('/admin/teacher', [TeachersController::class, 'index']);
// Route::post('/student-save',[StudentsController::class, 'store']);
Route::resource('/admin/teachers', TeachersController::class);
Route::resource('/admin/groups', GroupsController::class);
Route::resource('/admin/subjects', SubjectController::class);
Route::resource('/teachers/davomat', DavomatController::class);