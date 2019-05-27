<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('pais_id');
            $table->integer('posicion_id');
            $table->integer('provincia_id')->nullable()->default(null);
            $table->string('telefono')->nullable()->default(null);
            $table->integer('edad')->nullable()->default(null);
            $table->date('fecha_nacimiento')->nullable()->default(null);
            $table->integer('altura');
            $table->integer('peso');
            $table->string('club')->nullable()->default(null);
            $table->text('historia')->nullable()->default(null);
            $table->text('link_img')->nullable()->default(null);
            $table->text('link_video')->nullable()->default(null);
            $table->text('mensaje')->nullable()->default(null);
            $table->boolean('pasaporte')->nullable()->default(null);
            $table->string('documento')->nullable()->default(null);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('estado')->nullable()->default(1);
            $table->boolean('habilitado')->nullable()->default(null);
            $table->integer('manager_id')->nullable()->default(null);
            $table->rememberToken();
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
        Schema::dropIfExists('jugadors');
    }
}
