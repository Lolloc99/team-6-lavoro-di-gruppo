<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function athletes() 
    {
        return $this->belongsToMany('App\Athlete');
    }

    // protected $fillable = [
    //     'name',
    //     'discipline',
    //     'genre'
    // ];
}
