<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->increments('id');    

            $table->string('nome_empresa', 45);
            $table->string('nif', 45)->unique()->nullable();
            $table->string('nome_responsavel', 45)->nullable();
            $table->string('provincia', 45);
            $table->string('municpio', 45);
            $table->string('bairro', 45);
            $table->string('rua', 45);
            $table->string('numero_casa', 10)->nullable();
            $table->integer('telefone_um');
            $table->integer('telefone_2')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configs');
    }
}
