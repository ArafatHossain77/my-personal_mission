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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/action', [App\Http\Controllers\UsersController::class, 'action'])->name('action')->middleware('auth','isUserCheck');
Route::post('/logout', [App\Http\Controllers\UsersController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/', [App\Http\Controllers\UsersController::class, 'home'])->name('home');
Route::get('/login', [\App\Http\Controllers\UsersController::class, 'login'])->name('login');
Route::get('/registration', [\App\Http\Controllers\UsersController::class, 'registration'])->name('registration');
Route::post('/store', [\App\Http\Controllers\UsersController::class, 'store'])->name('storeData');



Route::post('/login_dashboard', [App\Http\Controllers\UsersController::class, 'login_dashboard'])->name('login_dashboard');
Route::get('/user', [App\Http\Controllers\UsersController::class, 'user'])->name('user_dashboard')->middleware('auth','user_login');
Route::get('/admin', [App\Http\Controllers\UsersController::class, 'admin'])->name('admin_dashboard')->middleware('auth','admin_login');


Route::put('/update/{id}', [App\Http\Controllers\UsersController:: class, 'update_user'])->name('update_user')->middleware('auth');
Route::get('/edit_user', [App\Http\Controllers\UsersController::class, 'edit_user'])->name('edit_user')->middleware('auth');
Route::delete('/delete/{id}', [App\Http\Controllers\UsersController::class, 'destroy'])->name('delete_user')->middleware('auth');
Route::get('/timeline', [App\Http\Controllers\UsersController::class, 'timeline'])->name('timeline')->middleware('auth');



//Personal Mission section
Route::get('/user_mission', [App\Http\Controllers\PersonalMissionController::class, 'user_mission'])->name('user_mission')->middleware('auth');
Route::get('/admin_mission', [App\Http\Controllers\PersonalMissionController::class, 'admin_mission'])->name('admin_mission')->middleware('auth');



Route::get('/personal-mission-User', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionUser'])->name('personalMissionUser')->middleware('auth');
Route::get('/personal-mission-admin', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionAdmin'])->name('personalMissionAdmin')->middleware('auth');
Route::get('/personal-mission-dashboardUser', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionDashboardUser'])->name('personalMissionDashboardUser')->middleware('auth','personalMissionCreateUser');
Route::get('/personal-mission-dashboardAdmin', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionDashboardAdmin'])->name('personalMissionDashboardAdmin')->middleware('auth','personalMissionCreateAdmin');
Route::post('/personal-mission-createUser', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionCreateUser'])->name('personalMissionCreateUser')->middleware('auth');
Route::post('/personal-mission-createAdmin', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionCreateAdmin'])->name('personalMissionCreateAdmin')->middleware('auth');

//personal_Mission User & Admin view
Route::get('/personal-mission-user-view', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionUserView'])->name('personalMissionUserView')->middleware('auth','personal_mission_user_view');
Route::get('/personal-mission-admin-view', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionAdminView'])->name('personalMissionAdminView')->middleware('auth','personal_mission_admin_view');
Route::get('/user_edit_personal-mission-dashboard-view', [App\Http\Controllers\PersonalMissionController::class, 'userEditPersonalMissionViewDashboard'])->name('userEditPersonalMissionViewDashboard')->middleware('auth','user_edit_personal-mission-dashboard-check');
Route::get('/admin_edit_personal-mission-dashboard-view', [App\Http\Controllers\PersonalMissionController::class, 'admin_Personal_mission_edit_Dashboard'])->name('admin_Personal_mission_edit_Dashboard')->middleware('auth','admin_edit_personal-mission-dashboard-check');

//personal mission edit/ update/ request
Route::put('/personal-mission-user-edit-request/{id}', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionUserEditRequest'])->name('personalMissionUserEditRequest')->middleware('auth');
Route::put('/personal-mission-user-mission-edit/{id}', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionUserMissionEdit'])->name('personalMissionUserMissionEdit')->middleware('auth');
Route::put('/personal-mission-user-accept-ignore/{id}', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionAdminEditAcceptIgnoreRequest'])->name('personalMissionAdminEditAcceptIgnoreRequest')->middleware('auth');
Route::get('/personal-mission-user-mission-edit', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionUserMissionEditDashboard'])->name('personalMissionUserMissionEditDashboard')->middleware('auth');
Route::put('/personal-mission-admin-mission-update/{id}', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionAdminMissionUpdate'])->name('personalMissionAdminMissionUpdate')->middleware('auth');
Route::put('/personalMissionUserMissionUpdate/{id}', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionUserMissionUpdate'])->name('personalMissionUserMissionUpdate')->middleware('auth');

//mission_complete section
Route::get('/mission_report', [App\Http\Controllers\PersonalMissionController::class, 'mission_report'])->name('mission_report')->middleware('auth','MissionReport');
Route::get('/mission_complete', [App\Http\Controllers\PersonalMissionController::class, 'mission_complete'])->name('mission_complete')->middleware('auth');




