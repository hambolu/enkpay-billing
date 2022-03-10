<?php
use App\Models\Billing;

class AirtimeClubconnect{
    
    function buyairtime($mobileNumber,$amount,$mobilenetwork){

        

        try {
            $mobilenetwork = $mobilenetwork;
        $amount = $amount;
        $number = $number ;
       
        $response = Http::get('https://www.nellobytesystems.com/APIAirtimeV1.asp?',[
            "UserID"=>$this->userid,
            "APIKey"=>$this->apiKey,
            "MobileNetwork"=> $mobilenetwork,
            "Amount"=> $amount,
            "MobileNumber" => $mobileNumber,
            "CallBackURL"=> "https://erkpay.oucheshosting.com/"
        ]);
        $r = $response->json();

        // $user_id = 5;

        $billing = new Billing();
        $billing->billing_type = "Airtime";
        $billing->network      = $request->input('MobileNetwork');
        $billing->phone        = $request->input('MobileNumber');
        $billing->amount       = $request->input('Amount');
        $billing->orderid       = $r['orderid'];
        $billing->statuscode       = $r['statuscode'];
        $billing->status       = $r['status'];
        $billing->user_id       = $request->input('user_id');
        
        //dd($billing);
        $billing->save();
        
        
         if ($this->successStatus == true) {
             
            return response()->json(["status" => $this->successStatus, 'data'=> $r])->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
        }else{
            return response()->json(["status" => $this->failedStatus,'error' => 'Unauthorised'], 401);
        }
          }
          
          //catch exception
          catch(Exception $e) {
            return response()->json(["status" => $this->failedStatus,'error' => $e->getMessage()]);
          }
    }
}