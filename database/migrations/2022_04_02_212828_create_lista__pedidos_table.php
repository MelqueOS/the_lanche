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
        Schema::create('lista_pedido', function (Blueprint $table) {
            $table->timestamps();
            $table->bigInteger('quantidade'); 
            $table->Double('val_total_prod',8, 2);// valor unitario x quantidade
            $table->foreignId("pedido_controle_id");
            $table->foreign("pedido_controle_id")->references("id")->on("pedido_controle");
            $table->foreignId("produto_combo_id");
            $table->foreign("produto_combo_id")->references("id")->on("produto_combo");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista__pedidos');
    }
};
