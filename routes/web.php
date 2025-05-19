<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProntuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('home');

Route::resource('pacientes', PacienteController::class);
Route::get('/pacientes/{id}/prontuarios', [PacienteController::class, 'prontuarioIndex'])->name('pacientes.prontuarios');
Route::get('/pacientes/{id}/prontuarios/create', [PacienteController::class, 'prontuarioCreate'])->name('pacientes.prontuarios.create');
Route::post('/pacientes/{id}/prontuarios', [PacienteController::class, 'prontuarioStore'])->name('pacientes.prontuarios.store');

Route::resource('prontuarios', ProntuarioController::class);
Route::get('/prontuarios/{id}/pdf', [ProntuarioController::class, 'pdf'])->name('prontuarios.pdf');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
