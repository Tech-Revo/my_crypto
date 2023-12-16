<?php

namespace App\Http\Controllers;

use App\Http\Requests\Email\CreateComposeRequest;
use App\Mail\EmailTemplate;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function composeEmailIndex(){
        return view('admin.email.compose_email');
    }

    public function sendEmailIndex()
    {
        return view('admin.email.send_email');
    }

    public function sendEmail(CreateComposeRequest $request){

        try{
            $email=DB::transaction(function()use($request){
                $email=Email::create([
                    'subject'=>$request->subject,
                    'email'=>$request->email,
                    'message'=>$request->message,
                    'user_id'=>auth()->user()->id
                    
                ]);
                Mail::to($request->email)->send(new EmailTemplate($email));
                return $email;
                
            });
            if($email){
                sweetalert()->addSuccess('Email is send successfully!');
                return back();
            }
            
        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());
            
        }
        
    }
}