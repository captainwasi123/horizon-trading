<?php

namespace App\properties;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\properties\source;
use App\properties\areas;
use App\properties\qoutation;
use App\user;

class property extends Model
{
    //
    protected $table = 'tbl_properties_info';

    public static function addProperty(array $data){
        $p = new property;
        $p->owner_name = $data['name'];
        $p->owner_demand = $data['demand'];
        $p->phone = $data['phone'];
        $p->other_phone = $data['other_phone'];
        $p->status = $data['status'];
        $p->source_id = $data['source'];
        $p->source_link = $data['source_link'];
        $p->area_id = $data['area_id'];
        $p->plot_no = $data['plot_no'];
        $p->plot_size = $data['plot_size'];
        $p->precent = $data['precent'];
        $p->address = $data['address'];
        $p->remarks = $data['remarks'];
        $p->created_by = Auth::id();
        $p->save();
    }

    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }

    public function source(){
        return $this->belongsTo(source::class, 'source_id');
    }

    public function area(){
        return $this->belongsTo(areas::class, 'area_id');
    }

    public function qoutation(){
        return $this->hasMany(qoutation::class, 'property_id', 'id');
    }
}
