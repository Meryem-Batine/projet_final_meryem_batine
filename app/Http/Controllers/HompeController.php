<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HompeController extends Controller
{
    public function index(){
        return view('frontend.pages.home');
    }
}