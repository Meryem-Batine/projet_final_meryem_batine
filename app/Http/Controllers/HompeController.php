<?php

namespace App\Http\Controllers;

use App\Mail\Emailcontact;
use App\Mail\Subscribe;
use App\Models\Produt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HompeController extends Controller
{
    public function index(){

        $products =Produt::all();
        $lastimg = $products->slice(-4);
        $imgcrsl = Produt::all()->shuffle()->take(3);
        $myprdct =Produt::all()->shuffle()->take(8);
        $bestseller = Produt::where('stock', '<=', 5)->get();
        return view('frontend.pages.home',compact("products","lastimg","imgcrsl","myprdct","bestseller"));
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
