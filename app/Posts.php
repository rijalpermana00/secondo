<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model{

    protected $fillable = ['title', 'content', 'start_date', 'end_date', 'link'];

    public function test($request){
        print_r($request);die;
    	
    	$posts->title       = $request->judul;
        $posts->content     = $request->konten;
        $posts->create_date = $request->startdate;
        $posts->end_date    = $request->enddate;
        $posts->link        = null;

    }
    
}
