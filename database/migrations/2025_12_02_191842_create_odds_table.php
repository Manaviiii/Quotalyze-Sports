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
        Schema::create('odds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('match_id')->constrained('matches')->onDelete('cascade');
            $table->foreignId('bookmaker_id')->constrained('bookmakers')->onDelete('cascade');
            $table->string('market'); // Ej: 1X2, over/under...
            $table->string('outcome'); // Ej: home, draw, away
            $table->decimal('odd_value', 8, 3);
            $table->timestamp('fetched_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('odds');
    }

};
