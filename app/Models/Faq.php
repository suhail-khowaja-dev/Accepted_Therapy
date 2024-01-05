<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = ['faq_type_id ','question','answer','status'];

    public function get_type_name(){
        return $this->belongsTo(FaqType::class,'faq_type_id');
    }

}
