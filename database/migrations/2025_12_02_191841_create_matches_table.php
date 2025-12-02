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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('api_match_id')->index();
            $table->string('league')->nullable();
            $table->string('home_team');
            $table->string('away_team');
            $table->dateTime('match_date');
            $table->string('status')->default('scheduled');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('matches');
    }

};
