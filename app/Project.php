<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'user_id', 'title_en', 'title_fr', 'content_en', 'content_fr', 'start_date'
    ];

    public function author()
    {
        return $this->belongsTo('App\User');
    }
}
