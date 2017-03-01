<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Comment;

class Post extends Model
{
    public function date(){
        return $this->created_at->toFormattedDateString();
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

}
