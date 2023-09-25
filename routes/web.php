<?php

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
include_once __DIR__.'/auth.php';
include_once __DIR__.'/dashboard.php';

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('web/home', [App\Http\Controllers\webControllers\HomeControllers::class, 'index'])->name('web.home');
Route::get('web/company', [App\Http\Controllers\webControllers\CompanyController::class, 'index'])->name('company.home');
Route::get('web/contactUs', [App\Http\Controllers\webControllers\ContactUsController::class, 'index'])->name('contactUs.home');
Route::get('web/donors', [App\Http\Controllers\webControllers\DonationController::class, 'index'])->name('donation.home');
Route::get('web/employment', [App\Http\Controllers\webControllers\EmploymentController::class, 'index'])->name('employment.home');
Route::get('web/volunteer', [App\Http\Controllers\webControllers\VolunteeringContoller::class, 'index'])->name('volunteer.home');
Route::get('web/aboutUs', [App\Http\Controllers\webControllers\SettingController::class, 'aboutUs'])->name('aboutUs.index');

Route::post('web/company/store', [App\Http\Controllers\webControllers\CompanyController::class, 'store'])->name('company.store');
Route::post('web/donors/store', [App\Http\Controllers\webControllers\DonationController::class, 'store'])->name('donation.store');
Route::post('web/contactUs/store', [App\Http\Controllers\webControllers\ContactUsController::class, 'store'])->name('contactUs.store');
Route::post('web/employment/store', [App\Http\Controllers\webControllers\EmploymentController::class, 'store'])->name('employment.store');
Route::post('web/volunteer/store',[App\Http\Controllers\webControllers\VolunteeringContoller::class, 'store'])->name('vlounteer.store');
