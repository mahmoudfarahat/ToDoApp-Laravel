<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\admin;
class adminrole extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data= $this->validate(request(),[
            'name'     => 'required|min:3',
            'password' => 'required|min:6',
            'email'    => 'required|email'
        ]);

        $data['password'] = bcrypt( $data['password']);
        $op=  admin::create($data);

            $message ="Error Try Again";
        if($op){

            $message = "Data Inserted";
        }

session()->flash('message',$message);

 return redirect('/adminlogin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function adminlogin(){
        return view('admin.login');


    }

    public function adminloginlogic(){
        $data =  $this->validate(request(),[
            'email'     => 'required|email',
            'password'    => 'required|min:3'
            ]
            );


            // $remember = false;
            // if($request->rememberMe){
            //     $remember = true;
            // }
     if(auth()->guard('admin')->attempt($data,false)){
            // return redirect('/user');
            echo "log in ";
        }else{
            // return redirect('/adminlogin');

            echo "try again";
        }
    }

        public function logout(){
            auth()->guard('admin')->logout();

            return redirect(url('/adminlogin'));
        }


}
