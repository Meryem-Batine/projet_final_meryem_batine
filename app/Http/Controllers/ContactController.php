<?php

namespace App\Http\Controllers;

use App\Models\Infos;
use Illuminate\Http\Request;

class ContactController extends Controller
{
        public function index(){
            $infos = Infos::all();
            return view("frontend.pages.contact",compact("infos"));
        }
}
