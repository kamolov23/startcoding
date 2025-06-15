<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','surname','date_of_birth','class','phone','email','address','teacher'];
}
