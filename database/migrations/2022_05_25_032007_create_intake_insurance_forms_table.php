<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntakeInsuranceFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intake_insurance_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('intake_form_id');
            $table->foreign('intake_form_id')->references('id')->on('intake_forms')->onDelete('cascade');
            
            $table->string('medical_insurance_radio_1')->nullable()->length(15);
            $table->string('responsible_party_1')->nullable();
            $table->string('insurance_birthday')->nullable();
            $table->string('relationship_with_client_1')->nullable();
            $table->text('address_if_different_1')->nullable();
            $table->string('insurance_provider_1')->nullable();
            $table->string('insurance_name_1')->nullable();
            $table->string('policy_number_1')->nullable();
            $table->string('policy_group_number_1')->nullable();
            $table->string('co_pay_1')->nullable();
            $table->string('client_relationship_to_insurance_1')->nullable();

            $table->string('medical_insurance_radio_2')->nullable()->length(15);
            $table->string('insurance_provider_2')->nullable();
            $table->string('insurance_name_2')->nullable();
            $table->string('policy_number_2')->nullable();
            $table->string('policy_group_number_2')->nullable();
            $table->string('co_pay_2')->nullable();
            $table->string('relationship_with_client_2')->nullable();
            $table->string('insurance_copy')->nullable();
            $table->text('insurance_checkboxes_details')->nullable();
            $table->string('insurance_signature')->nullable();
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
        Schema::dropIfExists('intake_insurance_forms');
    }
}
