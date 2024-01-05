<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamManagement_Location extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function related_location_therapist(){
        return $this->belongsTo(TeamManagement::class,'team_management_id')->where('status',1);
    }
}
