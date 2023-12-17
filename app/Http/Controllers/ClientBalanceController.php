<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientBalanceController extends Controller
{
    public function index(){
        return view('admin.mybalance.view_balance');
        
    }
}