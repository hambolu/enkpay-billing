<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;


class AuthenticationController extends Controller
{
    

    public  function users(Request $request)
    {
        $response = Http::withToken('1|M1qGO2aeP0Q2MF5uI1SgmqSUGVxRPHPy0g1507eP')
                ->accept('application/json')
                ->post('https://auth.enkwave.com/public/api/auth/login',[
                    "phone" => $request->input('phone'),
                    "password" => $request->input('password')
                    ]);
        $r = $response->json();
        //dd($r);
        if($r['success'] == true)
        {
            return view('agents.dashboard');
        }else{
            return view('agents.index');
        }
        // return view('agents.index');
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
