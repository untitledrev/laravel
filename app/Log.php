<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //
    protected $guarded = [];

    public function scopeQueuedAll($query)
    {
        return $query->where('status', 0)->get();
    }
    public function scopeQueued($query)
    {
        return $query->where('status', 0)->first();
    }
    public function scopeDone($query)
    {
        return $query->where('status', 1)->get();
    }
}
