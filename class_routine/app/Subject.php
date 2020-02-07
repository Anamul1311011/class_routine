<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['title', 'code'];

    public function routine()
    {
      return $this->hasMany('App\Routine');
    }
}
