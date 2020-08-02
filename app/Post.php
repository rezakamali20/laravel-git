<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    public $directory = '../public/images/';
    protected $dates=['deleted_at'];
//    protected $table="posts";
//    protected $primaryKey="id";
//    protected $fillable=[
//        '',''
//    ];
protected $fillable=['title','description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photos()
    {
        return $this->morphMany(Photo::class,'imageable');

    }
    public function tags()
    {
        return $this->morphToMany(tag::class,'taggable');
    }

    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }

    public function setTitleAttribute($value)
    {
         $this->attributes['title'] = strtoupper($value);
    }

    public function getPathAttribute($value)
    {
        if($value){
        return $this->directory.$value;
        }
    }
}