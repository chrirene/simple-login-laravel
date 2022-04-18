<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
//use Auth;

class MainController extends Controller
{
    function index()
    {
     return view('login');
    }

    function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect('main/successlogin');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }

    function successlogin()
    {
        $role = DB::table('roles')->where('role_id', Auth::user()->role_id)->value('name');
        $desc = DB::table('roles')->where('role_id', Auth::user()->role_id)->value('description');
        return view('successlogin')->with('role', $role)->with('description', $desc);
     //return view('successlogin');
    }

    function logout()
    {
     Auth::logout();
     return redirect('main');
    }
}
