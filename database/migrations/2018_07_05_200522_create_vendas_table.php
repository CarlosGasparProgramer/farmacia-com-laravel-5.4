<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->date('data_venda');
            $table->double('total_venda');
            $table->string('nome_cliente', 45);
            $table->integer('quant_venda');
            $table->integer('user_id')->unsigned();
            $table->integer('carrinho_id')->unsigned();

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('carrinho_id')
                ->references('id')->on('carrinhos')
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
        Schema::dropIfExists('vendas');
    }
}
