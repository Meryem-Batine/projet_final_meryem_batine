<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produt;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    // public function index(){
    //     return view('frontend.pages.shop');
    // }
    public function index(Request $request){
        $bestsellers = Produt::where('stock', '<=', 5)->get();
        $categories = Categorie::all();
        $products= Produt::latest()->paginate(9);
        return view("frontend.pages.shop",compact('bestsellers',"categories","products"));
    }


    public function filterProducts(Request $request)
    {
        $categoryId = $request->input('category');
    
        $query = Produt::query();
    
        if (!empty($categoryId)) {
            $query->where('category_id', $categoryId);
        }
    
        $products = $query->paginate(9);
        $bestsellers = Produt::where('stock', '<=', 5)->get();
        $categories = Categorie::all();
    
        return view("frontend.pages.shop", compact('bestsellers', 'categories', 'products'));
    }

public function sort(Request $request)
{
    if ($request->criteria == "name") {
        $products = Produt::orderBy('name', 'asc')->paginate(9);
    }elseif ($request->criteria == "price") {
        $products = Produt::orderBy('price', 'asc')->paginate(9);
    }else{
        $products= Produt::latest()->paginate(9);
    }
    $categories = Categorie::all();
    $bestsellers = Produt::where('stock', '<=', 5)->get();

    return view('frontend.pages.shop', compact('products', 'categories', 'bestsellers'));
}
}
