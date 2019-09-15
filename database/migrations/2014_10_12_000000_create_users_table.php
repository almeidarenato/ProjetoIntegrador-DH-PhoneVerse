<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->date('dtNascimento');
            $table->string('aparelho')->nullable();
            $table->string('motivo')->nullable();
            $table->string('usoCelular')->nullable();
            $table->boolean('marcaApple')->default(false);
            $table->boolean('marcaMotorola')->default(false);
            $table->boolean('marcaSamsung')->default(false);
            $table->boolean('marcaXiaomi')->default(false);
            $table->boolean('marcaAsus')->default(false);
            $table->boolean('marcaLG')->default(false);
            $table->boolean('versaoIos12')->default(false);
            $table->boolean('versaoAndroid7')->default(false);
            $table->boolean('versaoAndroid8')->default(false);
            $table->boolean('versaoAndroid9')->default(false);
            $table->boolean('versaoAndroid10')->default(false);
            $table->boolean('procApple')->default(false);
            $table->boolean('procKirin')->default(false);
            $table->boolean('procSnapdragon')->default(false);
            $table->boolean('procMediaTek')->default(false);
            $table->boolean('procExynos')->default(false);
            $table->double('tamanhoTelaDe', 8, 2)->nullable();
            $table->double('tamanhoTelaAte', 8, 2)->nullable();
            $table->integer('bateriaDe')->nullable();
            $table->integer('bateriaAte')->nullable();
            $table->integer('cameraDe')->nullable();
            $table->integer('cameraAte')->nullable();
            $table->double('precoDe', 8, 2)->nullable();
            $table->integer('precoAte')->nullable();
            $table->integer('memoriaInterna')->nullable();
            $table->integer('memoriaRam')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
