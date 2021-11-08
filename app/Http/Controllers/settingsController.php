<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\settings\phone;
use App\properties\areas;
use App\properties\source;

class settingsController extends Controller
{
    //Phones
        public function phone(){
            $data = array(
                'phones' => phone::latest()->get()
            );

            return view('settings.phone')->with($data);
        }

        public function phoneInsert(Request $request){
            $data = $request->all();
            phone::addPhone($data);

            return redirect()->back()->with('success', 'New Phone Number Added.');
        }

    //Areas
        public function areas(){
            $data = array(
                'areas' => areas::latest()->get()
            );

            return view('settings.areas')->with($data);
        }

        public function areaInsert(Request $request){
            $data = $request->all();
            areas::addArea($data);

            return redirect()->back()->with('success', 'New Area Added.');
        }


    //Source
        public function source(){
            $data = array(
                'source' => source::latest()->get()
            );

            return view('settings.source')->with($data);
        }

        public function sourceInsert(Request $request){
            $data = $request->all();
            source::addSource($data);

            return redirect()->back()->with('success', 'New Source Added.');
        }
}
