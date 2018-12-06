<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Margules\bplib\BluePay;

class PaymentController extends Controller
{
    public function makePayment(Request $r){

        $payment = new BluePay();
        $payment->setCustomerInformation(array(
            'firstName' => 'Bob',
            'lastName' => 'Tester',
            'addr1' => '1234 Test St.',
            'addr2' => 'Apt #500',
            'city' => 'Testville',
            'state' => 'IL',
            'zip' =>'54321',
            'country' => 'USA',
            'phone' => '1231231234',
            'email' => 'test@bluepay.com'
        ));

        $payment->setCCInformation(array(
            'cardNumber' => '4111111111111111', // Card Number: 4111111111111111
            'cardExpire' => '1225', // Card Expire: 12/25
            'cvv2' => '123' // Card CVV2: 123
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
    public function makeDonation(Request $r){

        $payment = new BluePay();
        $payment->setCustomerInformation(array(
            'firstName' => $r->firstName,
            'lastName' => $r->lastName,
            'addr1' => $r->addr1,
            'addr2' => $r->addr2,
            'city' => $r->city,
            'state' => $r->state,
            'zip' =>$r->zip,
            'country' =>$r->country,
            'phone' => $r->phone,
            'email' =>$r->email
        ));

        $payment->setCCInformation(array(
            'cardNumber' => $r->cardNumber, // Card Number: 4111111111111111
            'cardExpire' => $r->cardExpireMonth.$r->cardExpireYear, // Card Expire: 12/25
            'cvv2' => $r->cvv2 // Card CVV2: 123
        ));

        $payment->sale($r->amount); // Sale Amount: $3.00

        // Makes the API request with BluePAy
        $payment->process();

        // Reads the response from BluePay
        if($payment->isSuccessfulResponse()){

            return $data=array(
                'donateStatus'=>1,
                'TransactionStatus'=>$payment->getStatus(),
                'TransactionMessage'=>$payment->getMessage(),
                'TransactionID'=>$payment->getTransID(),
                'AVSResponse'=>$payment->getAVSResponse(),
                'CVSResponse'=>$payment->getCVV2Response(),
                'MaskedAccount'=>$payment->getMaskedAccount(),
                'CardType'=>$payment->getCardType(),
                'AuthorizationCode'=>$payment->getAuthCode(),
                'donateSuccMsg'=>'<p>Transaction ID: ' . $payment->getTransID() . '</p><br><p>Approval Code: ' . $payment->getAuthCode() . '</p>'
                );
//            Session::flash('SuccessMessage', '<p>Transaction ID: ' . $payment->getTransID() . '</p><br><p>Approval Code: ' . $payment->getAuthCode() . '</p>');
        } else{
//            Session::flash('ErrorMessage', ''.$payment->getMessage().'');

//            return $payment->getMessage() . "<br/>";

            return $data=array(
                'donateStatus'=>0,
                'donateErrMsg'=>$payment->getMessage(),

            );
        }


    }
}
