<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonedaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('moneda')){
            Schema::create('moneda', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('monto');
                $table->string('moneda_origen');
                $table->string('moneda_destino');
                $table->string('tipo_cambio');
                $table->timestamps();
            });
    }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moneda');
    }
}
