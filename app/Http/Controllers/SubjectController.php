<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Helpers\Result;
use JavaScript;

class SubjectController extends Controller
{
    public function index(){
    	
    	return view('index');
    }

    public function show(){

    	return view('listsubject');
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

    	return view('formsubject');

    }

    public function store(Request $request){

    }

    public function edit(Request $request){

    }

    public function delete(Request $request){

    }
}
