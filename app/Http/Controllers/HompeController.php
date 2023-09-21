<?php

namespace App\Http\Controllers;

use App\Mail\Emailcontact;
use App\Mail\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HompeController extends Controller
{
    public function index(){
        return view('frontend.pages.home');
    }

    public function suscribemail(Request $request){
        $request->validate([
            "email" => "required",
        ]);
        if (Auth::user() ) {
            $SubMail = Auth::user()->name;
        }else{
            $SubMail = "user";
        }
        Mail::to($request->email)->send(new Subscribe($SubMail));
        return redirect()->back()->with("success",'You are involved in that');
    }
}
