<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelehealthFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telehealth_forms', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('team_member_id')->nullable();

            $table->text('client_understanding_checkboxes')->nullable();
            $table->string('your_name')->nullable();
            $table->string('signature')->nullable();

            $table->string('is_active')->default(1);
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
        Schema::dropIfExists('telehealth_forms');
    }
}
