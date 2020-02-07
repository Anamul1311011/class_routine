<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'roll','reg_id','department_id','semester_id','phone_no','email','password','image'];

    public function department()
    {
      return $this->belongsTo('App\Department');
    }
    public function semester()
    {
      return $this->belongsTo('App\Semester');
    }
}
