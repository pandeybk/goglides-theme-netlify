<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Mail;

class KhaltiController extends Controller
{
    public function verifyKhalti(Request $request){
        error_log($request);
        $url = "https://khalti.com/api/v2/payment/verify/";

        try {
            $response = Http::withHeaders([
                    'Authorization' => "Key test_secret_key_aa5ed646794c468caec5185c5c94d2a1"
            ])->post( $url, [
                'token' => $request->input('token'),
                'amount'  => $request->input('amount')
            ]);
            $jsonArray = json_decode($response, true);
            error_log($response);
            $state = $jsonArray["state"];
            if($state["name"].value("Completed")){
                $merchant = $jsonArray["merchant"];
                $user = $jsonArray["user"];

                $data = [
                    'product'=>$request["productName"],
                    'amount'=>$request["amount"]/100,
                    'companyLogo'=>$request["companyLogo"],
                    'quantity'=>$request["quantity"],
                    'merchantMail'=>$merchant["email"],
                    'userMail'=>$user['email'],
                    'userName'=>$user['name'],
                    'userPhone'=>$user['mobile']
                    ];
                Mail::send('merchantmail', $data, function($message) use ($user, $merchant) {
                    $message->from(env("MAIL_USERNAME","binod@laravelhugoapi.goglides.com"))
                    ->to($merchant['email'])
                        ->subject('Purchase Receipt');
                });
                Mail::send('userMail', $data, function($message) use ($user, $merchant) {
                    $message->from(env("MAIL_USERNAME","binod@laravelhugoapi.goglides.com"))
                        ->to($user['email'])
                        ->subject('Purchase Receipt');
                });

                return $jsonArray;
            }
        } catch (GuzzleException $e) {
        }

// url will be: http://my.domain.com/test.php?key1=5&key2=ABC;


    }
}
