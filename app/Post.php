<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'preamble', 'body', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeArchives($query,$month,$year){
        return $query->whereRaw('MONTH(created_at)=?',$month)->whereRaw('YEAR(created_at)=?',$year);
    }
}
