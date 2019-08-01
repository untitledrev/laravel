<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded = [];
    public  function setDecsritionAttribute($value)
    {
        $id = self::max('id') + 1;
        $this->attributes['decsrition'] = $value .' '. $id ;
    }
}
