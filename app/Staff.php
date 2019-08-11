<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Staff extends Model
{
    public function submitactor($param){

    	$staff = new Staff();

    	if($param['id']){
    		$staff 				= Staff::find($param['id']);
    		$staff->name		= $param['nama'];
    		$staff->birthplace	= $param['birthplace']; 
    		$staff->birthdate	= $param['birthdate']; 
    		$staff->nip			= $param['staff_nip'];
    		$staff->nik			= $param['nik'];
    		$staff->phone		= $param['phone'];
    		$staff->photo		= $param['location'];
    		$staff->gender		= $param['gender'];
    		$staff->address		= $param['address'];
    		$staff->type		= $param['type'];
    		$staff->startdate	= $param['startdate'];
    		$staff->enddate		= $param['enddate'];

    	}else{

	        $birthyear 	= date("y", strtotime($param['birthdate']));
    		$yearnow	= date('y');
    		$monthnow 	= date('m');
    		$daynow 	= date('d');
    		$staffid  	= DB::table('staff')->max('id');
    		if($staffid == NULL){
    			$seq = '00';
    		}else{
    			$seq = '0'.($staffid + 1);
    		}


    		$staff->id 			= $param['id'];
    		$staff->name		= $param['nama'];
    		$staff->birthplace	= $param['birthplace']; 
    		$staff->birthdate	= $param['birthdate']; 
    		$staff->nip			= $birthyear.$yearnow.$monthnow.$seq;
    		$staff->nik			= $param['nik'];
    		$staff->phone		= $param['phone'];
    		$staff->photo		= $param['location'];
    		$staff->gender		= $param['gender'];
    		$staff->address		= $param['address'];
    		$staff->type		= $param['type'];
    		$staff->startdate	= $param['startdate'];
    		$staff->enddate		= $param['enddate'];
    	}

    	$data = $staff->save();

        return $data;
    }
}
