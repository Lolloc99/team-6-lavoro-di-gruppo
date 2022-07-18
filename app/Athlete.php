<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{

    protected $table =  'athletes';

    public function nationality()
    {
        return $this->belongsTo('App\Nationality');
    }

    public function categories() 
    {
        return $this->belongsToMany('App\Category');
    }
    // protected $fillable = [
    //     'name',
    //     'genre'
    // ];
}
