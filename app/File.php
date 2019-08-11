<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    public function storefile($param){

		$t          = microtime(true);  
        $micro      = sprintf("%06d", ($t - floor($t)) * 1000000);
        $name       = date('Gis' . $micro);
        $d          = date('Ymd-His-' . $micro, $t);
        $dateY      = date('y');
        $dateM      = date('m');
        $dateD      = date('d');

        if (!is_dir(getcwd().'/images/'.$param['type'].'/'.$dateY.'/'.$dateM.'/'.$dateD)) {
            mkdir(getcwd().'/images/'.$param['type'].'/'.$dateY.'/'.$dateM.'/'.$dateD, 0777,true);
        }

        $location 	= '/images/'.$param['type'].'/'.$dateY.'/'.$dateM.'/'.$dateD.'/'.$name.'.'.$param['extension'];
        $upload     = file_put_contents(getcwd().$location, file_get_contents($param['tmp_name']));

        return $location;
    }
}
