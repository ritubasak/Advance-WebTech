<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'phone';

    //using hasmany verb one to many
    // public function courses(){
    //     return $this->hasMany(Course::class,'teacherid');
    // }

    //using eloquent
    public function assignedCourses(){
        return Course::where('studentid', $this->id)->get();
    }

}
