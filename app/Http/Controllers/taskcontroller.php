<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
use  App\Models\User;
class taskcontroller extends Controller
{
    //

    public function __construct(){

        $this->middleware('logcheck',['except'  => []]);

     }


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

        $data['password'] = bcrypt( $data['password']);
        $op=  User::create($data);
        if($op){

            return back();
        }else{
            echo 'error try again';
        }
    }



    public function add()
    {


        $tasks = task::get();
        return view('addtask', ['tasks' => $tasks]);


    }

function deletetask($id){
    $op =task::where('id',$id)->delete();
    if ($op){
        return back();
    }else{
        echo 'error in delete';
    }
}

function edittask($id){

    // $tasks = task::where('id',$id)>get();
    $tasks = task::find($id);

    return view('edittask',['tasks'=>$tasks]);


}

public function updatetask(Request $request)
{
   $data =  $this->validate(request(),[
    'title'     => 'required|min:3',
    'content' => 'required|min:10',
    ]
    );



$op=  task::where('id',$request->id)->update($data);

if($op){

    return redirect(url('/add'));
}else{
    echo 'error try again';
}

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
        return back();
    }else{
        echo 'error try again';
    }

   }



}
