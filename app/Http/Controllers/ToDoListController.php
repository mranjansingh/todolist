<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDoList;
use App\Models\User;
use App\Mail\Sendmail;
use Mail;
use Session;

class ToDoListController extends Controller
{
    public function List(){
        $title = "TO-DO-LIST";
        $to_do_list = ToDoList::orderby('id','desc')->get();
        return view('to-do-list/list',compact('title','to_do_list'));
    }    
    public function ListAdd(){
        $title = "ADD-TO-DO-LIST";
        return view('to-do-list/add',compact('title'));
    }    
    public function ListAddUser(Request $request){
        // dd($request);
        $request->validate([          
            "topic" => 'required',
            "discreption" => 'required',
            "date" => 'required',
            "time" => 'required',
            "status" => 'required',
        ]);
        $add = ToDoList::insert([
            'topic'=>$request->topic,
            'discreption'=>$request->discreption,
            'date'=>$request->date,
            'time'=>$request->time,
            'status'=>$request->status,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        $loggedInId = session()->get('loginId');
        $user = User::where('id',$loggedInId)->first();
        $mailData = [
            'name' => $user->name,
            'topic' => $user->topic,
            'status' => $request->status,
            'subject' =>'Reminder Email',
        ];
        $sendmail = Mail::to($user->email)->send(new Sendmail($mailData));
        if($add){
            return back()->with('success','Add successfully and sent mail  your registed email id ');
        }else{
            return back()->with('fail','somthing went worng');
        }
        
    }
    public function Edit($id){
        $title = "EDIT-TO-DO-LIST";
        $edit = ToDoList::where('id',$id)->first();
        return view('to-do-list/edit',compact('title','edit'));
    }

    public function update(Request $request){
        $title = 'UPDATE-TO-DO-LIST';
        $request->validate([          
            "topic" => 'required',
            "discreption" => 'required',
            "date" => 'required',
            "time" => 'required',
            "status" => 'required',
        ]);
        $update = ToDoList::where('id',$request->EditId)->update([
            'topic'=>$request->topic,
            'discreption'=>$request->discreption,
            'date'=>$request->date,
            'time'=>$request->time,
            'status'=>$request->status,
            'updated_at'=>now(),
        ]);

        $loggedInId = session()->get('loginId');
        $user = User::where('id',$loggedInId)->first();
        $mailData = [
            'name' => $user->name,
            'topic' => $user->topic,
            'status' => $request->status,
            'subject' =>'Reminder Email',
        ];
        $sendmail = Mail::to($user->email)->send(new Sendmail($mailData));

        if($update){
            return back()->with('success','Update successfully and sent mail  your registed email id');
        }else{
            return back()->with('fail','somthing went worng');
        }

    }
    public function Delete($id){
        $delete = ToDoList::where('id',$id)->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'

        ]);
    }
}
