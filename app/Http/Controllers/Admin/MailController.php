<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Emailcontact;
use App\Models\Boxemail;
use App\Models\MailBox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        $emails = Boxemail::all();
        return view("backend.pages.mailBox",compact('emails'));
    }

    public function store(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required",
            "message" => "required",
            "subject" => "required"
        ]);

        Boxemail::create([
            "name" => $request->name,
            'email' => $request->email,
            "message" => $request->message,
            "subject" => $request->subject
        ]);
        $EmailContact= ([
            "name" => $request->name,
            'email' => $request->email,
            "message" => $request->message,
            "subject" => $request->subject
        ]);

        Mail::to("admin@admin.com")->send(new Emailcontact($EmailContact));
        return redirect()->back()->with("succes",'you have send your message ');
    }

    public function checkEmail(Boxemail $email){
        $email->checkEmail = 1;
        $email->save();
        return redirect()->back();
    }





}
