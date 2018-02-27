<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('project_id')->nullable();
            //$table->foreign('project_id')->references('id')->on('projects');
            $table->string('forename')->nullable();
            $table->string('surname')->nullable();
            $table->string('nickname')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('date_of_death')->nullable();
            $table->string('year_of_description')->nullable();
            $table->string('occupation')->nullable();
            $table->string('character_importance')->nullable();
            $table->string('height')->nullable();
            $table->string('hair_colour')->nullable();
            $table->string('eye_colour')->nullable();
            $table->string('weight')->nullable();
            $table->string('hair_style')->nullable();
            $table->string('misc_features')->nullable();
            $table->string('clothing')->nullable();
            $table->string('normal_clothing')->nullable();
            $table->string('voice')->nullable();
            $table->string('other_styles')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
