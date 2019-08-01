<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostsController extends Controller
{
    //
 public function create()
 {
    $id = Post::max('id');
    //dd($id);
     Post::create(
    [
        'title' => 'test',
        'decsrition'=>'test decsrition'
    ]);
 }

    public function deleteLast()
    {
     Post::orderBy('created_at','desc')->first()->delete();
     //dd($id);
    }

}
