<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DescargaController;

use App\Http\Controllers\CargasController;




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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cargas-entrada', function(){
    return view('cargas-entrada');

})->middleware(['auth', 'verified'])->name('cargas-entrada');

Route::get('/cargas-saida', function(){
    return view('cargas-saida');
    
})->middleware(['auth', 'verified'])->name ('cargas-saida');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/cargas-entrada/store', [ProfileController::class, 'storeEntrada'])->name('cargas.entrada.store');
Route::post('/cargas-saida/store', [ProfileController::class, 'storeSaida'])->name('cargas.saida.store');

//Route::get('/dashboard', function(){
    //return view ('dashboard', [
      //  'cargasEntrada' => App\Models\EntradaData::all(),
       // 'cargasSaida' => App\Models\SaidaData::all(),

   // ]);
//})->middleware(['auth', 'verified'])->name('dashboard');


//Route::get('/importar-api', [DescargaController::class, 'buscarPorApi'])->name('importar.api');


Route::get('/dashboard', [CargasController::class, 'filter'])->name('dashboard.filter');

require __DIR__.'/auth.php';
