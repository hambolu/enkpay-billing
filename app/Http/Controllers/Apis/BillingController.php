<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Models\Billing;



class BillingController extends Controller
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
    public function balance(){

        $response = Http::accept('application/json')->get('https://www.nellobytesystems.com/APIWalletBalanceV1.asp?',[
            "UserID"=>$this->userid,
            "APIKey"=>$this->apiKey
        ]);
        $r = $response->json();
         if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    public function checkip()
    {
        $response = Http::get('https://www.nellobytesystems.com/APIServerIPV1.asp?',[
            "UserID"=>$this->userid,
            "APIKey"=>$this->apiKey
        ]);
        $response->json();
        //return $response;
    }
    public function buyairtime(Request $request)
    {
        
        
        $mobilenetwork = $request->input('MobileNetwork');
        $amount = $request->input('Amount');
        $number = $request->input('MobileNumber');
       
       
        $response = Http::get('https://www.nellobytesystems.com/APIAirtimeV1.asp?',[
            "UserID"=>$this->userid,
            "APIKey"=>$this->apiKey,
            "MobileNetwork"=> $mobilenetwork,
            "Amount"=> $amount,
            "MobileNumber" => $number,
            "CallBackURL"=> "https://erkpay.oucheshosting.com/"
        ]);
        $r = $response->json();
        
        //dd($r);
        // 'billing_type',
        // 'network',
        // 'phone',
        // 'amount',
        // 'orderid',
        // 'transRef',
        // 'statuscode',
        // 'status',
        // 'user_id'
        $user_id = 5;
        
        
        // $billing = new Billing();
        // $billing->billing_type = "Airtime";
        // $billing->network      = $request->input('MobileNetwork');
        // $billing->phone        = $request->input('MobileNumber');
        // $billing->amount       = $request->input('amount');
        // $billing->orderid       = $r['orderid'];
        // $billing->statuscode       = $r['statuscode'];
        // $billing->status       = $r['status'];
        // $billing->user_id       = $user_id;
        
        
        $billing = new Billing();
        $billing->billing_type = "Airtime";
        $billing->network      = $request->input('MobileNetwork');
        $billing->phone        = $request->input('MobileNumber');
        $billing->amount       = $amount;
        $billing->orderid       = $r['orderid'];
        $billing->statuscode       = $r['statuscode'];
        $billing->status       = $r['status'];
        $billing->user_id       = $user_id;
        
        dd($billing);
        $billing->save();
        
        
         if ($this->successStatus == true) {
             
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    
    
    public function qtrx()
    {
        $response = Http::get('https://www.nellobytesystems.com/APIQueryV1.asp?',[
            "UserID"=>$this->userid,
            "APIKey"=>$this->apiKey,
            "OrderId"=> "6427059220",
            "CallBackURL"=> "https://erkpay.oucheshosting.com/"
        ]);
        $r = $response->json();
        
        
        $billing = new Billing();
        $billing->billing_type = "Airtime";
        $billing->network      = $request->input('MobileNetwork');
        $billing->phone        = $request->input('MobileNumber');
        $billing->amount       = $request->input('amount');
        $billing->orderid       = $r['orderid'];
        $billing->statuscode       = $r['statuscode'];
        $billing->status       = $r['status'];
        $billing->user_id       = $user_id;
        
        dd($billing);
        $billing->save();
        
         if ($this->successStatus == true) {
             
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    
    public function databundle(Request $request)
    {
        $mobilenetwork = $request->input('mobilenetwork');
        $dataplan = $request->input('dataplan');
        $number = $request->input('number');
        // $mobilenetwork = $request->input('mobilenetwork');
        // $mobilenetwork = $request->input('mobilenetwork');
        
        $response = Http::get('https://www.nellobytesystems.com/APIDatabundleV1.asp?',[
            "UserID"=>$this->userid,
            "APIKey"=>$this->apiKey,
            "MobileNetwork"=> $mobilenetwork,
            "DataPlan"=> $dataplan,
            "MobileNumber"=>$number,
            "CallBackURL"=> "https://erkpay.oucheshosting.com/"
        ]);
        $r = $response->json();
         if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    
    public function cablesub(Request $request)
    {
        $cabletv = $request->input('cabletv');
        $package = $request->input('package');
        $number = $request->input('number');
        $smartcardno = $request->input('smartcardno');
        //$mobilenetwork = $request->input('mobilenetwork');
        //dd($cabletv,$smartcardno);
        $r = $response = Http::get('https://www.nellobytesystems.com/APICableTVV1.asp?',[
            "UserID"=>$this->userid,
            "APIKey"=>$this->apiKey,
            "CableTV"=> $cabletv,
            "Package"=> $package,
            "SmartCardNo"=>$smartcardno,
            "MobileNumber"=>$number,
            "CallBackURL"=> "https://erkpay.oucheshosting.com/"
        ]);
        $r = $response->json();
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    
    public function vcard(Request $request)
    {
        $cabletv = $request->input('cabletv');
        // $package = $request->input('package');
        // $number = $request->input('number');
        $smartcardno = $request->input('smartcardno');
        // $mobilenetwork = $request->input('mobilenetwork');
        //dd($cabletv,$smartcardno);
        $response = Http::get('https://www.nellobytesystems.com/APIVerifyCableTVV1.0.asp?',[
            "UserID"=>$this->userid,
            "APIKey"=>$this->apiKey,
            "cabletv"=> $cabletv,
            // "Package"=> $package,
            "smartcardno"=>$smartcardno,
            // "MobileNumber"=>$number,
            "CallBackURL"=> "https://erkpay.oucheshosting.com/"
        ]);
        $r = $response->json();
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    
    public function vmeter(Request $request)
    {
        $electric_code = $request->input('electric_code');
        $m_no = $request->input('m_no');
        $response = Http::get('https://www.nellobytesystems.com/APIVerifyElectricityV1.asp?',[
            "UserID"=>$this->userid,
            "APIKey"=>$this->apiKey,
            "ElectricCompany"=> $electric_code,
            // "Package"=> $package,
            "MeterNo"=>$m_no,
            // "MobileNumber"=>$number,
            "CallBackURL"=> "https://erkpay.oucheshosting.com/"
        ]);
        $r = $response->json();
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    
    //VAS APIS
    
    
    
    
    public function billers()
    {
        //Get List of Billers
        $response = Http::withHeaders([
            "webkey"=>$this->webkey,
            "accountId"=>$this->accountId
        ])->get('https://reseller.payxpress.com/api/billers');
        $r = $response->json();
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
    }
    
    
    public function billersandproducts()
    {
        //Get List of Billers And Products
       $response = Http::get('https://reseller.payxpress.com/api/billersandproducts',[
            "webkey"=>$this->webkey,
            "accountId"=>$this->accountId
        ]);
        $r = $response->json();
        
        if ($this->successStatus == true) {
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
        //return $response;
    }
    
    

    
    
    
}
