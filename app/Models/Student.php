<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes 
     * @var array
     */
    protected $fillable = [
        'nim',
        'student_name',
        'email',
        'major',
        'lecturer_id', // Foreign key
    ];

    /**
     * Define one-to-many relationship with Lecturer.
     */
    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class, 'lecturer_id');
    }
}
