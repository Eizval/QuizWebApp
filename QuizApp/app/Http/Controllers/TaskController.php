<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        
        return view('tasks');
    }

    public function upload(Request $request){

        $user = new User;

        $user->name=$request->username;
        $user->email=$request->email;
        $user->password=$request->password;

        $user->save();
        return redirect()->back();
        
    }
}
