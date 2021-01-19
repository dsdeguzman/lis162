<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\AdviserController;
use App\Http\Controllers\LevelController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
  return view('home');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';

Route::get('/home/sections', [App\Http\Controllers\SectionController::class,'section_index']);

Route::get('/home/sections/{section_id}', [App\Http\Controllers\SectionController::class,'sectionstudentlist']);

Route::get('/home/levels', [App\Http\Controllers\LevelController::class,'level_index']);

Route::get('/home/levels/{level_id}', [App\Http\Controllers\LevelController::class,'levelstudentlist']);

Route::get('/home/search/{student_name}', [App\Http\Controllers\StudentController::class,'search']);

Route::get('/home/search/student/{guardian_id}', [App\Http\Controllers\GuardianController::class,'view_details']);

Route::get('/home/search/student/{guardian_id}/edit', [App\Http\Controllers\GuardianController::class,'edit']);

Route::post('/home/search/student/{guardian_id}/edit/', [App\Http\Controllers\GuardianController::class,'update']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
