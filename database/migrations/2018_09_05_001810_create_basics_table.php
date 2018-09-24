<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_centro');
            $table->longText('descripcion_centro');
            $table->string('direccion');
            $table->string('distrito');
            $table->string('telefono');
            $table->string('correo_centro');
            $table->longText('nosotros');
            $table->timestamps();

            /*
              $a = new App\Basic();
              $a->nombre_centro = "";
              $a->descripcion_centro= "";
              $a->direccion="";
              $a->distrito="";
              $a->telefono="";
              $a->correo_centro="";
              $a->nosotros="";
              $a->save();
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basics');
    }
}
