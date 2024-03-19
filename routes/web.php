<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, "index"]);
Route::get('/about-us', [SiteController::class, "about"]);

Route::get('/login', [SiteController::class, "login"]);
Route::get('/registration', [SiteController::class, "registration"]);
Route::get('/contact-us', [SiteController::class, "contact"]);

Route::post('/contact-save', [SiteController::class, "contactSave"]);
Route::post('/send-email', [SiteController::class, "sendEmail"]);


Route::get('/task-create', [TaskController::class, "create"]);

Route::post('/task-save', [TaskController::class, "store"]);

Route::get('/task-read', [TaskController::class, "show"]);

Route::get('/task-edit/{id}', [TaskController::class, "edit"]);

Route::post('/task-edit-save', [TaskController::class, "update"]);

Route::get('/task-delete/{id}', [TaskController::class, "destroy"]);
