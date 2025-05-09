<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JuntaDirectivaController;
use App\Http\Controllers\OrganosController;
use App\Http\Controllers\NormativaController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\OrganoController;
use App\Http\Controllers\DirectorioEstudiantilController;


// Ruta para la página de inicio
Route::get('/', [HomeController::class, 'index'])->name('home');

// Ruta para la sección de Junta Directiva
Route::get('/junta-directiva', [JuntaDirectivaController::class, 'index'])->name('junta-directiva');

// Ruta para la sección de órganos
Route::get('/organos', [OrganosController::class, 'index'])->name('organos');

Route::get('/normativa', [NormativaController::class, 'index'])->name('normativa');

Route::get('/teeg', [OrganoController::class, 'teeg'])->name('teeg');

Route::get('/defensoria', [OrganoController::class, 'defensoria'])->name('defensoria');

Route::get('/asambleistas', [OrganoController::class, 'asambleistas'])->name('asambleistas');

Route::get('/noticias', [NoticiasController::class, 'index'])->name('noticias');

Route::get('/asociaciones', [OrganoController::class, 'asociaciones'])->name('asociaciones');

Route::get('/directorio-estudiantil', [DirectorioEstudiantilController::class, 'index'])->name('directorio-estudiantil');