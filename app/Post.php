<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Comment;
use App\User;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'user_id'
    ];

    public function date(){
        return $this->created_at->toFormattedDateString();
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
