<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    
        Schema::create('data_carga_saida', function(Blueprint $table){
            $table->id();
                $table->string('transportadora');
                $table->string('produto');
                $table->integer('peso_saida');
                $table->date('data_saida');
                $table->timestamps();
                $table->string('motorista');
                $table->string('placa_veiculo');
                $table->string('empresa_origem');
                $table->string('empresa_destino');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
