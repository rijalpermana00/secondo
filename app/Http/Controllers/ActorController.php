<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Staff;
use App\Student;
use App\File;
use JavaScript;
use App\Helpers\Result;

class ActorController extends Controller
{
    public function index(){
    	return view('actor.liststaff');
    }

    public function show(){

    	return view('actor.listactor');
    }

    public function formstaff(){

    	$array = [
            'data' => null,
        ];
         
        JavaScript::put($array);

    	return view('actor.formstaff');
    }

    public function get(Request $request){

    	$result 	= new Result();
        $staff 		= new Staff();
        $student	= new Student();
    
        try{

        	if($request->type == 'staff'){
	            if($request->id){
	                $data = Staff::findorfail($request->id);
	            }else{
	                $data = Staff::all();
	            };
	        }else{
	        	if($request->id){
	                $data = Student::findorfail($request->id);
	            }else{
	                $data = Student::all();
	            }
        	}

        } catch (\Exception $exc){

            return $result->failed($exc->getmessage());
        }

        return response()->json($result->success($data));
    }

    public function create(Request $request){

    	return view('actor.formactor');

    }

    public function store(Request $request){

        $result     = new Result();
        $actor 		= new Actor();
        $staff 		= new Staff();
        $student	= new Student();
        $file		= new File();

        try{
            
            $param  = $request->all();
        	$avatar['name'] 		= $_FILES['formstaff']['name'];
        	$avatar['extension'] 	= $request->formstaff->getClientOriginalExtension();
        	$avatar['tmp_name'] 	= $_FILES['formstaff']['tmp_name'];
        	$avatar['type'] 		= 'avatar';

        	$param['location'] 	= $file->storefile($avatar);

            if($request->jenis == 'staff'){
            	$data   = $staff->submitactor($param);
            }else{
            	$data   = $student->submitactor($param);
            }

        } catch (\Exception $exc) {

            return $result->failed($exc->getmessage());
        }

        return response()->json($result->success($data));

    }

    public function editstaff(Request $request, $id){

        $result = new Result();
        // print_r($id);die;
        try{

            $data = Staff::findorfail($id);

        } catch (\Exception $exc){

            return $result->failed($exc->getmessage());
        }
        $array = [
            'data' => $data,
            'edit' => '1',
        ];
         
        JavaScript::put($array);

        return view('actor.formstaff');
    }

    public function destroy(Request $request){
        
        $result     = new Result();
        $actor 		= new Actor();
        $staff 		= new Staff();
        $student	= new Student();

        try{
	        
	        $id     = $request->id;

        	if($request->type == 'staff'){
	            $data   = $staff->delete($id);
        	}else{
        		$data 	= $student->delete($id);
        	}

        } catch (\Exception $exc) {

            return $result->failed($exc->getmessage());
        }

        return response()->json($result->success($data));
    }
}
