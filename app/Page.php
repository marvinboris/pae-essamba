<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $fillable = [
        'title_en', 'title_fr', 'content_fr', 'content_en', 'top_menu', 'url', 'banner', 'route_name'
    ];

    public function nav_item()
    {
        return $this->belongsTo('App\NavItem');
    }
}
