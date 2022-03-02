<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Billing;
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
        $user = $r['data'];
        
        if($r['success'] == true)
        {
            $name = $user['name'];
            $account_number = $user['account_number'];
            $account_balance = $user['account_balance'];
            $trx = Billing::all();
            return view('agents.dashboard',compact('name','account_number','account_balance','trx'))->with('success', 'Successfully! Welcome Back..');
        }else{
            return view('agents.index')->with('error', 'Invalid Credentials');
        }
    }
    
    public  function Authcheck2()
    {
       
            return view('admin.index');
    }
}
