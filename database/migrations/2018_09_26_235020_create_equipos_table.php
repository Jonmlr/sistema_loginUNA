<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
			$table->enum('estado', ['OPERATIVO', 'INACTIVO', 'EN REPARACIÓN'])->default('INACTIVO');
			$table->integer('codigou')->unique();
			$table->string('serial');
			$table->string('descripcion');
			$table->string('observaciones')->nullable();
			$table->string('slug')->unique();
            $table->timestamps();
		
			$table->unsignedInteger('lugar_id')->nullable();
			$table->foreign('lugar_id')->references('id')->on('lugars')->onDelete('cascade')->onUpdate('cascade');
			
			$table->unsignedInteger('tiposequipos_id')->nullable();
			$table->foreign('tiposequipos_id')->references('id')->on('tiposequipos')->onDelete('cascade')->onUpdate('cascade');
			
			$table->unsignedInteger('marcasequipos_id')->nullable();
			$table->foreign('marcasequipos_id')->references('id')->on('marcasequipos')->onDelete('cascade')->onUpdate('cascade');        
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
