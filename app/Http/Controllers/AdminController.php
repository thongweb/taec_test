<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Students;
use App\Models\Questions;
use App\Models\StudentAnswers;
use App\Models\ExamDetails;
class AdminController extends Controller
{
    public function showResult(Students $rememberToken)
    {
        $examDetails = ExamDetails::where('student_id', $rememberToken->id)->first();
        return view('admin.index', ['student' => $rememberToken, 'examDetail' => $examDetails]);
    }
    public function showDatabase()
    {
        $students = Students::all();
        return view('admin.showDatabase', ['students' => $students]);
    }
}
