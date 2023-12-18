<?php

namespace App\Http\Controllers;

use App\Models\ClientBalance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientBalanceController extends Controller
{
    public function index(){
        
        $user = Auth::user();
        $clientBalance = ClientBalance::where('client_id', $user->id)->first();
        return view('admin.mybalance.view_balance',compact('clientBalance'));
        
    }

    public function loadClientBalanceIndex($client_id){
        
        $clientBalance=ClientBalance::where('client_id',$client_id)->first();
        if(!$clientBalance){
            sweetalert()->addWarning('Client Balance ID Not Found!');
            return back();
        }
        $client=User::find($client_id);
        
        return view('admin.mybalance.load_coin',compact('clientBalance','client'));
    }

    public function loadClientBalance(){
        
    }
}