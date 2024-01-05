<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamSpecialitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_specialities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_management_id');
            $table->foreign('team_management_id')->references('id')->on('team_management')->onDelete('cascade');;
            $table->string('speciality_title');
            $table->string('description');
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
        Schema::dropIfExists('team_specialities');
    }
}
