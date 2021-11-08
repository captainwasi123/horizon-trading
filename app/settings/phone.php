<?php

namespace App\settings;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\User;

class phone extends Model
{
    //
    protected $table = 'tbl_phones';

    public static function addPhone(array $data){
        $p = new phone;
        $p->label = $data['label'];
        $p->phone = $data['phone'];
        $p->created_by = Auth::id();
        $p->save();
    }
    
    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }
}
