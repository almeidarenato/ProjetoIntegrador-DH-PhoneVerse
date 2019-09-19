<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFksAparelhos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aparelhos', function (Blueprint $table) {
            $table->foreign('id_marca')->references('id')->on('marcas');
            $table->foreign('id_memoriainterna')->references('id')->on('memoria_interna');
            $table->foreign('id_memoriaram')->references('id')->on('memoria_ram');
            $table->foreign('id_sistemaoperacional')->references('id')->on('sistema_operacional');
            $table->foreign('id_slotsim')->references('id')->on('slot_sim');
            $table->foreign('id_processador')->references('id')->on('processadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aparelhos', function (Blueprint $table) {
            $table->foreign('id_marca')->references('id')->on('marcas');
            $table->foreign('id_memoriainterna')->references('id')->on('memoria_interna');
            $table->foreign('id_memoriaram')->references('id')->on('memoria_ram');
            $table->foreign('id_sistemaoperacional')->references('id')->on('sistema_operacional');
            $table->foreign('id_slotsim')->references('id')->on('slot_sim');
            $table->foreign('id_processador')->references('id')->on('processadores');
        });
    }
}
