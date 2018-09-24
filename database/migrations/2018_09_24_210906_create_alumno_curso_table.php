<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_curso', function (Blueprint $table) {
            $table->increments('id');
           
            $table->integer('alumno_id')->unsigned(); // no acepta numeros negativos
            $table->integer('curso_id')->unsigned(); 

            //un post puede tener muchas etiquetas
            //y una etiqueta puede tener muchos post


            $table->timestamps();

            //relaciones de los campos
            $table->foreign('alumno_id')->references('id')->on('alumnos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')
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
        Schema::dropIfExists('alumno_curso');
    }
}
