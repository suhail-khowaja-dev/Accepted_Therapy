<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntakeMedicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intake_medication_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('intake_form_id');
            $table->foreign('intake_form_id')->references('id')->on('intake_forms')->onDelete('cascade');
            $table->string('primary_care_provider')->nullable();
            $table->string('medication_phone')->nullable();
            $table->string('medication_radio')->nullable()->length(15);
            $table->string('m_name_1')->nullable();
            $table->string('m_dosage_1')->nullable();
            $table->string('m_frequency_1')->nullable();
            $table->string('m_name_2')->nullable();
            $table->string('m_dosage_2')->nullable();
            $table->string('m_frequency_2')->nullable();
            $table->string('m_name_3')->nullable();
            $table->string('m_dosage_3')->nullable();
            $table->string('m_frequency_3')->nullable();
            $table->string('m_name_4')->nullable();
            $table->string('m_dosage_4')->nullable();
            $table->string('m_frequency_4')->nullable();
            $table->string('m_name_5')->nullable();
            $table->string('m_dosage_5')->nullable();
            $table->string('m_frequency_5')->nullable();
            $table->string('madication_tried')->nullable();
            $table->string('madication_condition')->nullable();
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
        Schema::dropIfExists('intake_medication_forms');
    }
}
