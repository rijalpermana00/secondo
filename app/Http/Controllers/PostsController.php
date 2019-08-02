<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Helpers\Result;

class PostsController extends Controller
{

    public function index(){
        return view('managepost');
    }

    public function create(){

    }

    public function store(Request $request){
        
        try{
            $test = 'hai';
            $posts      = new Posts();
            $example    = $posts->test($test);

        } catch (\Exception $exc) {

            return $exc->getMessage();
        }

        return response()->json($result);
    }

    public function show($id){
    }

    public function edit($id){
    }

    public function update(Request $request, $id){
    }

    public function destroy($id){
    }

    public function createpost(){
    	
        return view('createpost');
    }	
}

