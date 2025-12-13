<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EntradaData;

class CargasController extends Controller
{
    public function filter(Request $request){
        $query = EntradaData::query();

        //filter por data

        if ($request->filled('data_entrada')){

            $data = str_replace('/', '-', $request->data_entrada);
            $data_format = date('Y-m-d', strtotime($data));   

            $query->whereDate('data_entrada' == $data_format);

        }


        if ($request->filled('produto')){
            $query->where('produto', $request->input('produto'));
        }
        


        $resultados = $query->get();

        //return view ('filtro-cargas-entrada', ['resultados' => $resultados]);

        return view ('dashboard', ['resultados' => $resultados]);


    }
}
