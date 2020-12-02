<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $guarded = [
        'id'
    ];
    //trainer hasMany courses 
    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
