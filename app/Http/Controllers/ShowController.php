<?php

namespace App\Http\Controllers;

use App\Models\Produt;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(Produt $product){
        return view('frontend.pages.show',compact("product"));
    }
}
