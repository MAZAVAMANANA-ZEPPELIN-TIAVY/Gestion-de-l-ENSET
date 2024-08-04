<?php

use App\Http\Controllers\loginAdminController;
use App\Http\Controllers\registerAdminController;
use Illuminate\Support\Facades\Route;

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
    return view('pages/home');
})->name('accueil');

Route::post('/administrateur', [loginAdminController::class, 'loginAdmin'])->name('accueilAdmin');

Route::post('/listeAdministrateur', [registerAdminController::class, 'registerAdmin'])->name('listeAdmin');

Route::get('/about', function () {
    return view('pages/about');
})->name('a_propos');

Route::get('/registerAdministrateur', [registerAdminController::class, 'genderNationality'])->name('restrationAdministrateur');

Route::get('/loginAdministrateur', function () {
    return view('pages/bacOffice/loginAdministrateur');
})->name('loginAdministrateur');