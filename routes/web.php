<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DivitionController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AdminController::class, 'login']);
Route::post('/auth', [AdminController::class, 'auth'])->name('auth.create');

Route::group(['middleware'=>'admin_auth'],function(){
//dashboard
Route::get('/dashboard', [AdminController::class, 'index']);
//LOGOUT
Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        return redirect('/login');
});
//employee Route
Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee-form', [EmployeeController::class, 'employeeform']);
Route::post('/employee-form', [EmployeeController::class, 'storeEmployee'])->name('employee.create');
Route::get('/employee-report', [EmployeeController::class, 'GetReport']);

Route::get('/employee/{id}', [EmployeeController::class, 'getemployeeById']);
Route::post('/editemployee', [EmployeeController::class, 'EditEmployee'])->name('employee.update');
Route::post('/editemployee2', [EmployeeController::class, 'EditEmployee2'])->name('employee.update2');
Route::post('/uploadimage', [EmployeeController::class, 'EmployeeImg'])->name('employee.empimg');

Route::get('/project', [projectController::class, 'project']);
Route::get('/newproject', [projectController::class, 'addproject']);
Route::post('/add-porject', [projectController::class, 'createProject'])->name('project.create');
Route::get('/p-details/{id}', [projectController::class, 'projectDetails']);
Route::post('/assign', [projectController::class, 'assignEmployee'])->name('project.assign');

Route::get('/task', [TaskController::class, 'index']);
Route::post('/createtask', [TaskController::class, 'createTask'])->name('task.create');
Route::post('/createcomment', [TaskController::class, 'comment'])->name('comment.create');

Route::get('/explore', [DivitionController::class, 'index']);
Route::post('/createdivition', [DivitionController::class, 'addDivition'])->name('divition.create');
Route::post('/createcity', [DivitionController::class, 'addcity'])->name('city.create');
Route::post('/createupazila', [DivitionController::class, 'addUpazila'])->name('upazila.create');
Route::post('/createunion', [DivitionController::class, 'addUnion'])->name('union.create');
Route::post('/createvillage', [DivitionController::class, 'addvillage'])->name('village.create');

Route::get('/volunteer', [VolunteerController::class, 'index']);
Route::get('/new-volunteer', [VolunteerController::class, 'create']);
Route::post('/store-volunteer', [VolunteerController::class, 'Add'])->name('volunteer.create');

});
