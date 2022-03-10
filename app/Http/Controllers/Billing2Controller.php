<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use App\Models\Billing;
use App\clubconnect\AirtimeClubconnect;


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
        $mobilenetwork = "03";
        $uuid = $request->input('uuid');
        
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
        
        
         $billing = new Billing();
        $billing->billing_type = "Airtime";
        $billing->network      = "etisalat";
        $billing->amount        = $request->input('amount');
        $billing->phone       = $request->input('phone');
        $billing->transRef       = $r->transRef;
        $billing->status       = $r->responseMessage;
        $billing->uuid       = $request->input('uuid');
        
        //dd($billing);
        $billing->save();
        
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
        $airtimeClubconnect = new AirtimeClubconnect();
        $airtimeClubconnect->buyairtime($phone,$amount,$mobilenetwork);
    }
    
    public function gloAirtime(Request $request)
    {
        
        $phone = $request->input('phone');
        $amount = $request->input('amount');
        //$product = $request->input('amount');
        $uuid = $request->input('uuid');
        
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

        $billing = new Billing();
       $billing->billing_type = "Airtime";
       $billing->network      = "glo";
       $billing->amount        = $request->input('amount');
       $billing->phone       = $request->input('phone');
       $billing->transRef       = $r->transRef;
       $billing->status       = $r->responseMessage;
       $billing->uuid       = $request->input('uuid');
       
       //dd($billing);
       $billing->save();
       
        
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
        $uuid = $request->input('uuid');
        
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
        
        $billing = new Billing();
        $billing->billing_type = "Airtime";
        $billing->network      = "Airtel";
        $billing->amount        = $request->input('amount');
        $billing->phone       = $request->input('phone');
        $billing->transRef       = $r->transRef;
        $billing->status       = $r->responseMessage;
        $billing->uuid       = $request->input('uuid');
        
        //dd($billing);
        $billing->save();
        
        
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
        $uuid = $request->input('uuid');
        
        
        
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
        
        $billing = new Billing();
        $billing->billing_type = "Airtime";
        $billing->network      = "MTN";
        $billing->amount        = $request->input('amount');
        $billing->phone       = $request->input('phone');
        $billing->transRef       = $r->transRef;
        $billing->status       = $r->responseMessage;
        $billing->uuid       = $request->input('uuid');
        
        //dd($billing);
        $billing->save();
        
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    

    
    public function etisalatdata(Request $request)
    {
        
        $phone = $request->input('phone');
        $amount = $request->input('amount');
        $product_type = $request->input('product_type');
        $uuid = $request->input('uuid');
        
        
        
        $trx = array(
                 "billerCode" => "9mobiledata1",
                    "productId" => 1144,
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
                        "fieldValue" => $product_type,
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
        
        $billing = new Billing();
        $billing->billing_type = "DATA";
        $billing->network      = "Etisalat";
        $billing->amount        = $request->input('amount');
        $billing->phone       = $request->input('phone');
        $billing->transRef       = $r->transRef;
        $billing->status       = $r->responseMessage;
        $billing->uuid       = $request->input('uuid');
        
        //dd($billing);
        $billing->save();
        
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    
    public function glodata(Request $request)
    {
        
        $phone = $request->input('phone');
        $amount = $request->input('amount');
        $product_type = $request->input('product_type');
        $uuid = $request->input('uuid');
        
        
        
        $trx = array(
                 "billerCode" => "glo-data",
                    "productId" => 52,
                "transDetails" => array(
                        array(
                        "fieldName" => "E-mail",
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
                        "fieldValue" => $product_type,
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
        
        $billing = new Billing();
        $billing->billing_type = "DATA";
        $billing->network      = "Glo";
        $billing->amount        = $request->input('amount');
        $billing->phone       = $request->input('phone');
        $billing->transRef       = $r->transRef;
        $billing->status       = $r->responseMessage;
        $billing->uuid       = $request->input('uuid');
        
        //dd($billing);
        $billing->save();
        
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }

    public function mtndata(Request $request)
    {
        
        $phone = $request->input('phone');
        $amount = $request->input('amount');
        $product_type = $request->input('product_type');
        $uuid = $request->input('uuid');
        
        
        
        $trx = array(
                 "billerCode" => "data",
                    "productId" => 1127,
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
                        "fieldName" => "Product type",
                        "fieldValue" => $product_type,
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
        
        $billing = new Billing();
        $billing->billing_type = "DATA";
        $billing->network      = "Mtn";
        $billing->amount        = $request->input('amount');
        $billing->phone       = $request->input('phone');
        $billing->transRef       = $r->transRef;
        $billing->status       = $r->responseMessage;
        $billing->uuid       = $request->input('uuid');
        
        //dd($billing);
        $billing->save();
        
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    

    public function airteldata(Request $request)
    {
        
        $phone = $request->input('phone');
        $amount = $request->input('amount');
        $product_type = $request->input('product_type');
        $uuid = $request->input('uuid');
        
        
        
        $trx = array(
                 "billerCode" => "airtel-data",
                    "productId" => 1124,
                "transDetails" => array(
                        array(
                        "fieldName" => "E-mail",
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
                        "fieldValue" => $product_type,
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
        
        $billing = new Billing();
        $billing->billing_type = "DATA";
        $billing->network      = "Airtel";
        $billing->amount        = $request->input('amount');
        $billing->phone       = $request->input('phone');
        $billing->transRef       = $r->transRef;
        $billing->status       = $r->responseMessage;
        $billing->uuid       = $request->input('uuid');
        
        //dd($billing);
        $billing->save();
        
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }

    public function gotv(Request $request)
    {
        
        $phone = $request->input('phone');
        $Amount = $request->input('Amount');
        $customerName = $request->input('customerName');
        $customerAccountType = $request->input('customerAccountType');
        //$cabletv      = $request->input('cabletv');
        $smartcardno      = $request->input('smartcardno');
        $uuid = $request->input('uuid');
        
        
        
        $trx = array(
                 "billerCode" => "GOTV1",
                    "productId" => 1149,
                "transDetails" => array(
                        array(
                        "fieldName" => "Email",
                        "fieldValue" => "toluadejimi@gmail.com",
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Customer Name",
                        "fieldValue" => $customerName,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Amount",
                        "fieldValue" => $Amount,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Package",
                        "fieldValue" => $customerAccountType,
                        "fieldControlType" => "LOOKUP"
                        ),
                        array(
                        "fieldName" => "Smart Card Number",
                        "fieldValue" => $smartcardno,
                        "fieldControlType" => "TEXTBOX"
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
        
        $billing = new Billing();
        $billing->billing_type = "Cable";
        $billing->cable_type      = "Gotv";
        //$billing->cabletv      = $request->input('cabletv');
        $billing->smartcardno      = $request->input('smartcardno');
        $billing->amount        = $request->input('amount');
        $billing->phone       = $request->input('phone');
        $billing->transRef       = $r->transRef;
        $billing->status       = $r->responseMessage;
        $billing->uuid       = $request->input('uuid');
        
        //dd($billing);
        $billing->save();
        
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }

    public function dstv(Request $request)
    {
        
        $customerAccountType = $request->input('customerAccountType');
        //$Amount = $request->input('Amount');
        $customerName = $request->input('customerName');
        $numberofMonths = $request->input('numberofMonths');
        $invoiceNumber      = $request->input('invoiceNumber');
        $smartcardno      = $request->input('smartcardno');
        $subAmount      = $request->input('subAmount');
        $uuid = $request->input('uuid');
        
        
        
        $trx = array(
                 "billerCode" => "DSTV1",
                    "productId" => 1148,
                "transDetails" => array(
                        array(
                        "fieldName" => "Email Address",
                        "fieldValue" => "toluadejimi@gmail.com",
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Customer Details",
                        "fieldValue" => $customerName,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Customer Number",
                        "fieldValue" => $invoiceNumber,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Number of Months",
                        "fieldValue" => $numberofMonths,
                        "fieldControlType" => "LOOKUP"
                        ),
                        array(
                        "fieldName" => "Select Package (Amount)",
                        "fieldValue" => $customerAccountType,
                        "fieldControlType" => "LOOKUP"
                        ),
                        array(
                        "fieldName" => "Smart Card Number",
                        "fieldValue" => $smartcardno,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Subscription Amount",
                        "fieldValue" => $subAmount,
                        "fieldControlType" => "TEXTBOX"
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
        
        $billing = new Billing();
        $billing->billing_type = "Cable";
        $billing->cable_type      = "Dstv";
        //$billing->cabletv      = $request->input('cabletv');
        $billing->smartcardno      = $request->input('smartcardno');
        $billing->amount        = $request->input('subAmount');
        //$billing->phone       = $request->input('phone');
        $billing->transRef       = $r->transRef;
        $billing->status       = $r->responseMessage;
        $billing->uuid       = $request->input('uuid');
        
        //dd($billing);
        $billing->save();
        
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }

    public function startimes(Request $request)
    {
        
        //$customerAccountType = $request->input('customerAccountType');
        //$Amount = $request->input('Amount');
        $customerName = $request->input('customerName');
        $product_type = $request->input('product_type');
        $phone      = $request->input('phone');
        $smartcardno      = $request->input('smartcardno');
        $amount      = $request->input('amount');
        $uuid = $request->input('uuid');
        
        
        
        $trx = array(
                 "billerCode" => "startimes",
                    "productId" => 1120,
                "transDetails" => array(
                        array(
                        "fieldName" => "E-mail",
                        "fieldValue" => "toluadejimi@gmail.com",
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Customers Name",
                        "fieldValue" => $customerName,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Phone Number",
                        "fieldValue" => $phone,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Product",
                        "fieldValue" => $product_type,
                        "fieldControlType" => "LOOKUP"
                        ),
                        
                        array(
                        "fieldName" => "SmartCard Number",
                        "fieldValue" => $smartcardno,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Amount",
                        "fieldValue" => $amount,
                        "fieldControlType" => "TEXTBOX"
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
        
        $billing = new Billing();
        $billing->billing_type = "Cable";
        $billing->cable_type      = "Startimes";
        //$billing->cabletv      = $request->input('cabletv');
        $billing->smartcardno      = $request->input('smartcardno');
        $billing->amount        = $request->input('amount');
        $billing->phone       = $request->input('phone');
        $billing->transRef       = $r->transRef;
        $billing->status       = $r->responseMessage;
        $billing->uuid       = $request->input('uuid');
        
        //dd($billing);
        $billing->save();
        
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }

    public function ibedc(Request $request)
    {
        
        //$customerAccountType = $request->input('customerAccountType');
        //$Amount = $request->input('Amount');
        $customerName = $request->input('customerName');
        $customerDetails = $request->input('customerDetails');
        //$product_type = $request->input('product_type');
        $phone      = $request->input('phone');
        $meterNo      = $request->input('meterNo');
        $amount      = $request->input('amount');
        $uuid = $request->input('uuid');
        
        
        
        $trx = array(
                 "billerCode" => "IBEDC_F",
                    "productId" => 1169,
                "transDetails" => array(
                        array(
                        "fieldName" => "Email Address",
                        "fieldValue" => "toluadejimi@gmail.com",
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Account Name",
                        "fieldValue" => $customerName,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                            "fieldName" => "Customer Details",
                            "fieldValue" => $customerDetails,
                            "fieldControlType" => "TEXTBOX"
                            ),
                        array(
                        "fieldName" => "Phone Number",
                        "fieldValue" => $phone,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Meter Number",
                        "fieldValue" => $meterNo,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Amount",
                        "fieldValue" => $amount,
                        "fieldControlType" => "TEXTBOX"
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
        
        $billing = new Billing();
        $billing->billing_type = "ElectricCompany";
        $billing->cable_type      = "ibedc";
        //$billing->cabletv      = $request->input('cabletv');
        $billing->meterNo      = $request->input('meterNo');
        $billing->amount        = $request->input('amount');
        $billing->phone       = $request->input('phone');
        $billing->transRef       = $r->transRef;
        $billing->status       = $r->responseMessage;
        $billing->uuid       = $request->input('uuid');
        
        //dd($billing);
        $billing->save();
        
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }

    public function iedcpostpaid(Request $request)
    {
        
        //$customerAccountType = $request->input('customerAccountType');
        //$Amount = $request->input('Amount');
        $customerName = $request->input('customerName');
        $customerDetails = $request->input('customerDetails');
        //$product_type = $request->input('product_type');
        $phone      = $request->input('phone');
        $meterNo      = $request->input('meterNo');
        $amount      = $request->input('amount');
        $uuid = $request->input('uuid');
        
        
        
        $trx = array(
                 "billerCode" => "iedc postpaid",
                    "productId" => 41,
                "transDetails" => array(
                        array(
                        "fieldName" => "Email Address",
                        "fieldValue" => "toluadejimi@gmail.com",
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Account Name",
                        "fieldValue" => $customerName,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                            "fieldName" => "Customer Details",
                            "fieldValue" => $customerDetails,
                            "fieldControlType" => "TEXTBOX"
                            ),
                        array(
                        "fieldName" => "Phone Number",
                        "fieldValue" => $phone,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Account Number",
                        "fieldValue" => $meterNo,
                        "fieldControlType" => "TEXTBOX"
                        ),
                        array(
                        "fieldName" => "Amount",
                        "fieldValue" => $amount,
                        "fieldControlType" => "TEXTBOX"
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
        
        $billing = new Billing();
        $billing->billing_type = "ElectrictyCompany";
        $billing->cable_type      = "iedc postpaid";
        //$billing->cabletv      = $request->input('cabletv');
        $billing->meterNo      = $request->input('meterNo');
        $billing->amount        = $request->input('amount');
        $billing->phone       = $request->input('phone');
        $billing->transRef       = $r->transRef;
        $billing->status       = $r->responseMessage;
        $billing->uuid       = $request->input('uuid');
        
        //dd($billing);
        $billing->save();
        
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }

    public function testapi(Request $request)
    {

        $phone = $request->input('phone');
        $amount = $request->input('amount');
        $billerCode = $request->input('billerCode');
        $productId = $request->input('productId');
        $trx = array(
            "billerCode" => $billerCode,
               "productId" => $productId,
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
