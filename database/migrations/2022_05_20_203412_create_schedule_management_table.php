<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_management', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();;
            $table->string('team_management_id')->nullable();;
            $table->string('schedule_form_title')->nullable();
            $table->text('schedule_form_description')->nullable();
            $table->string('schedule_name');
            $table->string('schedule_email');
            $table->string('schedule_phone');
            $table->text('schedule_message');
            $table->string('schedule_insurance');
            $table->boolean('is_active')->default(0);
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
        Schema::dropIfExists('schedule_management');
    }
}
