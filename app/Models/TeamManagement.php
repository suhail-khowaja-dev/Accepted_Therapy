<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamManagement extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function therapist_specialities()
    {
       return $this->hasMany(TeamSpeciality::class,'team_management_id');
    }
    
}
