<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class tag extends Model
{
    protected $fillable=[
        'name','slug'
    ];
    public function posts()
    {
    return $this->belongsTo('App\Post');
    }
    
}
