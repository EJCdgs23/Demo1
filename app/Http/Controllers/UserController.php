<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello UserController';
    }

    public function show($id){

        $data=array(
            "id"=>$id,
            "name"=>"Ezra John",
            "age"=>20,
            "email"=>"cezrajohn@gmail.com"
        );

        //return view('user',['data' =>$data]);

        return view('user',$data);
    }
}
