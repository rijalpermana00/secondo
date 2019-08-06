<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Helpers\Result;
use JavaScript;

class PostsController extends Controller
{
    public function index(){
        return view('managepost');
    }

    public function create(){

        $array = [
            'data' => null,
        ];
         
        JavaScript::put($array);

        return view('editor');
    }

    public function store(Request $request){
        
        $result = new Result();
        $posts  = new Posts;

        try{

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

    public function show(){

        $result = new Result();
    
        try{

            $data = Posts::all();

        } catch (\Exception $exc){

            return $result->failed($exc->getmessage());
        }

        return response()->json($result->success($data));
    }

    public function edit(Request $request, $id){

        $result = new Result();
        // print_r($id);die;
        try{

            $data = Posts::findorfail($id);

        } catch (\Exception $exc){

            return $result->failed($exc->getmessage());
        }
        $array = [
            'data' => $data,
            'edit' => '1',
        ];
         
        JavaScript::put($array);

        return view('editor');
    }

    public function update(Request $request){
        
        $result = new Result();
        $posts  = new Posts;
        try{
            $id                 = $request->id;
            $posts              = Posts::find($id);
            $posts->title       = $request->judul;
            $posts->content     = $request->konten;
            $posts->create_date = $request->startdate;
            $posts->end_date    = $request->enddate;
            $posts->link        = $request->link;

            $data = $posts->save();

        } catch (\Exception $exc) {

            return $result->failed($exc->getmessage());
        }

        return response()->json($result->success($data));
    }

    public function destroy(Request $request){
        $result = new Result();
        $posts  = new Posts;
        try{
            $id                 = $request->id;
            $posts              = Posts::findorfail($id);

            $data = $posts->delete();

        } catch (\Exception $exc) {

            return $result->failed($exc->getmessage());
        }

        return response()->json($result->success($data));
    }

}

