<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $fillable = ["name"];
    public $timestamps = false;//برای اینکه تایمم استمپ نندازه


    public function posts()
    {
        return $this->morphedByMany('App\Post','taggable');
    }

    public function videos()
    {
        return $this->morphedByMany('App\video','taggable');
    }
}
