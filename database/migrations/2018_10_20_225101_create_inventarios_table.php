<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->increments('id');
			$table->string('slug')->unique();
            $table->timestamps();
			
			$table->unsignedInteger('equipos_id')->nullable();
			$table->foreign('equipos_id')->references('id')->on('equipos')->onDelete('cascade')->onUpdate('cascade');
			
			$table->unsignedInteger('lugar_id')->nullable();
			$table->foreign('lugar_id')->references('id')->on('lugars')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
}
