<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taskcontroller extends Controller
{
    //
    public function add()
    {
        return view('addtask');
    }

    public function signup()
    {
        return view('signup');
    }
    public function submitsignup(Request $request)
    {
        // dd($request->all());

        // echo ' fdffdfdf';


        $this->validate(request(),[
            'name'     => 'required|min:3',
            'password' => 'required|min:6',
            'email'    => 'required|email'
        ]);


    }

    public function taskData()
    {
        return view('tasks', ['title' => 'C# homework', 'content' => 'do all tasks']);
    }


}
