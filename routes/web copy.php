<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PaymentCalculationController;
use App\Http\Controllers\RecoveryController;
use App\Http\Controllers\StopPaymentController;
// use App\Http\Controllers\DoReportController;
use App\Http\Controllers\DoReportController;
use App\Http\Controllers\BrokerRegisterController;
use App\Http\Controllers\FinalCMCommissionController;
// use App\Http\Controllers\ImportController;   //BM file
use App\Http\Controllers\ImportExportController;
use App\Http\Controllers\CircularCommissionController;

Route::get('/login', function () {
    return view('/welcome');
});
 

Route::get('/', function () {
    return view('home'); // Your custom login view file
})->name('home');

Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

// Other authentication routes if needed
Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');









Route::get('import-payments', [PaymentController::class, 'importForm']);
Route::post('import-payments', [PaymentController::class, 'import'])->name('import');
Route::get('/import-form', [PaymentController::class, 'importForm']);
Route::post('update-final-payable', [PaymentController::class, 'updateFinalPayableAmount'])->name('update.payable');

// Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
// Route::post('/import', [PaymentController::class, 'import'])->name('payments.import');

Route::get('/data', [DataController::class, 'index']);



Route::get('/calculate-payments', [PaymentCalculationController::class, 'calculateAndStore']);







// Route to display the upload form (GET)
Route::get('/upload-recovery', function () {
    return view('recovery'); // Make sure this matches your Blade file
});

// // Route to handle the import (POST)
Route::post('/import-recovery', [RecoveryController::class, 'import'])->name('import.recovery');
Route::get('/recoveries', [RecoveryController::class, 'index'])->name('recoveries.index');
// Route::match(['get', 'post'], '/import-recovery', [YourController::class, 'method']);
Route::resource('recoveries', RecoveryController::class);




Route::get('/stop-payments', [StopPaymentController::class, 'index']);
Route::post('/stop-payments/import', [StopPaymentController::class, 'import'])->name('stop-payments.import');
Route::get('/stop-payments/export', [StopPaymentController::class, 'export'])->name('stop-payments.export');
Route::post('/stop-payments', [StopPaymentController::class, 'store'])->name('stop-payments.store');
Route::resource('stop-payments', StopPaymentController::class);


Route::get('/doreports', [DoReportController::class, 'index']);
Route::post('/doreports/import', [DoReportController::class, 'import'])->name('doreports.import');
Route::get('/doreports/export', [DoReportController::class, 'export'])->name('doreports.export');




// Route::get('/brokers', [BrokerRegisterController::class, 'index']);
Route::get('/brokers', [BrokerRegisterController::class, 'index'])->name('broker.index');
Route::get('/export-brokers', [BrokerRegisterController::class, 'export']);

Route::post('/import-brokers', [BrokerRegisterController::class, 'import'])->name('import-brokers');

// Route::get('/brokers', [BrokerRegisterController::class, 'index'])->name('broker.index');

 


Route::get('commission', [FinalCMCommissionController::class, 'index'])->name('final_c_m_commissions.index');
Route::post('commission/import', [FinalCMCommissionController::class, 'import'])->name('final_cm_commission.import');
// Route::post('/final_cm_commission/import', [FinalCMCommissionController::class, 'import'])->name('final_cm_commission.import');
// Route::get('/final_cm_commission/import', [FinalCMCommissionController::class, 'showImportForm'])->name('final_cm_commission.showImportForm');
// Route::get('/commission/import', [FinalCMCommissionController::class, 'index'])->name('final_c_m_commissions.index');
// Route::post('/ommission/import', [FinalCMCommissionController::class, 'import'])->name('final_c_m_commission.import');






// Route::get('import-export', function () {
//     return view('import-export');
// })->name('import-export');

// Route::post('import', [ImportExportController::class, 'import'])->name('import');
// Route::get('/export', [ImportExportController::class, 'export'])->name('export');
Route::post('/importBMCommission', [ImportExportController::class, 'importBMCommission'])->name('importBMCommission');
Route::get('/import-export', [ImportExportController::class, 'index'])->name('import-export');




Route::get('/import', [CircularCommissionController::class, 'importView'])->name('import.view');
Route::post('/import', [CircularCommissionController::class, 'import'])->name('import');
Route::get('/export', [CircularCommissionController::class, 'export'])->name('export');







Route::get('/coming', function () {
    return view('coming'); // Your custom login view file
})->name('coming');

Route::get('/coming1', function () {
    return view('coming1'); // Your custom login view file
})->name('coming1');

Route::get('/coming2', function () {
    return view('coming2'); // Your custom login view file
})->name('coming2');

// Route::post('/coming2', [YourController::class, 'yourMethod']);
Route::post('/coming2', [\App\Http\Controllers\ComingController::class, 'handleRequest']);





Route::get('/import-cir', [CircularCommissionController::class, 'importcir'])->name('import-cir');

Route::get('/import-bm', [ImportExportController::class, 'importbm'])->name('import-bm');

Route::get('/import-cm', [FinalCMCommissionController::class, 'importcm'])->name('import-cm');
