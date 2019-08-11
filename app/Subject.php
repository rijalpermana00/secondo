<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function submitsubject($param){

    	$subject 	= new Subject();

    	if($param['id']){
    		$subject 			= Subject::find($param['id']);
    		$subject->name 		= $param['name'];
    		$subject->code 		= $param['code']; 
    		$subject->grade 	= $param['grade']; 
    		$subject->credit 	= $param['credit'];

    	}else{

    		$subject->name 		= $param['name'];
    		$subject->code 		= $param['code']; 
    		$subject->grade 	= $param['grade']; 
    		$subject->credit 	= $param['credit'];
    	}

    	$data = $subject->save();

        return $data;
    }

    public function deletesubject($id){
            
            $subject    = new Subject();

            $subject    = Subject::findorfail($id);
            $data     = $subject->delete();

            return $data;
    }
}
