<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlidingScaleForm extends Model
{
    use HasFactory;

    public function get_scale_household(){
        return $this->hasMany(SlidingScaleHouseholdMemberForm::class,'sliding_scale_id');
    }
}
