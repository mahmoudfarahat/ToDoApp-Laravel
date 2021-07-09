<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
use  App\Models\User;
class taskcontroller extends Controller
{
    //


    public function signup()
    {
        return view('signup');
    }
    public function submitsignup(Request $request)
    {
        $data= $this->validate(request(),[
            'name'     => 'required|min:3',
            'password' => 'required|min:6',
            'email'    => 'required|email'
        ]);
        $op=  User::create($data);
        if($op){

            return back();
        }else{
            echo 'error try again';
        }
    }

    public function add()
    {
        return view('addtask');
    }
    public function addtask(Request $request)
    {
       $data =  $this->validate(request(),[
        'title'     => 'required|min:3',
        'content' => 'required|min:10',
        ]
        );

    $op=  task::create($data);

    if($op){
        return view('tasks');
    }else{
        echo 'error try again';
    }


    }

    public function showtasks(){
        return view('tasks');
    }
}
