<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlotnotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plotnotes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('project_id');
            $table->string('note_title')->nullable();
            $table->string('note_type')->nullable();
            $table->text('content')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plotnotes');
    }
}
