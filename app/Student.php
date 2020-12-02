<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [
        'id'
    ];

    // students belongsToMany courses
    public function courses()
    {
        return $this->belongsToMany('App\Course')->withPivot('status');
    }
}
