<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = [
        'rollno','name','phone','gmail','address','gender','nrc','fname','fpro','mname','mpro','pphone','image','status'
    ];
}
