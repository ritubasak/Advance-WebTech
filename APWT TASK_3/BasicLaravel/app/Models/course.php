<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $primaryKey = 'code';

    // public function teacher(){
    //     return $this->belongsTo(Teacher::class, 'teacherid','id');
    // }
    //using eloquent
    public function assignedTeacher(){
        return Teacher::where('id', $this->teacherid)->first();
    }
}
