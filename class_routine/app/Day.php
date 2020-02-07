<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $fillable =['title'];

    public function routine()
    {
      return $this->hasMany('App\Routine');
    }
}
