<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ChurchServiceReportController;
use App\Http\Controllers\CallCenterReportController;
use App\Http\Controllers\SmsReportController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\BusServiceReportController;
use App\Http\Controllers\ChurchRegistrationReportController;
use App\Http\Controllers\ChurchSummaryAttendanceController;
use App\Http\Controllers\GroupOverallRegistrationReportController;
use App\Http\Controllers\MassMediaReportController;
use App\Http\Controllers\TransitMediaReportController;
use App\Http\Controllers\OutdoorPublicityReportController;
use App\Http\Controllers\SocialMediaReportController;
use App\Http\Controllers\TelevisionReportController;
use App\Http\Controllers\EvangelismSquadReportController;
use App\Http\Controllers\RadioPublicityReportController;









Route::get('/', function () {
    return view('report');
})->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Reporting Portal Modal Form Route
Route::post('/radio', [RadioPublicityReportController::class, 'store']);

Route::post('/evangelism-squad', [EvangelismSquadReportController::class, 'store'])->name('evangelism-squad.store');

Route::post('/tv', [TelevisionReportController::class, 'store'])->name('tv.store');

Route::post('/social-media', [SocialMediaReportController::class, 'store'])->name('social-media.store');

Route::post('/outdoor', [OutdoorPublicityReportController::class, 'store'])->name('outdoor.store');

Route::post('/transit-media', [TransitMediaReportController::class, 'store'])->name('transit-media.store');

Route::post('/mass-media', [MassMediaReportController::class, 'store'])->name('mass-media.store');

Route::post('/church-reg-report', [GroupOverallRegistrationReportController::class, 'store'])->name('church-reg-report.store');

Route::post('/church-attendance-reports', [ChurchSummaryAttendanceController::class, 'store'])->name('church-attendance-reports');

Route::get('/church-service-report', [ChurchServiceReportController::class, 'create'])->name('church-service-report.create');
Route::post('/church-service-report', [ChurchServiceReportController::class, 'store'])->name('church-service-report.store');

Route::get('/call-center-report', [CallCenterReportController::class, 'create'])->name('call-center-report.create');
Route::post('/call-center-report', [CallCenterReportController::class, 'store'])->name('call-center-report.store');

Route::post('/sms-report', [SmsReportController::class, 'store'])->name('sms-report.store')->name('sms-report');

Route::get('/bus-service-reports', [BusServiceReportController::class, 'create'])->name('bus-service-reports.create');
Route::post('/bus-service-reports', [BusServiceReportController::class, 'store'])->name('bus-service-reports.store');

Route::get('/church-registration-reports', [ChurchRegistrationReportController::class, 'create'])
     ->name('church-registration-reports.create');
Route::post('/church-registration-reports', [ChurchRegistrationReportController::class, 'store'])
     ->name('church-registration-reports.store');



Route::post('/report', [ReportController::class, 'submit'])->name('report.submit');

Route::get('/register', [RegisterUserController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store'])->name('login.store');
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

/*
|--------------------------------------------------------------------------
| Export Routes
|--------------------------------------------------------------------------
*/
Route::get('/export/transit-media', [ExportController::class, 'exportTransitMedia'])->name('exports.transit-media');

