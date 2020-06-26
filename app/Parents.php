<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $fillable = ['pid', 'pname', 'pemail', 'pphone', 'sid'];
}
