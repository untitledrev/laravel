<?php

namespace App\Http\Controllers;

use App\Log;
use App\Task;
use Illuminate\Http\Request;
use App\Photo;
use App\Type;
use App\Plase;
use App\Http\Requests\PostRequestPlase;
use Illuminate\Support\Facades\Storage;

class dz_5_laravel extends Controller
{
    //

    public function places()
    {
        $plases = Plase::get();

        foreach ($plases as $plase)
        {
            $type_one = Type::where('id',$plase->type_id)->value('name');
           $plase->name_type = $type_one;
        }

        return view('plase', compact('plases'),compact('type_one'));

    }

    public function create(Request $request)
    {
        $types = Type::get();

        return view('form_plase', compact('types'));

    }
    public function place($id)
    {
        $place = Plase::where('id',$id)->first();

       // dd($place);
        $photos = Photo::where('id_plase',$id)->orderBy('created_at','desc')->get();
        $type_one = Type::where('id',$place->type_id)->value('name');
        $place->name_type = $type_one;

        return view('place', compact('place') , compact('photos'));

    }

    public function photo($id)
    {
        $photo = '';
        return view('photo_form', compact('photo'), compact('id'));
    }
    public function photo_and(Request $request, $id)
    {
        $place = Plase::where('id',$id)->first();
        $file = $request->file('file')->store('image','public');
        $url =  Storage::disk('public')->url($file);
    // dd($url);
   // echo "<img src='".$url."'>";
        $photo = new Photo;
        $photo->id_plase = $id;
        $photo->file = $url;
        $photo->type_id = $place->type_id;
        $photo->save();
        return redirect('/places/'. $id.'/');
    }


    public function create_and(PostRequestPlase $request)
    {

        $plase = new Plase;
        $plase->name = $request->name;
        $plase->type_id = $request->type;
        $plase->save();
        return redirect('/places');
    }
}
