<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classtime extends Model
{
    protected $fillable = ['time_duration'];

    public function routine()
    {
      return $this->hasMany('App\Routine');
    }
}
