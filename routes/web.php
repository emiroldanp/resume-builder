<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('user-detail', 'App\Http\Controllers\UserDetailController')->middleware('auth');
Route::resource('education', 'App\Http\Controllers\EducationController')->middleware('auth');
Route::resource('experience', 'App\Http\Controllers\ExperienceController')->middleware('auth');
Route::resource('skill', 'App\Http\Controllers\SkillController')->middleware('auth');

Route::get('resume', 'App\Http\Controllers\ResumeController@index')->name('resume.index')->middleware('auth');
Route::get('resume/download', 'App\Http\Controllers\ResumeController@download')->name('resume.download')->middleware('auth');
