<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;
use App\Helpers\Result;
use JavaScript;

class FilesController extends Controller
{
    public function index(){

		return view('upload');
    }

    public function store(Request $request){

    	$result = new Result();
        $files  = new Files;

        try{
        	$file 		= $request->file('file');
        	$nama_file 	= $file->getClientOriginalName();
        	$path_file  = '/images/'.$nama_file;
        	
        	$file->move(public_path('/assets/images'), $nama_file);

        	$files->name       	= $nama_file;
            $files->path        = $path_file;
            $files->type     	= $request->type;
            $files->create_date = date('Y-m-d');

            $data = $files->save();

        } catch (\Exception $exc) {

            return $result->failed($exc->getmessage());
        }

        return response()->json($result->success($data));
    }
}
