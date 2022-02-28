<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class RoutingController extends Controller
{
    

    public  function Authcheck()
    {
        // if(Auth::user()->role_type == 2)
        // {
        //     return view('users.index');
        // }
        // elseif(Auth::user()->role_type == 1)
        // {
        //}
            return view('agents.index');
    }
    
    public  function Authcheck2()
    {
        // if(Auth::user()->role_type == 2)
        // {
        //     return view('users.index');
        // }
        // elseif(Auth::user()->role_type == 1)
        // {
        //}
            return view('admin.index');
    }
}
