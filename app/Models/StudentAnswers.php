<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAnswers extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_id',
        'question_name',
        'student_id',
        'answer'
    ];
    public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
