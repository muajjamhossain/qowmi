<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function teacherContact(){
      return $this->hasMany('App\Models\TeachersContact');
    }

    public function course(){
      return $this->belongsTo('App\Models\Course','course_id','id');
    }
}
