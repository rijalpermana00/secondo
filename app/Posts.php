<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Result;

class Posts extends Model{

    protected $fillable = ['title', 'content', 'start_date', 'end_date', 'link'];

    public function test($req){
    	print_r('halo');die;
    }

    public function savelightweighteditor($param){ 	
    	$posts 		= new Posts(); 
        $dom 		= new \DOMDocument();
        
        $content 	= $param['konten'];

    	$dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
        $images  = $dom->getElementsByTagName('img');

        foreach ($images as $image) {
            $src                    = $image->getAttribute('src');
            $type                   = pathinfo($src, PATHINFO_EXTENSION);
            $data                   = file_get_contents($src);
            $base64                 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            list($type, $base64)    = explode(';', $base64);
            list(, $base64)         = explode(',', $base64);
            $output                 = base64_decode($base64);
            $location               = 'images/'.substr("abcdefghijklmnopqrstuvwxyz", mt_rand(0, 25), 1).substr(md5(time()), 1).'.png';
            $tests                  = file_put_contents($location, $output);
            $image->setAttribute( 'src', '/'.$location );
        }
        
        $html = preg_replace('~<(?:!DOCTYPE|/?(?:html|body))[^>]*>\s*~i', '', $dom->saveHTML());

        $posts->title       = $param['judul'];
        $posts->content     = $html;
        $posts->create_date = $param['startdate'];
        $posts->end_date    = $param['enddate'];

		$data = $posts->save();

        return $data;
    }
}
