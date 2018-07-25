<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->integer('carrinho_id')->unsigned();
            $table->integer('medicamento_id')->unsigned();
            $table->timestamps();            


            $table->foreign('medicamento_id')
                ->references('id')
                ->on('medicamentos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('carrinho_id')
                ->references('id')
                ->on('carrinhos')
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
        Schema::dropIfExists('items');
    }
}
