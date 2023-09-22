<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Infos;
use Illuminate\Http\Request;

class InfosController extends Controller
{
    public function index(){
        $infos = Infos::all();
        return view('backend.pages.infos',compact("infos"));
    }

    public function update (Request $request , Infos $info) {
        $request->validate([
            "ville" => "required",
            "adrs" => "required",
            "phone" => "required",
            "emploi" => "required",
            "email" => "required",
            "title" => "required"
        ]);

        $info->update([
            "ville" => $request->ville,
            "adrs" => $request->adrs,
            "phone" => $request->phone,
            "emploi" => $request->emploi,
            "email" => $request->email,
            "title" => $request->title
        ]);
        
        return redirect()->back();
    }
}
