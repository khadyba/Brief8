<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Models\Association;
use App\Models\Evenement;
use App\Models\Reservation;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('view');
// });

// route pour les associations  && les middlewares pour gerer l'authentication
Route::middleware(['check.auth','check_association'])->group(function () {
    Route::prefix('associations')->name('associations.')->group(function () {
    Route::get('/',[AssociationController::class,'index'])->name('index');
    Route::get('/Formevenement/create',[AssociationController::class,'create'])->name('create')->middleware('chek_profil');
    Route::post('/evenement/store',[AssociationController::class,'store'])->name('store');
    Route::get('/Formevenementmodifier/edit{id}',[AssociationController::class,'edit'])->name('edit');
    Route::post('/evenement/update/{id}',[AssociationController::class,'update'])->name('update');
    Route::get('/supprimerEvement/{id}',[AssociationController::class,'destroy'])->name('destroy');
    Route::get('/ClientsInscritevenement/show',[AssociationController::class,'show'])->name('show');
    Route::get('/FormAssociation',[AssociationController::class,'formAssociation'])->name('formAssociation');
    Route::post('/FormAssociationEnregistrer',[AssociationController::class,'formInsert'])->name('formInsert');
    Route::get('/reservation/update/{id}',[ReservationController::class,'update_ass'])->name('update_ass');

     });
});

// route pour AllUser les vue des evenment
Route::prefix('evenement')->name('users.')->group(function () {
    Route::get('/home',[HomeController::class,'homepage'])->name('home');
    Route::get('/Formreservation/create/{id}',[ReservationController::class,'create'])->name('create')->middleware('is_connect');
    Route::post('/reservation/edit',[ReservationController::class,'edit'])->name('edit');
    Route::get('/acceuil',[HomeController::class,'acceuil'])->name('acceuil');
    Route::get('/detail/{id}',[HomeController::class,'show'])->name('show');


});
// route pour l'authentication
Route::prefix('authentification')->name('user.')->group(function () {
    Route::get('/Formconnecxion', [UserController::class, 'create'])->name('create');
    Route::post('/connection', [UserController::class, 'connection'])->name('connection');
    Route::get('/FormCreercompte', [UserController::class, 'form'])->name('form');
    Route::post('/creerCompte/store', [UserController::class, 'store'])->name('store');
    Route::get('/deconnexion', [UserController::class, 'deconnexion'])->name('deconnexion');
    Route::get('/deconnexionAsso', [UserController::class, 'deconnexionAsso'])->name('deconnexionAsso');
});