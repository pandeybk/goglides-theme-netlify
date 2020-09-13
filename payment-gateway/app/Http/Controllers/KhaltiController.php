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
                Mail::send('userMail', $data, function($message) use ($user, $merchant) {
                    $message->from($merchant['email'])
                        ->to($user['email'])
                        ->subject('Purchase Receipt');
                });
                Mail::send('merchantMail', $data, function($message) use ($user, $merchant) {
                    $message->to($merchant['email'])
                        ->subject('Purchase Receipt');
                });
                return $jsonArray;
            }
        } catch (GuzzleException $e) {
        }

// url will be: http://my.domain.com/test.php?key1=5&key2=ABC;


    }
    //

    public function html_email() {
        $data = array('name'=>"Sakshamta Manandhar");
        Mail::send('mail', $data, function($message) {
            $message->to('binodshakya78@gmail.com', 'Tutorials Point')
                ->subject('To me my love');
        });
    }
}
