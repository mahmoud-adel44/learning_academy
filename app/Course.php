<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [
        'id'
    ];
    //courses hasoNE Category
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    //courses belongsTo trainer
    public function trainer()
    {
        return $this->belongsTo('App\Trainer');
    }

    // courses belongsToMany students
    public function students()
    {
        return $this->belongsToMany('App\Student');
    }
}
