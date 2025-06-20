<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;

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



// this my all crud opperation routes

Route::get('employ/create',[EmployeeController::class, 'create'])->name('employee.create');
Route::get('employee',[EmployeeController::class, 'index'])->name('employee.index');
Route::post('employee/store',[EmployeeController::class, 'store'])->name('employee.store');
Route::get('employee/show',[EmployeeController::class, 'show'])->name('employee.show');
Route::get('employee/{id}/edit',[EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('employee/{id}/ubdate',[EmployeeController::class, 'ubdate'])->name('employee.ubdate');
Route::delete('employee/{id}/destroy',[EmployeeController::class, 'destroy'])->name('employee.destroy');


