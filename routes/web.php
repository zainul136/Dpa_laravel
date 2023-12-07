<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use  App\Http\Controllers\Agent\PropertyAgentController;
use App\Http\Controllers\User\UsersCotroller;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;


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


//Admin Routes
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);
//Route::get('/dashboard',[HomeController::class,'index']);
//Property

//admin Profile
Route::middleware(['auth'])->prefix('admin/profile')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profile-details');
    Route::post('update/{id}', [ProfileController::class, 'update'])->name('update-profile');
    Route::get('/delete/{id}',[ProfileController::class,'destroy'])->name('delete-property');

});
Route::middleware(['auth'])->prefix('agents/profile')->group(function () {
    Route::get('/', [ProfileController::class, 'indexAgents'])->name('agents-profile-details');
    Route::post('update/{id}', [ProfileController::class, 'update'])->name('update-profile');
    Route::get('/delete/{id}',[ProfileController::class,'destroy'])->name('delete-property');

});

//admin Routs
Route::middleware(['auth'])->prefix('admin/property')->group(function () {
    Route::get('/', [PropertyController::class, 'index'])->name('all-property');
    Route::get('/add', [PropertyController::class, 'create'])->name('add-property');
    Route::post('/save', [PropertyController::class, 'store'])->name('save-property');
    Route::get('/details/{id}', [PropertyController::class, 'details'])->name('details-property');
    Route::get('/edit/{id}', [PropertyController::class, 'edit'])->name('edit-property');
    Route::post('update/{id}', [PropertyController::class, 'update'])->name('update-property');
    Route::get('/delete/{id}',[PropertyController::class,'destroy'])->name('delete-property');

});
//    user Route
Route::middleware(['auth'])->prefix('admin/users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('all-users');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit-users');
    Route::post('/status/{id}', [UserController::class, 'statusUpdate'])->name('user-status');
    Route::get('/delete/{id}',[UserController::class,'destroy'])->name('delete-users');
    Route::get('/update-status/{id}', [UserController::class, 'update_status'])->name('user.update-status');
});
Route::middleware(['auth'])->prefix('admin/message')->group(function () {
    Route::get('/', [MessageController::class, 'index'])->name('all-message');
    Route::get('/delete/{id}', [MessageController::class, 'destroy'])->name('delete-message');
});

//    Agents Route
Route::middleware(['auth'])->prefix('admin/agents')->group(function () {
    Route::get('/', [UserController::class, 'agents'])->name('all-agents');
    Route::get('/add', [UserController::class, 'create'])->name('add-agents');
    Route::post('/store', [UserController::class, 'store'])->name('agents-store');
    Route::post('/status/{id}', [UserController::class, 'update_agents_status'])->name('agents-status');
    Route::get('/delete/{id}',[UserController::class,'destroy'])->name('delete-agents');
    Route::get('/update-status/{id}', [UserController::class, 'update_agents_status'])->name('update_agents_status');
});

//Agents Routes
Route::middleware(['auth'])->prefix('agents/property')->group(function () {
    Route::get('/', [PropertyAgentController::class, 'index'])->name('all-property-agents');
    Route::get('/add', [PropertyAgentController::class, 'create'])->name('add-property-agents');
    Route::post('/save', [PropertyAgentController::class, 'store'])->name('save-property-agents');
    Route::get('/details/{id}', [PropertyAgentController::class, 'details'])->name('details-property-agents');
    Route::get('/edit/{id}', [PropertyAgentController::class, 'edit'])->name('edit-property-agents');
    Route::post('update/{id}', [PropertyAgentController::class, 'update'])->name('update-property-agents');
    Route::get('/delete/{id}',[PropertyAgentController::class,'destroy'])->name('delete-property-agents');

});

Route::prefix('users')->group(function () {
    Route::get('/property-rate', [UsersCotroller::class, 'rateProperty'])->name('rate-property');
    Route::get('user-home/',[UsersCotroller::class,'userHome'])->name('user-home');
    Route::get('user-plot',[UsersCotroller::class,'userPlot'])->name('user-plot');
    Route::get('/property-detail/{id}',[UsersCotroller::class,'propertyDetails'])->name('property-detail');
    Route::get('/agent-detail/{id}',[UsersCotroller::class,'agentDetails'])->name('agent-detail');
    Route::post('contact-form',[UsersCotroller::class,'contactForm'])->name('contact-form');
    Route::get('about-us',[UsersCotroller::class,'aboutUs'])->name('about-us');
    Route::get('meet-team',[UsersCotroller::class,'meetTeam'])->name('meet-team');
    Route::get('contact-us',[UsersCotroller::class,'contact'])->name('contact');

    Route::get('/property-search', [UsersCotroller::class, 'searchProperty'])->name('search-property');
   Route::post('p-search',[UsersCotroller::class,'propertySearch'])->name('p-search');
   Route::post('p-search-advance',[UsersCotroller::class,'propertySearchAdvance'])->name('p-search-advance');

});

Route::get('user-logout',[UsersCotroller::class,'userLogout'])->name('user-logout');
Route::post('user-register',[UsersCotroller::class,'userRegister'])->name('user-register');







    