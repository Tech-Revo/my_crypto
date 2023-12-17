<?php

namespace App\Http\Controllers;

use App\Models\ClientBalance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientBalanceController extends Controller
{
    public function index(){
        
        $user = Auth::user();
        $clientBalance = ClientBalance::where('client_id', $user->id)->first();
        return view('admin.mybalance.view_balance',compact('clientBalance'));
        
    }
}