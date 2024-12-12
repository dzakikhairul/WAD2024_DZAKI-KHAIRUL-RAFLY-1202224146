<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    /**
     * The attributes 
     * @var array
     */
    protected $fillable = [
        'lecturer_code',
        'lecturer_name',
        'nip',
        'email',
        'telephone_number',
    ];

    /**
     * Define a one-to-many relationship with Student.
     */
    public function students()
    {
        return $this->hasMany(Student::class, 'lecturer_id');
    }
}

