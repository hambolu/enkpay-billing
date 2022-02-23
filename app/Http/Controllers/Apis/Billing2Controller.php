<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;



class Billing2Controller extends Controller
{
    private $apiKey;
    private $userid;

    public $successStatus = true;
    public $failedStatus = false;
    
    private $webkey;
    private $username;
    private $password;
    private $accountId;
    
    public function __construct()
    {
        $this->webkey = 'd0918b76c6dc4991b7c51db9f062b7a5';
        $this->username = 'tolu.adejimi@enkwave.com';
        $this->password = 'Tolulope2580@';
        $this->accountId = '100002824';
        
        $this->apiKey = 'Q9I77D0G0YJ0RD8EU225G837CV5H12T1T7WTZYQJM12K44T382RISV6O45J718U3';
        $this->userid = 'CK100388439';  
    }
    
    
    //VAS APIS
    
    
    
    
    public function billers()
    {

        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://reseller.payxpress.com/api/billers',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'webkey: d0918b76c6dc4991b7c51db9f062b7a5',
            'accountId: 100002824',
            'Authorization: Basic dG9sdS5hZGVqaW1pQGVua3dhdmUuY29tOlRvbHVsb3BlMjU4MEA='
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        //echo $response;

        $r = json_decode($response);
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    
    
    public function billersandproducts()
    {
        //Get List of Billers And Products
           $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://reseller.payxpress.com/api/billersandproducts',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'webkey: d0918b76c6dc4991b7c51db9f062b7a5',
            'accountId: 100002824',
            'Authorization: Basic dG9sdS5hZGVqaW1pQGVua3dhdmUuY29tOlRvbHVsb3BlMjU4MEA='
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        //echo $response;

        $r = json_decode($response);
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
        //return $response;
    }
    
    public function billingfield()
    {
        //Get List of Billers And Products
           $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://reseller.payxpress.com/api/billersandproductandfields',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'webkey: d0918b76c6dc4991b7c51db9f062b7a5',
            'accountId: 100002824',
            'Authorization: Basic dG9sdS5hZGVqaW1pQGVua3dhdmUuY29tOlRvbHVsb3BlMjU4MEA='
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        //echo $response;

        $r = json_decode($response);
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
        //return $response;
    }
    
    public function etisalatAirtime(Request $request)
    {
        
        $phone = $request->input('phone');
        $amount = $request->input('amount');
        //$product = $request->input('amount');
        
        $trx = array(
                 "billerCode" => "9MOBILEAIRTIME",
                    "productId" => 1143,
                "transDetails" => array(
                        array(
                        "fieldName" => "Email",
                        "fieldValue" => "toluadejimi@gmail.com",
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Phone Number",
                        "fieldValue" => $phone,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Amount",
                        "fieldValue" => $amount,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Product Type",
                        "fieldValue" => "AIRTIME",
                        "fieldControlType" => "LOOKUP"
                        )
                        
                    ),
                );
                
        //dd($trx);
        $tx = json_encode($trx);
        $curl = curl_init();

        //'webkey: 08879be159ca4da0be92a32d36401219',
                    //'accountId: 100011860',
          curl_setopt($curl, CURLOPT_URL, 'https://reseller.payxpress.com/api/process-transaction');
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($curl, CURLOPT_ENCODING, '');
          curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
          curl_setopt($curl, CURLOPT_TIMEOUT, 0);
          curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
          curl_setopt($curl, CURLOPT_POSTFIELDS, $tx);
          curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'webkey: d0918b76c6dc4991b7c51db9f062b7a5',
                    'accountId: 100011860',
                    'Authorization: Basic dG9sdS5hZGVqaW1pQGVua3dhdmUuY29tOlRvbHVsb3BlMjU4MEA='
                  )
        );
        
        $response = curl_exec($curl);
        
        curl_close($curl);
         $r = json_decode($response);
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    
    public function gloAirtime(Request $request)
    {
        
        $phone = $request->input('phone');
        $amount = $request->input('amount');
        //$product = $request->input('amount');
        
        $trx = array(
                 "billerCode" => "glo",
                    "productId" => 61,
                "transDetails" => array(
                        array(
                        "fieldName" => "Email",
                        "fieldValue" => "toluadejimi@gmail.com",
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Phone Number",
                        "fieldValue" => $phone,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Amount",
                        "fieldValue" => $amount,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Product",
                        "fieldValue" => "AIRTIME",
                        "fieldControlType" => "LOOKUP"
                        )
                        
                    ),
                );
                
        //dd($trx);
        $tx = json_encode($trx);
        $curl = curl_init();

        //'webkey: 08879be159ca4da0be92a32d36401219',
                    //'accountId: 100011860',
          curl_setopt($curl, CURLOPT_URL, 'https://reseller.payxpress.com/api/process-transaction');
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($curl, CURLOPT_ENCODING, '');
          curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
          curl_setopt($curl, CURLOPT_TIMEOUT, 0);
          curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
          curl_setopt($curl, CURLOPT_POSTFIELDS, $tx);
          curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'webkey: d0918b76c6dc4991b7c51db9f062b7a5',
                    'accountId: 100011860',
                    'Authorization: Basic dG9sdS5hZGVqaW1pQGVua3dhdmUuY29tOlRvbHVsb3BlMjU4MEA='
                  )
        );
        
        $response = curl_exec($curl);
        
        curl_close($curl);
         $r = json_decode($response);
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    
    public function airtelAirtime(Request $request)
    {
        
        $phone = $request->input('phone');
        $amount = $request->input('amount');

        
        $trx = array(
                 "billerCode" => "airtel",
                    "productId" => 11,
                "transDetails" => array(
                        array(
                        "fieldName" => "Email",
                        "fieldValue" => "toluadejimi@gmail.com",
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Phone Number",
                        "fieldValue" => $phone,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Amount",
                        "fieldValue" => $amount,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Product Type",
                        "fieldValue" => "AIRTIME",
                        "fieldControlType" => "LOOKUP"
                        )
                        
                    ),
                );
                
        //dd($trx);
        $tx = json_encode($trx);
        $curl = curl_init();

        //'webkey: 08879be159ca4da0be92a32d36401219',
                    //'accountId: 100011860',
          curl_setopt($curl, CURLOPT_URL, 'https://reseller.payxpress.com/api/process-transaction');
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($curl, CURLOPT_ENCODING, '');
          curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
          curl_setopt($curl, CURLOPT_TIMEOUT, 0);
          curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
          curl_setopt($curl, CURLOPT_POSTFIELDS, $tx);
          curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'webkey: d0918b76c6dc4991b7c51db9f062b7a5',
                    'accountId: 100011860',
                    'Authorization: Basic dG9sdS5hZGVqaW1pQGVua3dhdmUuY29tOlRvbHVsb3BlMjU4MEA='
                  )
        );
        
        $response = curl_exec($curl);
        
        curl_close($curl);
         $r = json_decode($response);
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    
    public function mtnAirtime(Request $request)
    {
        
        $phone = $request->input('phone');
        $amount = $request->input('amount');
        //$product = $request->input('amount');
        
        $trx = array(
                 "billerCode" => "MTN",
                    "productId" => 60,
                "transDetails" => array(
                        array(
                        "fieldName" => "Email",
                        "fieldValue" => "toluadejimi@gmail.com",
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Phone Number",
                        "fieldValue" => $phone,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Amount",
                        "fieldValue" => $amount,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Product",
                        "fieldValue" => "AIRTIME",
                        "fieldControlType" => "LOOKUP"
                        )
                        
                    ),
                );
                
        //dd($trx);
        $tx = json_encode($trx);
        $curl = curl_init();

        //'webkey: 08879be159ca4da0be92a32d36401219',
                    //'accountId: 100011860',
          curl_setopt($curl, CURLOPT_URL, 'https://reseller.payxpress.com/api/process-transaction');
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($curl, CURLOPT_ENCODING, '');
          curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
          curl_setopt($curl, CURLOPT_TIMEOUT, 0);
          curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
          curl_setopt($curl, CURLOPT_POSTFIELDS, $tx);
          curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'webkey: d0918b76c6dc4991b7c51db9f062b7a5',
                    'accountId: 100011860',
                    'Authorization: Basic dG9sdS5hZGVqaW1pQGVua3dhdmUuY29tOlRvbHVsb3BlMjU4MEA='
                  )
        );
        
        $response = curl_exec($curl);
        
        curl_close($curl);
         $r = json_decode($response);
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    

    
    
    
}
