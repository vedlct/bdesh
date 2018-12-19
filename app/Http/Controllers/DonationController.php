<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class DonationController extends Controller
{
//    public function show(){
//        //`country``city``state``donationscol``firstName``lastName``email``company``phone``addr1``addr2``zip`
//    }

    public function show(){
        return view('Admin.Donation.show');
    }
    public function getDonationData(Request $request){
        $donation = Donation::select('donations.*')->get();
        $datatables = DataTables::of($donation);
        return $datatables->make(true);
    }
}
