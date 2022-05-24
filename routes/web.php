<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;

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
    return view('membership_form');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// MEMBERSHIP FORM
Route::get('/membershipForm', [MemberController::class, 'create']);
Route::post('/storemembershipForm', [MemberController::class, 'store']);

//ADMIN PAGES========================================>>>
Route::get('/admin/members', [HomeController::class, 'members']);
Route::get('/admin/department', [HomeController::class, 'department']);
Route::get('/admin/birthday', [HomeController::class, 'dob']);
Route::get('/admin/weddingAnniversary', [HomeController::class, 'weddingAnniversary']);
Route::get('/admin/dateJoined', [HomeController::class, 'dateJoined']);
Route::get('/admin/profileDetail/{id}', [HomeController::class, 'profileDetail']);








