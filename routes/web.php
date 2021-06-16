<?php
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AttendancesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/auth/register', [RegisterController::class, 'register']);

Route::get('/auth/loginPage', [RegisterController::class, 'loginPage']);

Route::post('login', [RegisterController::class, 'login'])->name('login');

Route::post('/addstudent', [StudentController::class, 'store'])->name('addstudent');

Route::get('/', 'App\Http\Controllers\CoursesController@index');

Route::get('/student/update/{id}', [StudentController::class, 'update']);

Route::get('/student/studentprofile/{id}', [StudentController::class, 'show']);

Route::put('student/profileupdated/{id}', [StudentController::class, 'profileUpdated']);

Route::get('/assignment/index', 'App\Http\Controllers\AssignmentController@index');

Route::get('/assignment/edit/{id}', 'App\Http\Controllers\AssignmentController@edit');

Route::put('/assignment/update/{id}', 'App\Http\Controllers\AssignmentController@update');

Route::get('/assignment/delete/{id}', 'App\Http\Controllers\AssignmentController@delete');

Route::get('/attendance/index','App\Http\Controllers\attendancesController@index');

Route::get('attendance/edit/{id}','App\Http\Controllers\attendancesController@showData');

Route::post('/update/{id}', 'App\Http\Controllers\attendancesController@update');
