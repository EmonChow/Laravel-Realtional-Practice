<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentDetails;
class students extends Model
{
    use HasFactory;

     protected $table = 'students';
    protected $fillable = [
        'fullname',
        'email',
        'phone',
    ];

    public function StudentDetail(){
        return $this->hasOne(StudentDetails::class, 'student_id', 'id');
    }

}
