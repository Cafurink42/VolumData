<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EntradaData;

use Illuminate\Support\Facades\DB;

class CargasController extends Controller
{
    public function Filter (Request $request) {
        $tipoSelecionado = $request->query('tipo_produto');
        $dataSelecinado = $request->query('data_entrada');


        $resultados = DB::table('data_carga_entrada')->when($tipoSelecionado, function($query, $produto) {
                return $query->where('produto', $produto); 
            })->get();
      
            
        return view('dashboard', compact('resultados')); 
    }

     

    
}
