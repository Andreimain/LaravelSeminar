<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = ['course_code', 'course_desc', 'photo'];
    use HasFactory, SoftDeletes;
}
