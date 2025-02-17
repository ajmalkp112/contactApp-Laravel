<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\XmlImportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return redirect()->route('contacts.index');
});

Route::resource('contacts', ContactController::class);

Route::get('/import', [XmlImportController::class, 'import'])->name('contacts.import');
Route::post('/import',[XmlImportController::class, 'importxml'])->name('contacts.importxml');