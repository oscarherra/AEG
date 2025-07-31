<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JuntaDirectivaController;
use App\Http\Controllers\OrganosController;
use App\Http\Controllers\NormativaController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\OrganoController;
use App\Http\Controllers\DirectorioEstudiantilController;
use App\Http\Controllers\Horario;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/junta-directiva', [JuntaDirectivaController::class, 'index'])->name('junta-directiva');

Route::get('/organos', [OrganosController::class, 'index'])->name('organos');

Route::get('/normativa', [NormativaController::class, 'index'])->name('normativa');

Route::get('/teeg', [OrganoController::class, 'teeg'])->name('teeg');

Route::get('/defensoria', [OrganoController::class, 'defensoria'])->name('defensoria');

Route::get('/asambleistas', [OrganoController::class, 'asambleistas'])->name('asambleistas');

Route::get('/asociaciones', [OrganoController::class, 'asociaciones'])->name('asociaciones');

Route::get('/horarios', [Horario::class, 'index'])->name('horarios');