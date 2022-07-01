<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetails extends Model
{
    use HasFactory;
    protected $table = 'student_details';
    protected $fillable = [
        'student_id',
        'alter_phone',
        'course',
        'roll_number'
    ];

    
}
