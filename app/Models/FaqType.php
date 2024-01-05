<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqType extends Model
{
    protected $fillable = ['section_type','status'];
    use HasFactory;

    public function get_type_name(){
        return $this->hasMany(Faq::class,'faq_type_id');
    }
}
