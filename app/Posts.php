<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model{

    protected $fillable = ['title', 'content', 'start_date', 'end_date', 'link'];
    
}
