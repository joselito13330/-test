<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMsgcreate;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\UserController;


/* Routes Admin */
Route::middleware(['auth'])->group(function(){
    Route::resource('Admin', DocumentController::class)->except('show');
});
Route::get('Admin.modif', [DocumentController::class,'modif'])
 ->middleware(['auth'])->name('Admin.modif');

 /* Routes Membres */
Route::middleware(['auth'])->group(function(){
    Route::resource('Membres', UserController::class)->except('show');
});
Route::get('Membres.modif', [UserController::class,'modif'])
 ->middleware(['auth'])->name('Membres.modif');

/* Routes Home */
Route::get('/', 'App\Http\Controllers\HomeController@accueil')
->name('accueil');

 Route::get('dashboard', [HomeController::class,'dashboard'])
 ->middleware(['auth'])->name('dashboard');
 Route::get('Admin.index', [HomeController::class,'admin'])
 ->middleware(['auth'])->name('Admin.index');
 Route::get('Association.index', [HomeController::class,'association'])
 ->middleware(['auth'])->name('association.index');
 Route::get('Histoire.index', [HomeController::class,'histoire'])
 ->middleware(['auth'])->name('histoire.index');
 Route::get('Documents.index', [HomeController::class,'document'])
 ->middleware(['auth'])->name('document.index');
 Route::get('AlbmPhotos.index', [HomeController::class,'albumPhoto'])
 ->middleware(['auth'])->name('album.index');
 Route::get('QdN.index', [HomeController::class,'qdn'])
 ->middleware(['auth'])->name('QdN.index');


/* Formulaire de contact */
Route::get('Emails.Contact.formContact', 'App\Http\Controllers\ContactController@create' )
->name('Emails.formContact');

Route::post('Emails.Contact.contactMarkdowncreate', 'App\Http\Controllers\ContactController@store' )
->name('Contact.store');

/*Formulaire de demande de renseignement */
Route::get('Emails.Rens.formRens', 'App\Http\Controllers\RensController@create' )
->name('Emails.formRens');

Route::post('Emails.Rens.rensMarkdowncreate', 'App\Http\Controllers\RensController@store' )
->name('Rens.store');

require __DIR__.'/auth.php';


Route::get('Histoire.testtitre', function () {
    return view('Histoire.testtitre');
})->middleware(['auth'])->name('testtitre');

/*Route::get('/', function () {
    return view('welcome');
});*/
