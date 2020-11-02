<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CatalogType extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function photos ()
    {
        return $this->hasMany('App\Photo');
    }
    
}
