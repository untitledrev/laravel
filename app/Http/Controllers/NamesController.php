<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;

class NamesController extends Controller
{
    //
    public function index()
    {
//$names = Name::all();
//dd($names);
        $names = Name::namesOnLetter('И')->get();
        dd($names);
    }

    public function show($id)
    {
        $names = Name::findOrFail($id);
        dd($names->fio);
    }

    public function create()
    {
        //$names = Name::findOrFail($id);
        //dd($names);
        $post = Name::create(['first_name' => 'Григорий', 'second_name' => 'Пупкин']);
    }
}
