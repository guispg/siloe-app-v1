<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConsultationController;

use App\Http\Controllers\FactureController;

use App\Models\Facture;

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $toutesLesFactures = Facture::where('created_at', '!=', null)->orderBy('created_at', 'desc')->get() ;
        return view('siloe.facture.liste-facture')->with('toutesLesFactures', $toutesLesFactures) ;
    })->name('dashboard');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

/**
 * ROUTE POUR LES PATIENTS
 */
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::view('/patient', 'siloe.patient.patient-create')->name('patient.enregistrer');
    //Route::get('/patient', function () { return view('siloe.patient.patient-create'); })->name('patient.enregistrer');
});

/**
 * LES ROUTES POUR CONSULTATION
 */
Route::group(['middleware' => 'auth', 'prefix' => '/consultation', 'as' => 'consultation.'], function(){
    Route::get('/test', [ConsultationController::class, 'index'])->name('test');
});

/**
 * FACTURES
 */
Route::group(['middleware' => 'auth', 'prefix' => '/facture', 'as' => 'facture.'], function(){
    Route::get('/liste', [FactureController::class, 'index'])->name('liste');

    Route::get('/creer', [FactureController::class, 'create'])->name('creer');
    Route::post('/enregistrer', [FactureController::class, 'store'])->name('enregistrer');

    Route::get('/modifier/{id}', [FactureController::class, 'edit'])->name('modifier');

    Route::get('/imprimer/{id}', [FactureController::class, 'imprimerUneFacture'])->name('imprimer');
});
