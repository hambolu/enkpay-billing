<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billing;

class AgentsController extends Controller
{
    //
    public function transactions()
    {
        $trx = Billing::all()->orderBy('id', 'DESC');
    //dd($trx);
        return view('agents.dashboard',compact('trx'));
    }
    
}
