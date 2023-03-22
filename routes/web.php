<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DevelopperController;

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
Route::get('/',[PagesController::class,"Index"])->name('Accueil');
Route::post('/acceptcookie',[PagesController::class,"Cookie"])->name('Cookie');
Route::post('/LangageChanger',[PagesController::class,"LangageChanger"])->name('LangageChanger');
Route::post('/FormulaireContact',[PagesController::class,"SaveContactForm"]);
Route::get('/Accounts',[PagesController::class,"Comptes"])->name('Comptes');
Route::get('/Loans',[PagesController::class,"Loans"])->name('Loans');
Route::get('/LoanRequest',[PagesController::class,"LoanRequest"])->name('LoanRequest');
Route::get('/Conditions',[PagesController::class,"Conditions"])->name('Conditions');
Route::get('/LoanSimulator',[PagesController::class,"LoanSimulator"])->name('LoanSimulator');
//Developper Routes
Route::get('/Version',[DevelopperController::class,"Version"]);
Route::get('/Traducteur',[DevelopperController::class,"Traducteur"]);
Route::post('/Traducteur',[DevelopperController::class,"SaveTraducteur"]);

//UserRoutes
Route::get('/AccountResquest',[UserController::class,"Register"])->name('Register');
Route::get('/AccountLogin',[UserController::class,"Register"])->name('Login');


//Loan Requests
Route::get('/LoanRequest',[LoanController::class,"LoanRequest"])->name('LoanRequest');


Route::group(['middleware'=>"auth"],function(){
    

});