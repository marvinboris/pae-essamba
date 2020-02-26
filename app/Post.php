<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title_en', 'title_fr', 'content_en', 'content_fr', 'user_id', 'post_category_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function post_category()
    {
        return $this->belongsTo('App\PostCategory');
    }
}
