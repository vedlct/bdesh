<?php

namespace App\Http\Controllers;

use App\Donation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use DB;
class DonationController extends Controller
{
//    public function show(){
//        //`country``city``state``donationscol``firstName``lastName``email``company``phone``addr1``addr2``zip`
//    }

    public function show(){
        return view('Admin.Donation.show');
    }
    public function getDonationData(Request $request){
        $donation = Donation::select('donations.*', 'projects.pName')
        ->leftjoin('projects', 'fkprojectId','projectId');
        $datatables = DataTables::of($donation);
        return $datatables->make(true);
    }
    public function getTodayData(Request $request){
        $donation = Donation::select('donations.*')->where('donationDate',Carbon::today()->format('Y-m-d'));
        $datatables = DataTables::of($donation);
        return $datatables->make(true);
    }
}
