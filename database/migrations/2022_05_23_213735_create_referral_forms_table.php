<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferralFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referral_forms', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('team_management_id');
            $table->string('date');
            $table->string('client_name');
            $table->string('date_of_birth');
            $table->string('cell_phone');
            $table->string('cell_phone_other');
            $table->string('referral_email');
            $table->text('address');
            $table->string('city_state_zip');
            $table->string('insurance_image')->nullable();
            $table->string('diagnoses');
            $table->text('reason_for_refferal');
            $table->string('refferral_source');
            $table->string('phone_number');
            $table->string('fax_number');
            $table->string('email');
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('referral_forms');
    }
}
