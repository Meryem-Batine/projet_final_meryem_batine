<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // public function index()
    // {
    //     $allProducts = Produt::all();
    //     $products = Produt::paginate(8);
    //     return view("frontend.pages.category", compact("products", "allproducts"));
    // }

    // public function show(Produt $product)
    // {
    //     $take = Produt::all()->shuffle()->take(5);
    //     $user = Auth::user();
    //     return view("frontend.partials.product_show", compact("product", "take", "user"));
    // }
    public function show(Produt $product)
    {
        $products = Produt::all();

        return view("frontend.pages.show", compact("product", "products"));
    }


    public function admin()
    {
        $products = Produt::all();
        $categories = Categorie::all();
        return view("backend.pages.product", compact("products", "categories"));
    }

    public function destroy(Produt $product)
    {
            Storage::disk("public")->delete('/img/photo/' . $product->image);
        $product->delete();
        return back()->with("error" , "product deleted successfully");
    }


    public function update(Request $request, Produt $product)
    {
        request()->validate([
            "name" => ["required"],
            "description" => ["required"],
            "stock" => ["required", "integer"],
            "prix" => ["required", "integer"],
        ]);

        $img = request()->file("image");
        if ($img) {

            request()->validate([
            "image" => ["required", "image", "mimes:png,jpg,jpeg,gif,svg,webp", "max:2048"],
            ]);

            $img->storePublicly("img/photo/", "public");
            $imgName = $img->hashName();
        }

        $product->update([
            "name" => $request->name,
            "description" => $request->description,
            "image" => $imgName ?? $product->image,
            "stock" => $request->stock,
            "prix" => $request->prix,
            // "user_id" => auth()->user()->id,
            "categorie_id" => $request->category, // Utilisez $request->category pour la catégorie

        ]);

        // Toastr()->success("Product Updated Successfully!!");
        return back()->with("warning" , "product updated successfully");

    }
    public function store(Request $request)
    {
        request()->validate([
            "name" => ["required"],
            "description" => ["required"],
            "image" => ["required", "image", "mimes:png,jpg,svg,gif,webp", "max:2048"],
            "stock" => ["required", "integer"],
            "prix" => ["required", "integer"],
            "categorie" => ["required"],
        ]);

        $imgSrc = request()->file("image");
        $imgSrc->storePublicly("img/photo/", "public");
        $imgName = $imgSrc->hashName();

        Produt::create([
            "name" => $request->name,
            "description" => $request->description,
            "image" => $imgName,
            "stock" => $request->stock,
            "prix" => $request->prix,
            "categorie_id" => $request->categorie,
            // "user_id" => auth()->user()->id,
        ]);

        return back()->with("success" , "product add successfully");

        return redirect()->back();
    }

}
