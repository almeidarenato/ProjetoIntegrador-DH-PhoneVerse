<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAparelhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aparelhos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('modelo')->nullable(false);;
            $table->unsignedBigInteger('id_memoriainterna')->nullable(false);
            $table->unsignedBigInteger('id_memoriaram')->nullable(false);
            $table->unsignedBigInteger('id_sistemaoperacional')->nullable(false);
            $table->unsignedBigInteger('id_marca')->nullable(false);
            $table->unsignedBigInteger('id_slotsim')->nullable(false);
            $table->unsignedBigInteger('id_processador')->nullable(false);
            $table->integer('camerafrontal')->nullable(false);
            $table->integer('cameratraseira')->nullable(false);
            $table->double('preco')->nullable(false);
            $table->string('imagem')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aparelhos');
    }
}
