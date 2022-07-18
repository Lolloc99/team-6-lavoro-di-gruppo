<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    protected $table = 'nationalities';

    public function athletes()
    {
        return $this->hasMany('App\Athlete');
    }

    // protected $fillable = [
    //     'name',
    //     'acronym'
    // ];
}
