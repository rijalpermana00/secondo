<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Result;

class Posts extends Model{

    protected $fillable = ['title', 'content', 'link', 'creator'];

    public function test($req){
    	print_r('halo');die;
    }

    public function savelightweighteditor($param){ 	
    	$posts 		= new Posts(); 
        $dom 		= new \DOMDocument();
        
        $content 	= $param['konten'];
        $locationarr= array();

    	$dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
        $images  = $dom->getElementsByTagName('img');

        foreach ($images as $image) {

            $t          = microtime(true);  
            $micro      = sprintf("%06d", ($t - floor($t)) * 1000000);
            $name       = date('Gis' . $micro);
            $d          = date('Ymd-His-' . $micro, $t);
            $dateY      = date('y');
            $dateM      = date('m');
            $dateD      = date('d');

            if (!is_dir(getcwd().'/images/'.$dateY.'/'.$dateM.'/'.$dateD)) {
                mkdir(getcwd().'/images/'.$dateY.'/'.$dateM.'/'.$dateD, 0777,true);
            }

            $src    = $image->getAttribute('src');
            if(!file_exists(getcwd().$src)){
                $type = pathinfo($src, PATHINFO_EXTENSION);
                if(!($type == 'JPG' || $type == 'png' || $type == 'PNG' || $type == 'JPEG' || $type == 'jpg' || $type == 'jpeg')){
                    $data                   = file_get_contents($src);
                    $base64                 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                    list($type, $base64)    = explode(';', $base64);
                    list(, $base64)         = explode(',', $base64);
                    $output                 = base64_decode($base64);

                    $location               = '/images/'.$dateY.'/'.$dateM.'/'.$dateD.'/'.$name.'.png';
                    $upload                 = file_put_contents(getcwd().$location, $output);

                    array_push($locationarr, $location);
                    $image->setAttribute( 'src', $location );
                }else{
                    array_push($locationarr, $src);
                    $image->setAttribute('src', $src);
                }
            }else{
                array_push($locationarr, $src);
                $image->setAttribute('src', $src);
            }

        }

        $html = preg_replace('~<(?:!DOCTYPE|/?(?:html|body))[^>]*>\s*~i', '', $dom->saveHTML());

        if($param['id']){
            $posts             = Posts::find($param['id']);
            $posts->title       = $param['judul'];
            $posts->content     = $html;
            $posts->link        = $locationarr ? $locationarr[0] : null;
            $posts->creator     = $posts->creator ? $posts->creator : null;

        }else{
            $posts->title       = $param['judul'];
            $posts->content     = $html;
            $posts->link        = $locationarr ? $locationarr[0] : null;
            $posts->creator     = $param['creator'] ? $param['creator'] : null;
		    
        };
            $data = $posts->save();


        return $data;
    }
}
