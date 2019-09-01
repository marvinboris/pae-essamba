<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NavItem extends Model
{
    //
    protected $fillable = [
        'title_en', 'title_fr'
    ];

    public function pages()
    {
        return $this->hasMany('App\Page');
    }
}
