<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrinhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrinhos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->string('sessao', 100)->unique();
            $table->double('preco')->nullable();
            $table->integer('user_id')->unsigned();            
            $table->enum('estado', ['Aberto', 'Fechado'])->nullable()->default('Aberto');            
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('carrinhos');
    }
}
