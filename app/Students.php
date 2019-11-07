<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'student_crud';
    protected $fillable = ['firstname', 'lastname'];
}
