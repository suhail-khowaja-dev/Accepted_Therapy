<?php

namespace App\Models\Admin;

use App\Models\TeamManagement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralForm extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function therapist(){
        return $this->belongsTo(TeamManagement::class,'team_management_id');
    }
}
