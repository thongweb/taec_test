<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Answers;

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
                'email' => 'required|unique:users,email',
                'phone' => 'required',
            ],[
                'unique' => "Email is already used"
            ]);
            $us = new Users($request->all());
            $us->time = date('Y-m-d h:m:s ', time());
            $us->result = 0;
            $us->save();
            return redirect(url('/test'));
        }

    public function showTest(Users $user)
    {
        return view('test.index', ['user' => $user]);
    }
    public function doTest(Request $request) {
    }

}
