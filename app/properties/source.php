<?php

namespace App\properties;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\User;

class source extends Model
{
    //
    protected $table = 'tbl_lead_source';
    
    public static function addSource(array $data){
        $p = new source;
        $p->source = $data['source'];
        $p->created_by = Auth::id();
        $p->save();
    }
    
    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }
}
