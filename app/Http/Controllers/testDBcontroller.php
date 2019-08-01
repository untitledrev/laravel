<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class testDBcontroller extends Controller
{
    //
    public function index()
    {
        /*
        $users = DB::table('users')
            ->where('name', 'Pet')
            ->value('id');
        */
        $users = DB::table('users')
            ->pluck('name','email');
        dump($users);
    }
}
