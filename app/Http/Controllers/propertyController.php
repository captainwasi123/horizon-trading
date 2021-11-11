<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\properties\source;
use App\properties\areas;
use App\properties\property;
use App\properties\qoutation;
use App\settings\phone;
use Auth;

class propertyController extends Controller
{
    //Properties
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

        public function propertyDelete($id){
            $id = base64_decode($id);
            property::destroy($id);
            qoutation::where('property_id', $id)->delete();
            return redirect()->back()->with('success', 'Successfully Property Deleted.');
        }


    //Qoutations
        public function qoutation($id){
            $id = base64_decode($id);
            $data = array(
                'data' => property::find($id),
                'phones' => phone::all()
            );

            return view('properties.qoute')->with($data);
        }

        public function qoutationAdd(Request $request){
            $data = $request->all();
            $pid = base64_decode($data['pid']);
            $check = qoutation::where(['property_id' => $pid, 'phone_id' => $data['phone']])->first();
            if(empty($check->id)){
                $q = new qoutation;
                $q->property_id = $pid;
                $q->phone_id = $data['phone'];
                $q->qoutation = $data['qoutation'];
                $q->created_by = Auth::id();
                $q->save();

                return redirect()->back()->with('success', 'Successfully Qoutation Added.');
            }else{
                return redirect()->back()->with('warning', 'Qoutation on this phone is already posted.');
            }
        }

        public function qoutationDelete($id){
            $id = base64_decode($id);
            qoutation::destroy($id);

            return redirect()->back()->with('success', 'Successfully Qoutation Deleted.');
        }
}
