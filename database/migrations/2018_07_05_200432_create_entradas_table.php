<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->increments('id');       
            $table->date('data_entrada');
            $table->double('preco_venda');
            $table->double('preco_compra');
            $table->date('data_expiracao');
            $table->integer('tamanho');
            $table->integer('quant');
            $table->integer('medicamento_id')->unsigned();

            $table->timestamps();

            $table->foreign('medicamento_id')
                ->references('id')
                ->on('medicamentos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entradas');
    }
}
