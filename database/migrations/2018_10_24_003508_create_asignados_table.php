<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {			

        Schema::create('asignados', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			
			$table->unsignedInteger('equipos_id')->nullable();
			$table->foreign('equipos_id')->references('id')->on('equipos')->onDelete('cascade')->onUpdate('cascade');
			
			$table->unsignedInteger('user_id')->nullable();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignados');
    }
}