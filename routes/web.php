<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::post('/Documents/acceptcookie',[PagesController::class,"Cookie"])->name('Cookie');
Route::post('/LangageChanger',[PagesController::class,"LangageChanger"])->name('LangageChanger');
Route::post('/FormulaireContact',[PagesController::class,"SaveContactForm"]);
Route::get('/Accounts',[PagesController::class,"Comptes"])->name('Comptes');
Route::get('/Loans',[PagesController::class,"Loans"])->name('Loans');
Route::get('/LoanRequest',[PagesController::class,"LoanRequest"])->name('LoanRequest');
Route::get('/Conditions',[PagesController::class,"Conditions"])->name('Conditions');
Route::get('/LoanSimulator',[PagesController::class,"LoanSimulator"])->name('LoanSimulator');
Route::get('/Assurance',[PagesController::class,"Assurance"])->name('Assurance');
Route::get('/Savings',[PagesController::class,"Savings"])->name('Savings');
Route::get('/Investment',[PagesController::class,"Investment"])->name('Investment');
Route::get('/Contact',[PagesController::class,"Contact"])->name('Contact');

//Developper Routes
Route::get('/Version',[DevelopperController::class,"Version"]);
Route::get('/Traducteur',[DevelopperController::class,"Traducteur"]);
Route::post('/Traducteur',[DevelopperController::class,"SaveTraducteur"]);

//UserRoutes
Route::get('/AccountResquest',[UserController::class,"Register"])->name('Register');
Route::post('/SaveRegister',[UserController::class,"SaveRegister"])->name('SaveRegister');
Route::get('/AccountLogin',[UserController::class,"Register"])->name('Login');
Route::get('/req/{user}',[UserController::class,"req"])->name('Req');
Route::get('/Documents/{user}',[UserController::class,"Documents"])->name('Documents');
Route::post('Documents/DocumentsUpload',[UserController::class,"DocumentsUpload"])->name('DocumentsUpload');


//Loan Requests
Route::get('/LoanRequest',[LoanController::class,"LoanRequest"])->name('LoanRequest');


Route::group(['middleware'=>"auth"],function(){
    

});