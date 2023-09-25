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
 
 
 
 
//Donors

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::delete('images/delete/{id}',[App\Http\Controllers\NewsController::class, 'imagesDelete'])->name('news.images'); 
Route::get('setting/index',[App\Http\Controllers\SettingsController::class, 'index'])->name('setting');
Route::post('setting/update',[App\Http\Controllers\SettingsController::class, 'update'])->name('setting.update');

Route::resource('news',  App\Http\Controllers\NewsController::class)->withTrashed();
Route::resource('visualLibraries',  App\Http\Controllers\VisualLibrariesController::class)->withTrashed();
Route::resource('slider',  App\Http\Controllers\SliderController::class)->withTrashed();
Route::resource('publicationsAndReports',  App\Http\Controllers\PublicationsAndReportsController::class)->withTrashed();
Route::resource('partners',  App\Http\Controllers\PartnersController::class)->withTrashed();
Route::resource('achievements',  App\Http\Controllers\AchievementsController::class)->withTrashed();
Route::resource('programs',  App\Http\Controllers\ProgramsController::class)->withTrashed();
Route::resource('contactUs',  App\Http\Controllers\ContactUsController::class)->withTrashed();
Route::resource('companies',  App\Http\Controllers\CompaniesController::class)->withTrashed();
Route::resource('volunteers',  App\Http\Controllers\VolunteersController::class)->withTrashed();
Route::resource('employmentsOrders',  App\Http\Controllers\EmploymentsOrdersController::class)->withTrashed();
Route::resource('donors',  App\Http\Controllers\DonorsController::class)->withTrashed();
//EmploymentsOrders
Route::post('achievements/update',[App\Http\Controllers\AchievementsController::class, 'update'])->name('achievements.update');
Route::post('programs/update',[App\Http\Controllers\ProgramsController::class, 'update'])->name('programs.update');
Route::post('publicationsAndReports/update',[App\Http\Controllers\PublicationsAndReportsController::class, 'update'])->name('publicationsAndReportsController.update');
Route::post('visualLibraries/update',[App\Http\Controllers\VisualLibrariesController::class, 'update'])->name('visualLibraries.update');
Route::post('partners/update',  [App\Http\Controllers\PartnersController::class , 'update'])->name('partners.update');
Route::post('slider/update',[App\Http\Controllers\SliderController::class, 'update'])->name('slider.update');

 
Route::get('home/setting',[App\Http\Controllers\SettingsController::class, 'indexHome'])->name('home.setting');
Route::get('valuesPrinciples/setting',[App\Http\Controllers\SettingsController::class, 'indexValuesPrinciples'])->name('valuesPrinciples.index');
Route::get('goals/setting',[App\Http\Controllers\SettingsController::class, 'indexGoals'])->name('goals.index');
Route::get('association/setting',[App\Http\Controllers\SettingsController::class, 'indexAssociation'])->name('association.index');
Route::get('vision/setting',  [App\Http\Controllers\SettingsController::class , 'indexVision'])->name('vision.index');
Route::get('messags/setting',  [App\Http\Controllers\SettingsController::class , 'indexMessage'])->name('messags.index');

Route::post('home/update',[App\Http\Controllers\SettingsController::class, 'updateHome'])->name('home.update');
Route::post('valuesPrinciples/update',[App\Http\Controllers\SettingsController::class, 'updateValuesPrinciples'])->name('valuesPrinciples.update');
Route::post('goals/update',[App\Http\Controllers\SettingsController::class, 'updateGoals'])->name('goals.update');
Route::post('association/update',[App\Http\Controllers\SettingsController::class, 'updateAssociation'])->name('association.update');
Route::post('vision/update',  [App\Http\Controllers\SettingsController::class , 'updateVision'])->name('vision.update');
Route::post('message/update',  [App\Http\Controllers\SettingsController::class , 'updateMessage'])->name('message.update');
