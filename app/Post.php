<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title_en', 'title_fr', 'content_en', 'content_fr', 'user_id'
    ];

    public function author()
    {
        return $this->belongsTo('App\User');
    }
}
