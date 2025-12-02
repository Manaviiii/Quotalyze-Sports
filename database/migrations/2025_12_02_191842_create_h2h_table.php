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
        Schema::create('h2h', function (Blueprint $table) {
            $table->id();
            $table->foreignId('match_id')->constrained('matches')->onDelete('cascade');
            $table->string('team_a');
            $table->string('team_b');
            $table->date('date');
            $table->integer('score_a')->nullable();
            $table->integer('score_b')->nullable();
            $table->string('competition')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('h2h');
    }

};
