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
    public function up()
    {
        Schema::create('pedido_controle', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('status');
            $table->String('forma_pagamento'); //dinheiro, cartao
            $table->Double('total_pagamento', 8, 2);
            $table->Double('troco', 8, 2); //somente dinheiro
            $table->String('bandeira'); // Bandeira do cartão, caso dinheiro atribui o valor N_APLICA
            $table->foreignId("cliente_id");
            $table->foreign("cliente_id")->references("id")->on("cliente");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido__controles');
    }
};
