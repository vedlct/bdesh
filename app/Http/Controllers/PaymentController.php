<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Margules\bplib\BluePay;

class PaymentController extends Controller
{
    public function makePayment(Request $r){
        $payment = new BluePay();
        $payment->setCustomerInformation(array(
            'firstName' => $r->firstName,
            'lastName' => $r->lastName,
            'addr1' => $r->addr1,
            'addr2' => $r->addr2,
            'city' => 'City',
            'state' => 'IL',
            'zip' =>$r->zip,
            'country' =>$r->country,
            'phone' => $r->phone,
            'email' =>$r->email
        ));

        $payment->setCCInformation(array(
            'cardNumber' => $r->cardNumber, // Card Number: 4111111111111111
            'cardExpire' => $r->cardExpire, // Card Expire: 12/25
            'cvv2' => $r->cvv2 // Card CVV2: 123
        ));

        $payment->sale('3.00'); // Sale Amount: $3.00

        // Makes the API request with BluePAy
        $payment->process();

        // Reads the response from BluePay
        if($payment->isSuccessfulResponse()){
            echo
                'Transaction Status: '. $payment->getStatus() . "<br/>" .
                'Transaction Message: '. $payment->getMessage() . "<br/>" .
                'Transaction ID: '. $payment->getTransID() . "<br/>" .
                'AVS Response: ' . $payment->getAVSResponse() . "<br/>" .
                'CVS Response: ' . $payment->getCVV2Response() . "<br/>" .
                'Masked Account: ' . $payment->getMaskedAccount() . "<br/>" .
                'Card Type: ' . $payment->getCardType() . "<br/>" .
                'Authorization Code: ' . $payment->getAuthCode() . "<br/>";
        } else{
            echo $payment->getMessage() . "<br/>";
        }

    }
}
