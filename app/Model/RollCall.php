<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RollCall extends Model
{
    protected $fillable = [
        'student_registers_id', 'date','status','remark'
    ];
    public function studentRegister(){
    	return $this->belongsTo('App\Model\StudentRegister','student_registers_id');
    }
}
