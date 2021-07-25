<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Questions;
use App\Models\StudentAnswers;
use App\Models\ExamDetails;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:students,email',
            'phone' => 'required',
        ],[
            'unique' => "Email is already used"
        ]);
        $us = new Students($request->all());
        $us->remember_token = Str::random(8).Carbon::now()->timestamp;
        $us->save();
        return redirect(url('/test/'.$us->remember_token));
    }

    public function showTest(Students $rememberToken)
    {
        return view('test.index', ['student' => $rememberToken]);
    }

    public function doTest(Request $request, Students $rememberToken) 
    {
        $student = ExamDetails::where('student_id', $rememberToken->id)->first();
        if(!$student)
        {
            $totalPointRead = 0;
            $totalPointListen = 0;
            $fields = $request->except('_token');
            foreach ($fields as $key => $val) {
                $studentAnswer = new StudentAnswers();
                $studentAnswer->question_name = $key;
                $studentAnswer->answer = $val;
                $studentAnswer->exam_id = 1;
                $studentAnswer->student_id = $rememberToken->id;
                $studentAnswer->save();
                $question = Questions::where('exam_id', 1)->where('question_name', $key)->first();
                if ($val !== NULL && isset($question['correct_answer'])) { 
                    if (strpos($key, 'read') !== false) {
                        similar_text(strtoupper($val),strtoupper($question['correct_answer']),$percent);
                        if (strtoupper($question['correct_answer']) == strtoupper($val) || $percent >= 90) {
                            $totalPointRead++;
                        }
                    }
                    else if (strpos($key, 'listen') !== false) {
                        similar_text(strtoupper($val),strtoupper($question['correct_answer']),$percent);
                        if (strtoupper($question['correct_answer']) == strtoupper($val) || $percent >= 90) {
                            $totalPointListen++;
                        }
                    }
                }
            }
            $examDetails = new ExamDetails();
            $examDetails->exam_id = 1;
            $examDetails->student_id = $studentAnswer->student_id;
            $examDetails->date_of_exam = Carbon::now();
            $examDetails->score_read = $totalPointRead;
            $examDetails->score_listen = $totalPointListen;
            $examDetails->exam_time = $request->exam_time;
            $examDetails->writing = $request->writing;
            $examDetails->save();
        }

        return redirect(url('/result/'.$rememberToken->remember_token));
    }

    public function showResult(Students $rememberToken)
    {
        $examDetails = ExamDetails::where('student_id', $rememberToken->id)->first();
        return view('result.index', ['student' => $rememberToken, 'examDetail' => $examDetails]);
    }
}
