<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformConsentFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inform_consent_forms', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('team_member_id')->nullable();

            $table->string('benefit_signature')->nullable();
            $table->string('telehealth_signature')->nullable();
            $table->string('professional_fees_signature')->nullable();
            $table->string('session_fees_signature')->nullable();
            $table->string('book_fees_signature')->nullable();
            $table->string('professional_record_signature')->nullable();
            $table->string('confidentiality_signature')->nullable();
            $table->string('parents_minor_signature')->nullable();
            $table->string('rights_signature')->nullable();
            $table->string('printed_name')->nullable();
            $table->string('witness')->nullable();
            $table->string('inform_consent_date_time')->nullable();
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
        Schema::dropIfExists('inform_consent_forms');
    }
}
