<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'course_id', 'registered_on'];

    public function author()
    {
        return $this->hasManyThrough(
            '\App\Models\Student',
            '\App\Models\Course',
            'student_id',
            'id',
            'id',
            'course_id'
        );
    }
}
