<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacantes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->foreignId('experiencia_id')->constrained()->onDelete('cascade');
            $table->foreignId('ubicacion_id')->constrained()->onDelete('cascade');
            $table->foreignId('salario_id')->constrained()->onDelete('cascade');
            $table->text('descripcion');
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
        Schema::dropIfExists('vacantes');
    }
}
