<?php

namespace App\Http\Controllers;

use App\Models\pharmacist;
use Illuminate\Http\Request;

class pharmacistController extends Controller
{
    public function pharmacistCreate(){
        return view('registration');
    }

    public function pharmacistCreateSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required",
            "id"=>"required",
            'dob'=>'required',
            'email'=>'required|email',
            'address'=>'required|max:50',
            'password'=>'required|min:8'
        ],
        ['name.required'=>"Please put you name here"]
    );
        $pharmacist = new  pharmacist();
        $pharmacist->name = $request->name;
        $pharmacist->pharmacist_id = $request->id;
        $pharmacist->email = $request->email;
        $pharmacist->address = $request->address;
        $pharmacist->password = $request->password;

        $pharmacist->save();

       return redirect()->route('pharmacistCreatePage');
    }
    public function pharmacistLogin(){
        return view('login');
    }
    public function pharmacistLoginSubmitted(Request $request){
        $validate = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);
        $pharmacist = pharmacist::where('email', $request->email)->first();
        if($request->email === $pharmacist->email && $request->password === $pharmacist->password){
            return  redirect()->route('pharmacistLoginPage');
        }
        else{
            $msg = "failed";
            return $msg;
        }
    }
}