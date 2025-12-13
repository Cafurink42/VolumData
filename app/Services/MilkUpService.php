<?php


namespace App\Services;

use Illuminate\Support\Facades\Http;


class MilkUpService{
    private $baseUrl= "https://api.milkup.com.br/sync/swagger";
    private $apiKey = "sU60YupkGeUiUbqCe4smVHvOQb5C8EVkZbEh0PvBg8q1Q7IGVqZGgB2DI83x";

    public function getDescarga($lastSyncedAt, $operation = "CARGA", $status = "DESCARREGADOS"){
        $response = Http::withHeaders([
            "aceept"=> "application/json",
            "api-key"=> $this->apiKey

        ])->get($this->baseUrl, [
            "last_synced_at"=> $lastSyncedAt,
            "operation"=> $operation,
            "status"=> $status

        ]);

        return $response->json();
    }
}