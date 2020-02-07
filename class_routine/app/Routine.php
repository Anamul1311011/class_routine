<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    protected $fillable = ['subject_id', 'classtime_id', 'day_id'];

    public function classtime()
    {
      return $this->belongsTo('App\Classtime');
    }
    public function subject()
    {
      return $this->belongsTo('App\Subject');
    }
    public function day()
    {
      return $this->belongsTo('App\Day');
    }
}
