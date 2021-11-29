<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StudentRegister extends Model
{
    protected $fillable = [
        'rollno','name','phone','email','address','gender','nrc','fname','fpro','mname','mpro','pphone','image','status'
    ];
    public function rollcall(){
    	return $this->hasMany('App\Model\RollCall', 'id');
    }
}
