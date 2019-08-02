<?php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class User {
    public static function get_username($user_id) {
        $user = DB::table('users')->where('id', $user_id)->first();
        return (isset($user->name) ? $user->name : 'Not Found');
    }
}