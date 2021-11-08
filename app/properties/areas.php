<?php

namespace App\properties;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\User;

class areas extends Model
{
    //
    protected $table = 'tbl_areas';
    
    public static function addArea(array $data){
        $p = new areas;
        $p->area = $data['area'];
        $p->created_by = Auth::id();
        $p->save();
    }
    
    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }
}
