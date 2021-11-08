<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\properties\source;
use App\properties\areas;
use App\properties\property;

class propertyController extends Controller
{
    //
    public function index(){
        $data = array(
            'properties' => property::orderBy('created_at', 'desc')->get()
        );
        return view('properties.all')->with($data);
    }

    public function add(){
        $data = array(
            'source' => source::orderBy('source')->get(),
            'areas' => areas::orderBy('area')->get(),
        );
        return view('properties.new')->with($data);
    }

    public function addSubmit(Request $request){
        $data = $request->all();
        property::addProperty($data);
        
        return redirect()->back()->with('success', 'New Property Added');
    }
}
