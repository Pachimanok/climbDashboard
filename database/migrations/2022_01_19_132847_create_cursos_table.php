<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('tipo');
            $table->string('imagen')->default('avatar_curso.png');
            $table->text('descripcion_corta');
            $table->string('q_clases');
            $table->string('horario');
            $table->date('inicioCursado');
            $table->longText('descripcion');
            $table->string('link_programa')->nullable();
            $table->decimal('precio',5,2)->nullable();
            $table->string('aplica_descuento')->nullable();
            $table->decimal('descuento',5,2)->nullable();
            $table->string('activo')->default('si');
            $table->unsignedBigInteger('profesor_id');
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
        Schema::dropIfExists('cursos');
    }
}
