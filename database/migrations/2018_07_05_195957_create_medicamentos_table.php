<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->increments('id');           
            $table->string('nome', 100);
            $table->text('descricao');
            $table->text('publico');
            $table->text('conservacao');
            $table->integer('forma_id')->unsigned();   
            $table->timestamps();        
        
            $table->foreign('forma_id')
                ->references('id')
                ->on('formas')
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
        Schema::dropIfExists('medicamentos');
    }
}
