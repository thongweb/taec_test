<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_id',
        'student_id',
        'date_of_exam',
        'score_read',
        'score_listen',
        'exam_time',
        'writing'
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
