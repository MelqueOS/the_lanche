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
            $table->timestamps();
            $table->String('tipo_logradouro');
            $table->String('logradouro');
            $table->String('bairro');
            $table->String('numero');
            $table->String('complemento')->nullable();
            $table->String('referencia')->nullable();
            $table->foreignId("user_tag_id")->id();
            $table->foreign("user_tag_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localizacao');
    }
};
