<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    public function manufacturers ()
    {
        return $this->hasMany('App\Manufacturer');
    }
}
