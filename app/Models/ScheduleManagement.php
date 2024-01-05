<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleManagement extends Model
{
    use HasFactory;

    protected $fillable = ['team_management_id','schedule_name','schedule_email','schedule_phone','schedule_message','schedule_insurance','is_active','location'];

    public function therapists(){
        return $this->belongsTo(TeamManagement::class,'team_management_id')->withDefault();
    }

    public function therapist(){
        return $this->belongsTo(TeamManagement::class,'team_management_id')->withDefault();
    }
}
