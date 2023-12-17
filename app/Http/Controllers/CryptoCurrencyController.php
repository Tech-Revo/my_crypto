<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CryptoCurrencyController extends Controller
{
    public function index(){
        return view('admin.cryptocurrency.create_crypto');
    }
}