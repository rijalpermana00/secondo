<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Helpers\Result;
use JavaScript;

class PostsController extends Controller
{

    public function __construct(){

       $this->middleware('auth');
    }

    public function index(){
        
        return view('posts.managepost');
    }

    public function create(){

        $array = [
            'data' => null,
        ];
         
        JavaScript::put($array);

        return view('posts.editor');
    }

    public function store(Request $request){
        
        $result = new Result();
        $posts  = new Posts;

        try{
            
            $param              = $request->all();

            $param['creator']   = auth()->user()->name;

            $data               = $posts->savelightweighteditor($param);

        } catch (\Exception $exc) {

            return $result->failed($exc->getmessage());
        }

        return response()->json($result->success($data));
    }

    public function postTest() {
        
        $response = array(
            'status' => 'success',
        );
        return Response::json( $response  );
    }

    public function get(Request $request, $id){

        $result = new Result();

        try{

            $data       = Posts::findorfail($id);

            $otherdata  = Posts::where('id','!=', $id)->get();

        } catch (\Exception $exc){

            return $result->failed($exc->getmessage());
        }
        $array = [
            'maindata'  => $data,
            'otherdata' => $otherdata
        ];
         
        JavaScript::put($array);

        return view('posts.contentblog');
    }

    public function show(Request $request){

        $result = new Result();
    
        try{
            if($request->id){
                $data = Posts::findorfail($request->id);
            }else{
                $data = Posts::all();
            }

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

            $param  = $request->all();
            $data   = $posts->savelightweighteditor($param);

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
            $data               = $posts->delete();

        } catch (\Exception $exc) {

            return $result->failed($exc->getmessage());
        }

        return response()->json($result->success($data));
    }

    public function testget(){

        $result = new Result();
        $posts  = new Posts;

        $test = $posts->test('test');
    }

    public function testpost(Request $request){

        $result = new Result();
        $posts  = new Posts;
        print_r('expression');die;
        $test = $posts->test($variable);
    }

}

