<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_management', function (Blueprint $table) {
            $table->id();
            $table->string('profile_image');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('slug');
            // $table->string('work_title');
            // $table->string('shortcut_title');
            $table->tinyInteger('location');
            $table->text('description');
            $table->text('bio');
            $table->text('education');
            $table->string('speciality', 350);
            $table->string('quote');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('team_management');
    }
}
