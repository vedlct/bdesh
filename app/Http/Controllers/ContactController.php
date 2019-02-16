<?php
namespace App\Http\Controllers;
use App\AverageCost;
use App\RohingyaProject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Session;
class ContactController extends Controller
{
    public function index(){}
    public function sendMail(Request $r){
        $name=$r->name;
        $email=$r->email;
        $phone=$r->phone;
        $subject=$r->subject;
        $message=$r->message;
        $data = array('name'=>$r->name,'email'=>$r->email,'phone'=>$r->phone,'subject'=>$r->subject,'text'=>$r->message);
        try{
            Mail::send('mail.contact',$data, function ($messages) use ($data) {

                $messages->to('Info@bdeshfoundation.org','BDesh foundation.org')->subject($data['subject']);
                $messages->from($data['email'],$data['name']);

            });
            Session::flash('mail-message', '1');
            //return back();
        }
        catch (\Exception $ex) {
            Session::flash('mail-message', "0");
            // return $ex;
        }
        return back();
    }
}