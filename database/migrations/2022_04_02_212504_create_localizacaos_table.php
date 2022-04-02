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
        Schema::create('localizacao', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('tipo_logradouro');
            $table->String('logradouro');
            $table->String('bairro');
            $table->String('numero');
            $table->String('complemento');
            $table->String('referencia');
            $table->foreignId("user_tag_id");
            $table->foreign("user_tag_id")->references("id")->on("user_tag");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localizacaos');
    }
};
