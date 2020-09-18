<?php

namespace App\Http\Controllers;

use App\Models\fundooRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class fundooController extends Controller
{
    
    public function create(Request $request)
    {
        $users = new fundooRegister();
        $users->firstname = $request->input('firstname');
        $users->lastname = $request->input('lastname');
        $users->email = $request->input('email');
        $users->password = md5($request->input('password'));
       
        $users->save();
        return response()->json(['status'=>200,'message'=>'Registered Sucessfully','data'=>$users]);
    }

    public function login(Request $request){
    
        $email = $request->input('email');
        $password = $request->input('password');
        $encrypted =md5($password);
        
        $result = DB::select('SELECT id FROM demousers WHERE email = ? AND password = ?',[$email,$encrypted]);
        if (count($result)>0) {
            return response()->json(['status'=>200,'message'=>'Login Successfully!!']);
        } else {
            return response()->json(['status'=>401,'message'=>'Email Not registered']);
        }
        
    }
}
