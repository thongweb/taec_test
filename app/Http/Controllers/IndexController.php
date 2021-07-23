<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Questions;
use App\Models\StudentAnswers;
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
        $question = Questions::where('exam_id', 1)->get();
        $fields = $request->except('_token');
        foreach ($fields as $key => $val) {
            $studentAnswer = new StudentAnswers();
            $studentAnswer->question_name = $key;
            $studentAnswer->answer = $val;
            $studentAnswer->exam_id = 1;
            $studentAnswer->student_id = $rememberToken->id;
            $studentAnswer->save();
        }

        return redirect(url('/result/'.$rememberToken->remember_token));
    }

    public function showResult(Students $rememberToken)
    {
        return view('result.index', ['student' => $rememberToken]);
    }
}
