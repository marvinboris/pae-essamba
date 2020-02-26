<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    //
    protected $fillable = [
        'name_en', 'name_fr'
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
