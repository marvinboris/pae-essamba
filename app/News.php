<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable = [
        'user_id', 'title_en', 'title_fr', 'content_en', 'content_fr'
    ];
}
