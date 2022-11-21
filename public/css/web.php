<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\CadetController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\DropdownController;

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


// Route::get('/','HomeController@showLanding')->name('showLanding');

Route::get('/', [HomeController::class, 'landing']);
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/change', [UserController::class, 'change'])->name('change');
Route::post('/forgot', [UserController::class, 'forgot'])->name('forgot');
Route::post('/homesupport', [HomeController::class, 'support'])->name('support');
Route::post('/subtopic', [HomeController::class, 'subtopic'])->name('subtopic');
//filter place
Route::post('getProvinces',[InstructorController::class,'getProvinces'])->name('getProvinces');
// Route::get('regions', [InstructorController::class, 'getRegions'])->name('regions');
// Route::get('provinces', [InstructorController::class, 'getProvinces'])->name('provinces');
// Route::get('barangays', [InstructorController::class, 'getBarangays'])->name('barangays');
Route::get('error/route', function(){
    return view('errors.error403');
})->name('error_route');

Route::group(['middleware' => ['web','auth']], function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    // save instructor
    Route::post('/instructor/save/','InstructorController@saveInstructor')->name('saveInstructor');

    //Profile
	Route::get('/profile', [ProfileController::class, 'profile'])->name('profile')->middleware('hasAccessProfile');
    Route::get('/profile/changepassword', [ProfileController::class, 'updatepassword'])->name('updatepassword')->middleware('hasAccessProfile');
    Route::post('/profile/info', [ProfileController::class, 'getProfileInfo'])->name('getProfileInfo');
    Route::post('profile/changeunit', [ProfileController::class, 'changeUserUnit'])->name('changeUserUnit');

    //Contact Support
    Route::post('/profile/support/create', [SupportController::class, 'sendreport'])->name('sendreport');
    Route::post('/profile/support/update', [SupportController::class, 'updateticket'])->name('updateticket');
    Route::post('/profile/ticket/subtopic', [SupportController::class, 'getSubtopics'])->name('getSubtopics');
    Route::post('/profile/support/list', [SupportController::class, 'profileTicketList'])->name('profileTicketList');
    Route::post('/profile/support/view', [SupportController::class, 'viewProfileTicket'])->name('viewProfileTicket');
    Route::post('/profile/support/resolution', [SupportController::class, 'viewProfileResolution'])->name('viewProfileResolution');
    Route::post('/profile/support/upload', [SupportController::class, 'viewProfileUpload'])->name('viewProfileUpload');

    Route::post('users/subunit', [UserController::class, 'getUserSubunits'])->name('getUserSubunits');
    Route::post('users/station', [UserController::class, 'getUserStation'])->name('getUserStation');

    Route::get('/cadet/show', [CadetController::class, 'showCadets'])->name('showCadets');
    Route::post('/cadet/list', [CadetController::class, 'getCadetList'])->name('getCadetList');
    Route::post('/cadet/info', [CadetController::class, 'getCadetInformation'])->name('getCadetInformation');

    Route::get('/instructor/show', [InstructorController::class, 'showInstructors'])->name('showInstructors');
    Route::post('/instructor/list', [InstructorController::class, 'getInstructorList'])->name('getInstructorList');
    Route::post('/instructor/info', [InstructorController::class, 'getInstructorInformation'])->name('getInstructorInformation');

     //Permanent address dropdown
    Route::post('/select/companies', [DropdownController::class, 'getDropDownCompanies'])->name('getDropDownCompanies');
    Route::post('/select/permprovinces', [InstructorController::class, 'getDropDownpermProvinces'])->name('getDropDownpermProvinces');
    Route::post('/select/permmunicipalities', [InstructorController::class, 'getDropDownpermMunicipalities'])->name('getDropDownpermMunicipalities');
    Route::post('/select/permbarangays', [InstructorController::class, 'getDropDownpermBarangays'])->name('getDropDownpermBarangays');

     //Present address dropdown
     Route::post('/select/presprovinces', [InstructorController::class, 'getDropDownpresProvinces'])->name('getDropDownpresProvinces');
     Route::post('/select/presmunicipalities', [InstructorController::class, 'getDropDownpresMunicipalities'])->name('getDropDownpresMunicipalities');
     Route::post('/select/presbarangays', [InstructorController::class, 'getDropDownpresBarangays'])->name('getDropDownpresBarangays');
});

// Route::get('/','HomeController@showLanding')->name('showLanding');
// Route::post('login', 'UserController@postLogin')->name('postLogin');
// Route::post('changepassword', 'UserController@postSavePassword')->name('postSavePassword');
// Route::post('forgotpassword','UserController@postForgotPassword')->name('postForgotPassword');
// Route::post('contactsupport','HomeController@landingSendReport')->name('landingSendReport');
// Route::post('subtopic','HomeController@getLandingSubtopic')->name('getLandingSubtopic');

// Route::get('/', function () {
//     return view('welcome');
// });
