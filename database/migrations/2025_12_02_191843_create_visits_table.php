<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();

            // IP del visitante
            $table->string('ip', 45);

            // Página visitada
            $table->string('pagina');

            // Navegador o bot
            $table->string('user_agent')->nullable();

            // Nº de veces que esta IP ha entrado
            $table->integer('visitas')->default(1);

            // Primera visita registrada
            $table->timestamp('primera_visita')->nullable();

            // Última visita
            $table->timestamp('ultima_visita')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('visits');
    }

};
