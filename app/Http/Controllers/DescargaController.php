<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MilkUpService;

class DescargaController extends Controller
{
        public function buscarPorApi(MilkUpService $service){
        $dados = $service->getDescarga("2025-11-13T00:00:00");
        
        $descarga = $dados["descartes"][0] ?? null;


        return view("cargas-entrada", compact("descarga"));
    }
}
