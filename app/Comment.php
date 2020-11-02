<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Comment extends Model
{
    protected $fillable = ['review_id', 'fio', 'avatar', 'text', 'type'];
    
    public function user ()
    {
        return $this->belongsTo('App\User');
    }
    public function getAvatar ()
    {
        return strpos($this->avatar, 'http') !== false ? $this->avatar : Storage::url($this->avatar);
    }
}
