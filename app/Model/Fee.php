<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $fillable = [
        'title', 'price'
    ];
}
