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
            $result = new Result();
            $posts  = new Posts;

            $posts->title       = $request->judul;
            $posts->content     = $request->konten;
            $posts->create_date = $request->startdate;
            $posts->end_date    = $request->enddate;
            $posts->link        = $request->link;

            $data = $posts->save();

        } catch (\Exception $exc) {
            
            return $result->failed($exc->getmessage());
        }

        return response()->json($result->success($result));
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

