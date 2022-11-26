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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/home/professor', 'HomeController@showProfessor')->name('home.professor');
Route::get('/all-departments', 'HomeController@departments')->name('all.departments');
Route::get('/all-departments/department', 'HomeController@showDepartment')->name('all.depaertments.department');
Route::get('/all-departments/department/subject', 'HomeController@departmentSubject')->name('all.depaertments.department.subject');
Route::get('/all-departments/department/professor', 'HomeController@departmentProfessor')->name('all.depaertments.department.professor');

Route::get('/all-subjects', 'HomeController@subjects')->name('all.subjects');
Route::get('/all-subjects/subject', 'HomeController@showSubject')->name('all.subjects.subject');

Route::middleware(['guest:admin', 'guest:student' , 'guest:professor'])->group(function () {
    Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin.login');
    Route::get('/student/login', 'StudentController@showLoginForm')->name('student.login');
    Route::get('/student/register', 'StudentController@showRegisterForm')->name('student.register');
    Route::get('/professor/login', 'ProfessorController@showLoginForm')->name('professor.login');
    Route::get('/professor/register', 'ProfessorController@showRegisterForm')->name('professor.register');
});


Route::middleware(['auth:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
    Route::get('/profile','AdminController@profile')->name('profile');
    Route::get('/settings','AdminController@settings')->name('settings');
    Route::get('/changePassword','AdminController@changePassword')->name('changePassword');
    Route::get('/logout','AdminController@logout')->name('logout');
    //Department admin routes
    Route::prefix('/departments')->name('departments.')->group(function(){
        Route::get('/','DepartmentController@index')->name('index');
        Route::get('/create','DepartmentController@create')->name('create');
        Route::get('/edit','DepartmentController@edit')->name('edit');
        Route::get('/delete','DepartmentController@delete')->name('delete');
    });
    //Subject routes
    Route::prefix('/subjects')->name('subjects.')->group(function(){
        Route::get('/','SubjectController@getAll')->name('getAll');
        Route::get('/accept','SubjectController@accept')->name('accept');
        Route::get('/reject','SubjectController@reject')->name('reject');

    });
});


Route::middleware(['auth:student'])->name('student.')->prefix('student')->group(function () {
    Route::get('/profile','StudentController@profile')->name('profile');
    Route::get('/settings','StudentController@settings')->name('settings');
    Route::get('/changePassword','StudentController@changePassword')->name('changePassword');
    Route::get('/logout','StudentController@logout')->name('logout');
});

Route::middleware(['auth:professor'])->name('professor.')->prefix('professor')->group(function () {
    Route::get('/profile','ProfessorController@profile')->name('profile');
    Route::get('/settings','ProfessorController@settings')->name('settings');
    Route::get('/changePassword','ProfessorController@changePassword')->name('changePassword');
    Route::get('/logout','ProfessorController@logout')->name('logout');

    Route::prefix('/lectures')->name('lectures.')->group(function(){
        Route::get('/create','LectureController@create')->name('create');
        Route::get('/edit','LectureController@edit')->name('edit');
        Route::get('/show','LectureController@show')->name('show');
        Route::get('/close','LectureController@close')->name('close');
        Route::get('/delete','LectureController@delete')->name('delete');

    });

    Route::prefix('/subjects')->name('subjects.')->group(function(){
        Route::get('/','SubjectController@index')->name('index');
        Route::get('/create','SubjectController@create')->name('create');
        Route::get('/edit','SubjectController@edit')->name('edit');
        Route::get('/show','SubjectController@show')->name('show');
        Route::get('/delete','SubjectController@delete')->name('delete');

        Route::prefix('/students')->name('students.')->group(function(){
            Route::get('/createStudent','SubjectController@createStudent')->name('create');
            Route::get('/deleteStduent','SubjectController@deleteStudent')->name('delete');
        });
    });
});
