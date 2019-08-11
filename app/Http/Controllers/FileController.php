<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index(){

    	return view('file');
    }

    public function show(){

        $array = [
            'data' => null,
        ];
         
        JavaScript::put($array);

    	return view('subject.listsubject');
    }

    public function get(Request $request){

    	$result = new Result();
    
        try{
            if($request->id){
                $data = Subject::findorfail($request->id);
            }else{
                $data = Subject::all();
            }

        } catch (\Exception $exc){

            return $result->failed($exc->getmessage());
        }

        return response()->json($result->success($data));
    }

    public function create(Request $request){

    	return view('subject.formsubject');

    }

    public function store(Request $request){

        $result     = new Result();
        $subject    = new Subject;

        try{
            
            $param  = $request->all();
            $data   = $subject->submitsubject($param);

        } catch (\Exception $exc) {

            return $result->failed($exc->getmessage());
        }

        return response()->json($result->success($data));

    }

    public function edit(Request $request){

    }

    public function destroy(Request $request){
        $result     = new Result();
        $subject    = new Subject;
        try{
            $id        = $request->id;
            $subject   = Subject::findorfail($id);
            $data      = $subject->delete();

        } catch (\Exception $exc) {

            return $result->failed($exc->getmessage());
        }

        return response()->json($result->success($data));
    }
}
