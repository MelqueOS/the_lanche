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
        Schema::create('produto_combo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String("nome_descritivo");
            $table->String("tipo");//Bebida, lanche, combo
            $table->Double("valor", 8, 2);//Preço
            $table->String("descricao");
            $table->String("url_img");//Imagem representativa do produto
            $table->foreignId("empresa_id");
            $table->foreign("empresa_id")->references("user_tag_id")->on("empresa");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto__combos');
    }
};
