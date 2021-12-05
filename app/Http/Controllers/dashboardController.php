<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\properties\source;
use App\properties\areas;
use App\properties\property;
use App\properties\qoutation;
use App\settings\phone;

class dashboardController extends Controller
{
    //
    public function index(){

        $data = array(
            'phones' => phone::all(),
            'areas' => areas::all(),
        );

        return view('dashboard')->with($data);
    }

    public function filter(Request $request){

        $req = $request->all();

        $data = array(
            'qoutations' => qoutation::when(!empty($req['phone']), function($q) use ($req){
                                            return $q->where('phone_id', $req['phone']);
                                        })
                                        ->when(!empty($req['areas']), function($q) use ($req){
                                            return $q->whereHas('property', function($qq) use ($req){
                                                return $qq->where('area_id', $req['areas']);
                                            });
                                        })
                                        ->when(!empty($req['precent']), function($q) use ($req){
                                            return $q->whereHas('property', function($qq) use ($req){
                                                return $qq->where('precent', 'LIKE', '%'.$req['precent'].'%');
                                            });
                                        })
                                        ->when(!empty($req['plot_size']), function($q) use ($req){
                                            return $q->whereHas('property', function($qq) use ($req){
                                                return $qq->where('plot_size', 'LIKE', '%'.$req['plot_size'].'%');
                                            });
                                        })
                                        ->when(!empty($req['plot_no']), function($q) use ($req){
                                            return $q->whereHas('property', function($qq) use ($req){
                                                return $qq->where('plot_no', 'LIKE', '%'.$req['plot_no'].'%');
                                            });
                                        })
                                        ->get()
        );

        return view('response.qoute')->with($data);

    }
}
