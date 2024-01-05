<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntakeDrugFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intake_drug_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('intake_form_id');
            $table->foreign('intake_form_id')->references('id')->on('intake_forms')->onDelete('cascade');

            $table->string('checkbox_1')->nullable();
            $table->string('age_use_1')->nullable();
            $table->string('length_use_1')->nullable();
            $table->string('frequency_use_1')->nullable();
            $table->string('amount_use_1')->nullable();
            $table->string('date_last_use_1')->nullable();

            $table->string('checkbox_2')->nullable();
            $table->string('age_use_2')->nullable();
            $table->string('length_use_2')->nullable();
            $table->string('frequency_use_2')->nullable();
            $table->string('amount_use_2')->nullable();
            $table->string('date_last_use_2')->nullable();

            $table->string('checkbox_3')->nullable();
            $table->string('age_use_3')->nullable();
            $table->string('length_use_3')->nullable();
            $table->string('frequency_use_3')->nullable();
            $table->string('amount_use_3')->nullable();
            $table->string('date_last_use_3')->nullable();

            $table->string('checkbox_4')->nullable();
            $table->string('age_use_4')->nullable();
            $table->string('length_use_4')->nullable();
            $table->string('frequency_use_4')->nullable();
            $table->string('amount_use_4')->nullable();
            $table->string('date_last_use_4')->nullable();

            $table->string('checkbox_5')->nullable();
            $table->string('age_use_5')->nullable();
            $table->string('length_use_5')->nullable();
            $table->string('frequency_use_5')->nullable();
            $table->string('amount_use_5')->nullable();
            $table->string('date_last_use_5')->nullable();

            $table->string('checkbox_6')->nullable();
            $table->string('age_use_6')->nullable();
            $table->string('length_use_6')->nullable();
            $table->string('frequency_use_6')->nullable();
            $table->string('amount_use_6')->nullable();
            $table->string('date_last_use_6')->nullable();

            $table->string('checkbox_7')->nullable();
            $table->string('age_use_7')->nullable();
            $table->string('length_use_7')->nullable();
            $table->string('frequency_use_7')->nullable();
            $table->string('amount_use_7')->nullable();
            $table->string('date_last_use_7')->nullable();

            $table->string('checkbox_8')->nullable();
            $table->string('age_use_8')->nullable();
            $table->string('length_use_8')->nullable();
            $table->string('frequency_use_8')->nullable();
            $table->string('amount_use_8')->nullable();
            $table->string('date_last_use_8')->nullable();

            $table->string('checkbox_9')->nullable();
            $table->string('age_use_9')->nullable();
            $table->string('length_use_9')->nullable();
            $table->string('frequency_use_9')->nullable();
            $table->string('amount_use_9')->nullable();
            $table->string('date_last_use_9')->nullable();

            $table->string('checkbox_10')->nullable();
            $table->string('age_use_10')->nullable();
            $table->string('length_use_10')->nullable();
            $table->string('frequency_use_10')->nullable();
            $table->string('amount_use_10')->nullable();
            $table->string('date_last_use_10')->nullable();

            $table->string('drug_misused_or_abuse_radio')->nullable()->length(15);
            $table->string('drug_misused_info')->nullable();
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
        Schema::dropIfExists('intake_drug_forms');
    }
}
