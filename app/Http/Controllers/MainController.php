<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    function index()
    {
        return view('login');
    }

    // login using Laravel Auth framework
    function checklogin(Request $request)
    {
        // validate email & password
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            "email"  => $request->get('email'),
            "password" => $request->get('password')
        );

        // attempt login using Auth
        $data = DB::table('users')->first();
        $attempt = Auth::attempt($user_data);
        if (Auth::attempt($user_data)) {
            // get user role data
            $role =  DB::table('roles')->where('role_id', Auth::user()->role_id)->value('name');
            if ($role != null) {
                return redirect('main/successlogin');
            } else {
                return back()->with('error', 'Wrong Login Details');
            }
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    // route view to dashboard based on user role
    function successlogin()
    {
        $role = DB::table('roles')->where('role_id', Auth::user()->role_id)->value('name');
        $desc = DB::table('roles')->where('role_id', Auth::user()->role_id)->value('description');

        switch ($role) {
            case 'Manager':
                return view('dashboardM')->with('role', $role)->with('description', $desc);
                break;
            case 'Staff':
                return view('staffDashboard')->with('role', $role)->with('description', $desc);
                break;
            default:
                return back()->with('error', 'Undefined Role');
                break;
        }
    }

    // route view to user list page (only accessible by manager)
    function userview()
    {
        $role = DB::table('roles')->where('role_id', Auth::user()->role_id)->value('name');
        $desc = DB::table('roles')->where('role_id', Auth::user()->role_id)->value('description');
        return view('userM')->with('role', $role)->with('description', $desc);
    }

    // route view to user profile page
    function profileview()
    {
        $role = DB::table('roles')->where('role_id', Auth::user()->role_id)->value('name');
        $desc = DB::table('roles')->where('role_id', Auth::user()->role_id)->value('description');

        switch ($role) {
            case 'Manager':
                return view('profileM')->with('role', $role)->with('description', $desc);
                break;
            case 'Staff':
                return view('staffProfile')->with('role', $role)->with('description', $desc);
                break;
            default:
                return back()->with('error', 'Undefined Role');
                break;
        }
    }

    // route view to employee performance page (only accessible by manager)
    function employeeview()
    {
        $role = DB::table('roles')->where('role_id', Auth::user()->role_id)->value('name');
        $desc = DB::table('roles')->where('role_id', Auth::user()->role_id)->value('description');
        return view('employeeM')->with('role', $role)->with('description', $desc);
    }

    // route view to project list page (only accessible by employee)
    function projectListView()
    {
        $role = DB::table('roles')->where('role_id', Auth::user()->role_id)->value('name');
        $desc = DB::table('roles')->where('role_id', Auth::user()->role_id)->value('description');
        return view('staffProjectList')->with('role', $role)->with('description', $desc);
    }

    // Auth logout
    function logout()
    {
        Auth::logout();
        return redirect('main');
    }
}
