<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;

class MoneyController extends Controller
{
    
    public function yandexReceive(Request $request){
        $notification_type = $request->input('notification_type');
        $codepro = $request->input('codepro');
        $operation_id = $request->input('operation_id');
        $amount = $request->input('amount');
        $withdraw_amount = $request->input('withdraw_amount');
        $datetime = $request->input('datetime');
        $sender= $request->input('sender');
        $label= $request->input('label');
        $secret_key="ewQNOWY2AydiY4lpHUuHseXt";
        $sha1_hash = $request->input("sha1_hash");
        $sha1 = sha1( $notification_type. '&'. $operation_id. '&' . $amount . '&643&' . $datetime. '&'. $sender. '&' . $codepro. '&' . $secret_key. '&' . $label );
        
        $log = new Log;
        $log->data = $sha1_hash;
        $log->save();
        /*
        echo "notification_type ".$notification_type."<br/>"
                ."operation_id ".$operation_id."<br/>"
                ."amount ".$amount."<br/>"
                ."datetime ".$datetime."<br/>"
                ."sender ".$sender."<br/>"
                ."codepro ".$codepro."<br/>"
                ."label ".$label."<br/>"
                ."sha1_hash ".$sha1_hash."<br/>"
                .$sha1;
         */
    }
}
