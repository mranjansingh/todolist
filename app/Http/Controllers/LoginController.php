<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class LoginController extends Controller
{
    public function login(){
        return view('login/login');
    }
    public function register(){
        return view('login/register');
    }  
   public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:16'
        ]);
        $user = User::where('email',$request->email)->first();
        if($user){
            $user_status = User::where('email',$request->email)->where('status',1)->first();
            if($user_status){
                if(Hash::check($request->password,$user->password)){
                    $request->session()->put('loginId',$user->id);
                    return redirect('/list');
                }else{
                    return back()->with('fail',' Your password  Incorrect.');
                }
            }else{
                return back()->with('fail','you are not authorized to login please contact super Admin.');
            }
        }else{
            return back()->with('fail','This email is not registered.');
        }
    } 
    public function RegisterUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|string|min:6|confirmed'
        ]);
        $register = User::insert([
              'name'=>$request->name,
              'email'=>$request->email,
              'password'=>Hash::make($request->password),
              'confirm_password'=>Hash::make($request->password_confirmation),
              'status'=>1,
              'created_at'=>now(),
              'updated_at'=>now(),
            ]);
            if($register){
                return back()->with('success','Register Successfully');
            }else{
                return back()->with('fail','Somthing went wrong');
            }
    }
    public function Dashboard(){
        $title = "Dashboard";
        return view('dashboard/dashboard',compact('title'));
    }
    public function Logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
        }
    }
}
