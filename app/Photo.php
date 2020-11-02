<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Photo extends Model
{
    use Resizable;

    public function type ()
    {
        return $this->belongsTo('App\PhotoType', 'photo_type_id');
    }

}
