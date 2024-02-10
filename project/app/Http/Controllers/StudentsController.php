<?php

namespace App\Http\Controllers;

use App\Models\StudentsModel;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function register_view(){
        return view('register');
    }
    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'gender'=>'required',
        ]);
        
        // dd($request->all());
        $student = new StudentsModel();
        $student ->name = $request['name'];
        $student ->email= $request['email'];
        $student ->password= $request['password'];
        $student -> gender= $request['gender'];
        $student->save();

        return redirect('user/view');
    }
    public function user_view() {
        $data = StudentsModel::all();
        return view ('users')->with(compact('data'));
    }
}
