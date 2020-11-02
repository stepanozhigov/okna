<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Review extends Model
{

    public function getPhotos ()
    {
        return json_decode($this->photos) ?? [];
    }
    public function getVideo ()
    {
        $object = json_decode($this->video);
        return $object[0]->download_link ?? $this->video;
    } 

    public function getAvatar ()
    {
        if (empty($this->avatar)) {
            return '/img/gui/user_default.jpg';
        }
        return strpos($this->avatar, 'http') !== false ? $this->avatar : Storage::url($this->avatar);
    }

    public function comments ()
    {
        return $this->hasMany('App\Comment');
    }

    public function attaches ()
    {
        $attachCounts = 0;
        $arPhotos = json_decode($this->photos);

        if (!empty($arPhotos))
        {
            $attachCounts += count($arPhotos);
        }

        if (!empty($this->video))
        {
            $attachCounts++;
        }
       return $attachCounts;
    }
}
