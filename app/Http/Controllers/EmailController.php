<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function composeEmailIndex(){
        return view('admin.email.compose_email');
    }

    public function sendEmailIndex()
    {
        return view('admin.email.send_email');
    }
}