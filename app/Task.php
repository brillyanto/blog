<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public function scopeComplete($query){
        return $query->where('completed', 1)->get();
    }


}
