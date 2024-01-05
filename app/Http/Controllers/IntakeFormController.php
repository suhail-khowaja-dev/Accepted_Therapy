<?php

namespace App\Http\Controllers;

use App\Models\IntakeForm;
use Illuminate\Http\Request;
use App\Models\IntakeDrugForm;
use App\Models\IntakeChildrenForm;
use App\Models\IntakeSiblingsForm;
use App\Models\IntakeInsuranceForm;
use App\Models\IntakeMedicationForm;
use Illuminate\Support\Facades\Mail;
use League\OAuth2\Server\RequestEvent;

class IntakeFormController extends Controller
{
    public function index(){
        return view('resources_forms.intake_form');
    }

    public function intake_form_store(Request $request){
        // return $request->all();
        $request->validate([
            'adopted' => 'required',

            // Demographic Information
            'dg_date_of_birth' => 'required',
            'gender_identity' => 'required',
            'legal_gender' => 'required',
            'dg_date_of_birth' => 'required',


            // starting
            'marital_status' => 'required',
            'race' => 'required',
            'sexual_orientation' => 'required',
            'pronounce' => 'required',
            'gender_identity' => 'required',
            'legal_gender' => 'required',
            'dg_date_of_birth' => 'required',
            'place_of_service' => 'required',
            'relationship' => 'required',
            'emergency_person_phone' => 'required',
            'emergency_person_name' => 'required',
            'zip_code' => 'required',
            'state' => 'required',
            'city' => 'required',
            'religion' => 'required',
            'county' => 'required',
            // 'street' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'preferred_therapist_name' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
        ]);
        // return $request->all();
        $intake_form = new IntakeForm();
        $intake_form->client_first_name = $request->first_name;
        $intake_form->client_last_name = $request->last_name;
        $intake_form->client_full_name = $request->first_name.' '.$request->last_name;
        $intake_form->client_preferred_therapist_name = $request->preferred_therapist_name;
        $intake_form->client_phone = $request->phone;
        $intake_form->client_email = $request->email;
        $intake_form->client_address = $request->address;
        $intake_form->client_street = $request->street;
        $intake_form->client_county = $request->county;
        $intake_form->client_city = $request->city;
        $intake_form->client_state = $request->state;
        $intake_form->client_zip = $request->zip_code;
        $intake_form->emergency_name = $request->emergency_person_name;
        $intake_form->emergency_phone = $request->emergency_person_phone;
        $intake_form->emergency_relationship = $request->relationship;
        $intake_form->place_of_service = $request->place_of_service;
        // police
        $intake_form->pos_police_departement_name = $request->police_departement;
        $intake_form->pos_police_phone = $request->police_phone_number;
        $intake_form->pos_police_address = $request->police_address;

        $intake_form->di_date_of_birth = $request->dg_date_of_birth;
        $intake_form->di_legal_gender = $request->legal_gender;
        $intake_form->di_legal_gender_identity = $request->gender_identity;
        $intake_form->di_pronounce = $request->pronounce;
        $intake_form->di_sexual_orientation = $request->sexual_orientation;
        $intake_form->di_race = $request->race;
        $intake_form->di_marital_status = $request->marital_status;

        // Presenting Problem
        $intake_form->pp_complaint_or_issue = $request->complaint_or_issue;
        $intake_form->pp_previously_suffered = $request->radio_stacked;
        $intake_form->pp_diagnosed = $request->diagnosed;


        // Current Symptoms
        $intake_form->current_symtoms = $request->current_symtoms != '' ? json_encode($request->current_symtoms) : '';
        $intake_form->cs_other_1 = $request->other_symptom_1;
        $intake_form->cs_other_2 = $request->other_symptom_two;

        // Medical History
        $intake_form->csi_radio = $request->suic_radio;
        $intake_form->mh_current_suicidal_ideations = $request->current_suicidal_ideations;
        $intake_form->csp_radio = $request->scp_radio;
        $intake_form->mh_current_suicidal_plan = $request->current_suicide_plan;
        $intake_form->csi_radio = $request->cshb_radio;
        $intake_form->mh_current_self_harming_behaviors = $request->current_self_harming_behaviors;
        $intake_form->hsoi_radio = $request->hosi_radio;
        $intake_form->mh_history_of_suicidal_ideations  = $request->history_of_suicidal_ideations;
        $intake_form->psa_radio = $request->psa_radio;
        $intake_form->mh_previous_suicide_attempts  = $request->previous_suicide_attempts;
        $intake_form->hosh_radio = $request->hos_radio;
        $intake_form->mh_history_of_self_harming  = $request->history_of_self_harming;

        // Use Subtance
        $intake_form->su_nicotine_caffeine = $request->su_nicotine_caffeine;
        $intake_form->su_caffeinated_beverages_per_day = $request->su_caffeinated_beverages_per_day;

        // Alcohol
        $intake_form->alcohole_consume = $request->alcohole_consume;
        $intake_form->alcohole_drinks = $request->alcohole_consume != 'none' ? $request->drinks : '';
        $intake_form->who_told_you = $request->who_told_you;

        // Addition Information
        $intake_form->ai_occupation = $request->occupation;
        $intake_form->ai_employer = $request->employer;
        $intake_form->ai_what_you_do = $request->enjoy;

        // Marriage
        $intake_form->m_married_radio = $request->married_radio;
        $intake_form->m_married = $request->married_radio_date;
        $intake_form->m_divorced_radio = $request->divorced_radio;
        $intake_form->m_divorced = $request->divorced_radio_date;
        $intake_form->m_rwyp_radio = $request->rwyp_radio;
        $intake_form->how_many = $request->how_many;
        $intake_form->how_many_question = json_encode($request->how_many_question);
        $intake_form->divorce_death_1 = $request->divorce_death_1;
        $intake_form->divorce_death_2 = $request->divorce_death_2;
        $intake_form->divorce_death_3 = $request->divorce_death_3;
        $intake_form->divorce_death_4 = $request->divorce_death_4;
        $intake_form->divorce_death_5 = $request->divorce_death_5;
        $intake_form->divorce_or_death_date = json_encode($request->divorce_or_death_date);
        $intake_form->m_relationship_with_your_partner = $request->relationship_with_your_partner;

        // Religion
        $intake_form->religion = $request->religion;
        $intake_form->spirituality = $request->spirituality;

        // Family History
        $intake_form->adopted_radio = $request->adopted;
        $intake_form->adopted_age = $request->adopte_age;
        $intake_form->biological_parents = $request->biological_parents;
        $intake_form->relationship_of_parents = $request->biological_parent;
        $intake_form->parents_remarry = $request->parents_remarry;
        $intake_form->is_mother_living_radio = $request->is_mother_living_radio;
        $intake_form->mother_date_of_death = $request->mother_date_of_death;
        $intake_form->relationship_with_mother = $request->relation_with_mother;
        $intake_form->father_living_radio = $request->father_living_radio;
        $intake_form->father_date_of_death = $request->father_date_of_death;
        $intake_form->relationship_with_father = $request->relation_with_father;
        $intake_form->birth_order = $request->birth_order;

        // Medical Conditions
        $intake_form->medical_conditions = $request->medical_conditions;
        $intake_form->mental_illness = $request->mental_illness;
        $intake_form->anything_else_know_therapist = $request->anything_else_know_therapist;
        $intake_form->save();

        // Insurance Information
        if($request->insurance_copy != ''){
            $imageName = time().'.'.$request->insurance_copy->extension();
        }else{
            $imageName = null;
        }
        // return $intake_form->id;
        $intake_insurance = new IntakeInsuranceForm();
        $intake_insurance->intake_form_id = $intake_form->id;
        $intake_insurance->medical_insurance_radio_1 = $request->medical_insurance_radio_1;
        $intake_insurance->responsible_party_1 = $request->responsible_party_1;
        // $intake_insurance->insurance_birthday = $request->insurance_birthday;
        $intake_insurance->relationship_with_client_1 = $request->relationship_with_client_1;
        $intake_insurance->address_if_different_1 = $request->address_if_different_1;
        $intake_insurance->insurance_provider_1 = $request->insurance_provider_1;
        // $intake_insurance->insurance_name_1 = $request->insurance_name_1;
        $intake_insurance->policy_number_1 = $request->policy_number_1;
        $intake_insurance->policy_group_number_1 = $request->policy_group_number_1;
        $intake_insurance->co_pay_1 = $request->co_pay_1;
        $intake_insurance->client_relationship_to_insurance_1 = $request->client_relationship_to_insurance_1;
        $intake_insurance->medical_insurance_radio_2 = $request->medical_insurance_radio_2;
        $intake_insurance->insurance_provider_2 = $request->insurance_provider_2;
        $intake_insurance->insurance_name_2 = $request->insurance_name_2;
        $intake_insurance->policy_number_2 = $request->policy_number_2;
        $intake_insurance->policy_group_number_2 = $request->policy_group_number_2;
        $intake_insurance->co_pay_2 = $request->co_pay_2;
        $intake_insurance->relationship_with_client_2 = $request->relationship_with_client_2;
        $intake_insurance->insurance_copy = $imageName;
        $intake_insurance->insurance_checkboxes_details = $request->insurance_checkboxes_details != '' ? json_encode($request->insurance_checkboxes_details) : '';
        $intake_insurance->insurance_signature = $request->insurance_signature;
        $intake_insurance->save();

        if(isset($imageName)){
            $request->insurance_copy->move('uploads/intake_form/', $imageName);
        }




        $intake_medication = new IntakeMedicationForm();
        $intake_medication->intake_form_id = $intake_form->id;
        $intake_medication->primary_care_provider = $request->primary_care_provider;
        $intake_medication->medication_phone = $request->medication_phone;
        $intake_medication->medication_radio = $request->medication_radio;
        $intake_medication->m_name_1 = $request->m_name_1;
        $intake_medication->m_dosage_1 = $request->m_dosage_1;
        $intake_medication->m_frequency_1= $request->m_frequency_1;
        $intake_medication->m_name_2 = $request->m_name_2;
        $intake_medication->m_dosage_2 = $request->m_dosage_2;
        $intake_medication->m_frequency_2= $request->m_frequency_2;
        $intake_medication->m_name_3 = $request->m_name_3;
        $intake_medication->m_dosage_3 = $request->m_dosage_3;
        $intake_medication->m_frequency_3= $request->m_frequency_3;
        $intake_medication->m_name_4 = $request->m_name_4;
        $intake_medication->m_dosage_4 = $request->m_dosage_4;
        $intake_medication->m_frequency_4= $request->m_frequency_4;
        $intake_medication->m_name_5 = $request->m_name_5;
        $intake_medication->m_dosage_5 = $request->m_dosage_5;
        $intake_medication->m_frequency_5= $request->m_frequency_5;
        $intake_medication->madication_tried = $request->madication_tried;
        $intake_medication->madication_condition = $request->madication_condition;
        $intake_medication->save();


        // Intake Drugs Misused
        $intake_drugs = new IntakeDrugForm();
        $intake_drugs->intake_form_id = $intake_form->id;
        $intake_drugs->checkbox_1 = $request->checkbox_1;
        $intake_drugs->age_use_1 = $request->age_use_1;
        $intake_drugs->length_use_1 = $request->length_use_1;
        $intake_drugs->frequency_use_1 = $request->frequency_use_1;
        $intake_drugs->amount_use_1 = $request->amount_use_1;
        $intake_drugs->date_last_use_1 = $request->date_last_use_1;

        $intake_drugs->checkbox_2 = $request->checkbox_2;
        $intake_drugs->age_use_2 = $request->age_use_2;
        $intake_drugs->length_use_2 = $request->length_use_2;
        $intake_drugs->frequency_use_2 = $request->frequency_use_2;
        $intake_drugs->amount_use_2 = $request->amount_use_2;
        $intake_drugs->date_last_use_2 = $request->date_last_use_2;

        $intake_drugs->checkbox_3 = $request->checkbox_3;
        $intake_drugs->age_use_3 = $request->age_use_3;
        $intake_drugs->length_use_3 = $request->length_use_3;
        $intake_drugs->frequency_use_3 = $request->frequency_use_3;
        $intake_drugs->amount_use_3 = $request->amount_use_3;
        $intake_drugs->date_last_use_3 = $request->date_last_use_3;

        $intake_drugs->checkbox_4 = $request->checkbox_4;
        $intake_drugs->age_use_4 = $request->age_use_4;
        $intake_drugs->length_use_4 = $request->length_use_4;
        $intake_drugs->frequency_use_4 = $request->frequency_use_4;
        $intake_drugs->amount_use_4 = $request->amount_use_4;
        $intake_drugs->date_last_use_4 = $request->date_last_use_4;

        $intake_drugs->checkbox_5 = $request->checkbox_5;
        $intake_drugs->age_use_5 = $request->age_use_5;
        $intake_drugs->length_use_5 = $request->length_use_5;
        $intake_drugs->frequency_use_5 = $request->frequency_use_5;
        $intake_drugs->amount_use_5 = $request->amount_use_5;
        $intake_drugs->date_last_use_5 = $request->date_last_use_5;

        $intake_drugs->checkbox_6 = $request->checkbox_6;
        $intake_drugs->age_use_6 = $request->age_use_6;
        $intake_drugs->length_use_6 = $request->length_use_6;
        $intake_drugs->frequency_use_6 = $request->frequency_use_6;
        $intake_drugs->amount_use_6 = $request->amount_use_6;
        $intake_drugs->date_last_use_6 = $request->date_last_use_6;

        $intake_drugs->checkbox_7 = $request->checkbox_7;
        $intake_drugs->age_use_7 = $request->age_use_7;
        $intake_drugs->length_use_7 = $request->length_use_7;
        $intake_drugs->frequency_use_7 = $request->frequency_use_7;
        $intake_drugs->amount_use_7 = $request->amount_use_7;
        $intake_drugs->date_last_use_7 = $request->date_last_use_7;

        $intake_drugs->checkbox_8 = $request->checkbox_8;
        $intake_drugs->age_use_8 = $request->age_use_8;
        $intake_drugs->length_use_8 = $request->length_use_8;
        $intake_drugs->frequency_use_8 = $request->frequency_use_8;
        $intake_drugs->amount_use_8 = $request->amount_use_8;
        $intake_drugs->date_last_use_8 = $request->date_last_use_8;

        $intake_drugs->checkbox_9 = $request->checkbox_9;
        $intake_drugs->age_use_9 = $request->age_use_9;
        $intake_drugs->length_use_9 = $request->length_use_9;
        $intake_drugs->frequency_use_9 = $request->frequency_use_9;
        $intake_drugs->amount_use_9 = $request->amount_use_9;
        $intake_drugs->date_last_use_9 = $request->date_last_use_9;

        $intake_drugs->checkbox_10 = $request->checkbox_10;
        $intake_drugs->age_use_10 = $request->age_use_10;
        $intake_drugs->length_use_10 = $request->length_use_10;
        $intake_drugs->frequency_use_10 = $request->frequency_use_10;
        $intake_drugs->amount_use_10 = $request->amount_use_10;
        $intake_drugs->date_last_use_10 = $request->date_last_use_10;

        $intake_drugs->drug_misused_or_abuse_radio = $request->drug_misused_or_abuse_radio;
        $intake_drugs->drug_misused_info = $request->drug_misused_info;
        $intake_drugs->save();


        $intake_children = new IntakeChildrenForm();
        $intake_children->intake_form_id = $intake_form->id;

        $intake_children->no_of_children_radio = $request->no_of_children_radio;

        $intake_children->no_of_children = $request->no_of_children;
        $intake_children->name_child_1 = $request->name_child_1;
        $intake_children->age_of_child_1 = $request->age_of_child_1;
        $intake_children->relationship_with_child_1 = $request->relationship_with_child_1;

        $intake_children->name_child_2 = $request->name_child_2;
        $intake_children->age_of_child_2 = $request->age_of_child_2;
        $intake_children->relationship_with_child_2 = $request->relationship_with_child_2;

        $intake_children->name_child_3 = $request->name_child_3;
        $intake_children->age_of_child_3 = $request->age_of_child_3;
        $intake_children->relationship_with_child_3 = $request->relationship_with_child_3;

        $intake_children->name_child_4 = $request->name_child_4;
        $intake_children->age_of_child_4 = $request->age_of_child_4;
        $intake_children->relationship_with_child_4 = $request->relationship_with_child_4;

        $intake_children->name_child_5 = $request->name_child_5;
        $intake_children->age_of_child_5 = $request->age_of_child_5;
        $intake_children->relationship_with_child_5 = $request->relationship_with_child_5;
        $intake_children->save();


        if(count($request->sibling_name) > 0){

            for($i=0; $i<count($request->sibling_name); $i++){
                $intake_siblings_form = new IntakeSiblingsForm();
                $intake_siblings_form->intake_form_id = $intake_form->id;
                $intake_siblings_form->sibling_count = $request->sibling_count;
                $intake_siblings_form->sibling_name = $request->other_sibling_count == 5 ? $request->other_sibling_count : $request->sibling_name[$i];
                $intake_siblings_form->sibling_age = $request->sibling_age[$i];
                $intake_siblings_form->sibling_relation =  $request->sibling_relation[$i];
                $intake_siblings_form->save();
            }
        }


            $email = 'nikki@acceptedtherapy.com';
            // return $email;
            $data = [];
            $data['email'] =  $email;
            $data['client_name'] = $intake_form->client_first_name." ".$intake_form->client_last_name;

            $data = IntakeForm::where('id',$intake_form->id)->with('Intake_insurance','intake_medication','intake_drug','intake_children','intake_siblings')->first();
            // return $data;


            Mail::send('resource_form_email_template.intake_form', ['data'=>true,'new_data'=>$data], function ($messages) use ($email) {
                $messages->to($email);
                $messages->subject('Intake Form');
            });

        return back()->with('intake_success','Your form submitted successfully!');


     }




    //  Admin
     public function intake_form_show(){
         $intake_form_details = IntakeForm::whereIsActive(1)->get();
         return view('admin.resources_forms.intake_form.index', get_defined_vars());
        }

        public function show_intake_form_details(Request $request, $intake_id){
        //  return $intake_form_detail;
        $intake_form_detail = IntakeForm::where('id',$intake_id)->with('Intake_insurance','intake_medication','intake_drug','intake_children','intake_siblings')->first();
        return view('admin.resources_forms.intake_form.intake_form_details', get_defined_vars());
    }

    public function show_intake_form_delete(Request $request,$referral_id)
    {
        $delete = IntakeForm::find($referral_id);
        $delete->delete();

        return back()->with('intake_delete', 'Intake Form Deleted suceessfuly!');
    }


}
