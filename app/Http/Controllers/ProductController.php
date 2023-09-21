<?php

namespace App\Http\Controllers;

use App\Models\Produt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $allProducts = Produt::all();
        $products = Produt::paginate(8);
        return view("frontend.pages.category", compact("products", "allproducts"));
    }

    // public function admin()
    // {
    //     $products = Produt::all();
    //     $categories = Category::all();
    //     return view("backend.pages.products", compact("products", "categories"));
    // }


    // public function store(Request $request)
    // {
    //     request()->validate([
    //         "image" => ["required", "image", "mimes:png,jpg,svg,gif", "max:2048"],
    //         "name" => ["required"],
    //         "desc" => ["required"],
    //         "prix" => ["required", "integer"],
    //         "stock" => ["required", "integer"],
    //         "category" => ["required"],
    //     ]);

    //     $imgSrc = request()->file("image");
    //     $imgSrc->storePublicly("img/products/", "public");
    //     $imgName = $imgSrc->hashName();

    //     Produt::create([
    //         "name" => $request->name,
    //         "desc" => $request->desc,
    //         "image" => $imgName,
    //         "stock" => $request->stock,
    //         "prix" => $request->prix,
    //         "category" => $request->category,
    //         "user_id" => auth()->user()->id,
    //     ]);

    //     // Toastr()->success("Product Successfully Created!");

    //     return redirect()->back();
    // }

    public function show(Produt $product)
    {
        $take = Produt::all()->shuffle()->take(5);
        $user = Auth::user();
        return view("frontend.partials.product_show", compact("product", "take", "user"));
    }

}
