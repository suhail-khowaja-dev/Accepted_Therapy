<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntakeFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intake_forms', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('team_member_id')->nullable();
            $table->string('client_first_name');
            $table->string('client_last_name');
            $table->string('client_full_name');
            $table->string('client_preferred_therapist_name');
            $table->string('client_phone');
            $table->string('client_email');
            $table->text('client_address');
            $table->string('client_street')->nullable();
            $table->string('client_county');
            $table->string('client_city');
            $table->string('client_state');
            $table->string('client_zip');
            // Emergency Contact
            $table->string('emergency_name');
            $table->string('emergency_phone');
            $table->string('emergency_relationship');
            // Place of Service
            $table->string('place_of_service')->nullable();
            $table->string('pos_police_departement_name')->nullable();
            $table->string('pos_police_phone')->nullable();
            $table->text('pos_police_address')->nullable();
            // Demographic Information
            $table->string('di_date_of_birth');
            $table->string('di_legal_gender');
            $table->string('di_legal_gender_identity');
            $table->string('di_pronounce');
            $table->string('di_sexual_orientation');
            $table->string('di_race');
            $table->string('di_marital_status');
            // Insurance next table
            // Presenting Problem
            $table->text('pp_complaint_or_issue')->nullable();
            $table->string('pp_previously_suffered')->nullable();
            $table->text('pp_diagnosed')->nullable();
            // Current Symptoms
            $table->string('current_symtoms')->nullable();
            $table->string('cs_other_1')->nullable();
            $table->string('cs_other_2')->nullable();
            $table->string('cs_therapy_past')->nullable();
            // Medical History next table
            // Mental Health History
            $table->string('csi_radio');
            $table->string('mh_current_suicidal_ideations')->nullable();
            $table->string('csp_radio')->nullable()->length(15);
            $table->string('mh_current_suicidal_plan')->nullable();
            $table->string('cshb_radio')->nullable()->length(15);
            $table->string('mh_current_self_harming_behaviors')->nullable();
            $table->string('hsoi_radio')->nullable()->length(15);
            $table->string('mh_history_of_suicidal_ideations')->nullable();
            $table->string('psa_radio')->nullable()->length(15);
            $table->string('mh_previous_suicide_attempts')->nullable();
            $table->string('hosh_radio')->nullable()->length(15);
            $table->string('mh_history_of_self_harming')->nullable();
            // Substance Use
            $table->string('su_nicotine_caffeine')->nullable();
            $table->string('su_caffeinated_beverages_per_day')->nullable();
            // Alcohol
            $table->string('alcohole_consume')->nullable();
            $table->string('alcohole_drinks')->nullable();
            $table->string('who_told_you')->nullable();
            // Illicit Drugs next table
            // Addition Information
            $table->string('ai_occupation')->nullable();
            $table->string('ai_employer')->nullable();
            $table->string('ai_what_you_do')->nullable();
            // Marriage
            $table->string('m_married_radio')->nullable()->length(15);
            $table->string('m_married')->nullable();
            $table->string('m_divorced_radio')->nullable()->length(15);
            $table->string('m_divorced')->nullable();
            $table->string('m_rwyp_radio')->nullable()->length(15);
            $table->string('divorce_or_death_date')->nullable();
            $table->integer('how_many')->nullable();
            $table->text('how_many_question')->nullable();
            $table->string('divorce_death_1', 120)->nullable();
            $table->string('divorce_death_2', 120)->nullable();
            $table->string('divorce_death_3', 120)->nullable();
            $table->string('divorce_death_4', 120)->nullable();
            $table->string('divorce_death_5', 120)->nullable();
            $table->string('m_relationship_with_your_partner')->nullable();
            // Children next table
            // Religion/Spirituality
            $table->string('religion');
            $table->text('spirituality')->nullable();
            // Family History
            $table->string('adopted_radio')->length(15);
            $table->string('adopted_age')->nullable(); 
            $table->string('biological_parents')->nullable(); 
            $table->string('relationship_of_parents')->nullable(); 
            $table->string('parents_remarry')->nullable(); 
            $table->string('is_mother_living_radio')->length(15); 
            $table->string('mother_date_of_death')->nullable(); 
            $table->string('relationship_with_mother')->nullable(); 
            $table->string('father_living_radio')->nullable()->length(15); 
            $table->string('father_date_of_death')->nullable(); 
            $table->string('relationship_with_father')->nullable(); 
            // Siblings next table
            $table->string('birth_order')->nullable(); 
            // Medical Conditions
            $table->text('medical_conditions')->nullable(); 
            $table->text('mental_illness')->nullable(); 
            $table->text('anything_else_know_therapist')->nullable(); 
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
        Schema::dropIfExists('intake_forms');
    }
}
