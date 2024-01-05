<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntakeForm extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Intake_insurance(){
        return $this->hasOne(IntakeInsuranceForm::class,'intake_form_id');
    }

    public function intake_medication(){
        return $this->hasOne(IntakeMedicationForm::class,'intake_form_id');
    }

    public function intake_drug(){
        return $this->hasOne(IntakeDrugForm::class,'intake_form_id');
    }

    public function intake_children(){
        return $this->hasOne(IntakeChildrenForm::class,'intake_form_id');
    }

    public function intake_siblings(){
        return $this->hasMany(IntakeSiblingsForm::class,'intake_form_id');
    }
    
    
}
