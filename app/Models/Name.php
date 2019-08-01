<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    //
    //protected $fillable = ['first_name','second_name'];
    protected $fillable = ['first_name','second_name'];

    public function scopeNamesOnLetterP($query)
    {
        return $query->where('first_name','like','П%')
            ->orWhere('second_name','like','П%');
    }

    public function scopeNamesOnLetter($query,$letter)
    {
        return $query->where('first_name','like',$letter.'%')
            ->orWhere('second_name','like',$letter.'%');
    }

    public function  getFioAttribute()
    {
        return $this->second_name . ' ' . mb_substr($this->first_name,0,1) . '.';
    }
}
