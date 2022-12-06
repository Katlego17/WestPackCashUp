<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\StoreCashupController;
use App\Http\Livewire\Calendar;
use App\Models\Event;

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
Route::get('fullcalender', [FullCalenderController::class, 'index']);
Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);

Auth::routes();



// Route Admin
Route::middleware(['auth','user-role:SPT_Manager'])->group(function()
{
    Route::get("/admin/home",[HomeController::class, 'Home'])->name("admin.home");
});
// Route Owner
Route::middleware(['auth','user-role:WP_Owner'])->group(function()
{
    Route::get("/owner/home",[HomeController::class, 'Home'])->name("owner.home");
});
// Route WP_Manager
Route::middleware(['auth','user-role:WP_Manager'])->group(function()
{
    Route::get("/manager/home",[HomeController::class, 'Home'])->name("manager.home");
});
// Route WP_HOCashup
Route::middleware(['auth','user-role:WP_HOCashup'])->group(function()
{
    Route::get("/headoffice/home",[HomeController::class, 'Home'])->name("headoffice.home");
});
// Route WP_Store
Route::middleware(['auth','user-role:WP_StoreCashup'])->group(function()
{
    Route::get("/home",[StoreCashupController::class, 'Home'])->name("store.home");
    Route::get("/cashupform",[StoreCashupController::class, 'cashupform'])->name("store.home");
});
// Route WP_Manager
Route::middleware(['auth','user-role:WP_Supplier'])->group(function()
{
    Route::get("/supplier/home",[HomeController::class, 'Home'])->name("supplier.home");
});

Livewire::component('calendar', Calendar::class);
