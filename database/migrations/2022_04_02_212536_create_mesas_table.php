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
        Schema::create('mesa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('qr_code');
            $table->String('numero_lugares');
            $table->String('local')->nullable();
            
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
        Schema::dropIfExists('mesas');
    }
};
