<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
    return view('welcome');  
});

// Home Page (List Employees)
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

// Show Create Form
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');

// Store New Employee
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');

// Show Single Employee
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');

// Show Edit Form
Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');

// Update Employee
Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');

// Delete Employee
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
