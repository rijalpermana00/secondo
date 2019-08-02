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
        $posts  = new Posts();
        try{
            $posts->title       = $request->judul;
            $posts->content     = $request->konten;
            $posts->create_date = $request->startdate;
            $posts->end_date    = $request->enddate;
            $posts->link        = null;

            $posts->save();

            $result =   array(
                            'code'      => 0,
                            'message'   => 'Success',
                            'data'      => 'Data is successfully added'
                        );

        } catch (\Exception $exc) {
            print_r(0, 1, $exc->getMessage() .'-'.$exc->getTraceAsString());die;
            return $e->getMessage();
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

