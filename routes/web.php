<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomescheduController;

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

Route::get('/', [\App\Http\Controllers\FacultiescheduController::class, 'home']);
Route::get('/faculty', [\App\Http\Controllers\FacultiescheduController::class, 'faculties'])->name('faculties');
Route::get('/facultyId-{facult_id}', [\App\Http\Controllers\FacultiescheduController::class, 'facultCourses'])->name('facultCourses');
Route::get('/facultyId-{facult_id}/course-{course_id}', [\App\Http\Controllers\CoursesController::class, 'courseGroups'])->name('courseGroups');
Route::get('/facultyId-{facult_id}/course-{course_id}/groupId-{group_id}', [\App\Http\Controllers\GroupsController::class, 'groupSchedule'])->name('groupSchedule');


Route::group(['middleware'=>['auth:web']], function(){
    Route::get('/admin', [\App\Http\Controllers\ContactController::class, 'index'])->name('owner');
    Route::resource('/owner', \App\Http\Controllers\ContactController::class);
    Route::resource('/faculties', \App\Http\Controllers\FacultiesController::class);
    Route::resource('/courses', \App\Http\Controllers\CoursesController::class);
    Route::resource('/groups', \App\Http\Controllers\GroupsController::class);
    Route::resource('/schedules', \App\Http\Controllers\SchedulesController::class);
    Route::resource('/week', \App\Http\Controllers\WeekController::class);
    Route::get('/register', [AuthController::class, 'register_page'])->name('register');

    Route::get('/faculties/courses/{id}', [CoursesController::class, 'viewCourses'])->name('view');

    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});
Route::get('/login', [AuthController::class, 'login_page'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
