<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Result;

class Subject extends Model
{
    public function submitsubject($param){

    	$subject 	= new Subject();
    	$result 	= new Result();

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

    	$result = $subject->save();
    }
}
