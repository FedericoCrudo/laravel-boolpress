<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tag;
use App\User;
class Post extends Model
{
    protected $fillable=[
        'title','slug','content','user_id'
    ];
    public function user()
    {
    return $this->belongsTo('App\User');
    }

     public function tags()
    {
    return $this->belongsTo('App\tag');
    }
}
