<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'title_en', 'title_fr', 'content_en', 'content_fr', 'type', 'date'
    ];
}
