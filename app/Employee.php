<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
    public function Citys()
    {
        return $this->belongsToMany('App\City', 'citys_employees');
    }
}
