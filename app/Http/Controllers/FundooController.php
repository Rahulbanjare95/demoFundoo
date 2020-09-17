<?php

namespace App\Http\Controllers;

use App\Models\fundooRegister;
use Illuminate\Http\Request;
class FundooController extends Controller
{
    
    public function create(Request $request)
    {
        $users = new fundooRegister();
        $users->firstname = $request->input('firstname');
        $users->lastname = $request->input('lastname');
        $users->email = $request->input('email');
        $users->password = $request->input('password');

        $users->save();
        return response()->json($users);
    }
}
