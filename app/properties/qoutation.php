<?php

namespace App\properties;

use Illuminate\Database\Eloquent\Model;
use App\settings\phone;
use App\properties\property;
use App\User;

class qoutation extends Model
{
    //
    protected $table = 'tbl_properties_qoutation';

    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }
    public function property(){
        return $this->belongsTo(property::class, 'property_id');
    }

    public function phone(){
        return $this->belongsTo(phone::class, 'phone_id');
    }
}
