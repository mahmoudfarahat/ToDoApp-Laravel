<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class operationscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dispaly
        $data = User::get();
        return view('users', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //register view
       return view('signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $this->validate(request(),[
            'name'     => 'required|min:3',
            'password' => 'required|min:6',
            'email'    => 'required|email'
        ]);

        $data['password'] = bcrypt( $data['password']);
        $op=  User::create($data);

            $message ="Error Try Again";
        if($op){

            $message = "Data Inserted";
        }

session()->flash('message',$message);
return redirect(url('/user' ));



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //single data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $data = User::find($id)->toArray();

        return view('edituser',['data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //logic of
        $data =  $this->validate(request(),[
            'name'     => 'required|min:3',
            'email'    => 'required|email'
            ]
            );



        $op=  User::where('id',$id)->update($data);

        if($op){

            return redirect(url('/user'));
        }else{
            echo 'error try again';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete
        $op =User::where('id',$id)->delete();

        $message = "Error in delete";
    if ($op){
        $message = "user Removed";
    }
    return back();
    }
}
