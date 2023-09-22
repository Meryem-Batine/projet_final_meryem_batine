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
    // public function index(Request $request){
    //     $bestsellers = Produt::where('stock', '<=', 5)->get();
    //     $categories = Categorie::all();
    //     $products= Produt::latest()->paginate(9);
    //     return view("frontend.pages.shop",compact('bestsellers',"categories","products"));
    // }


//     public function filterProducts(Request $request)
//     {
//         $categoryId = $request->input('category');
    
//         $query = Produt::query();
    
//         if (!empty($categoryId)) {
//             $query->where('category_id', $categoryId);
//         }
    
//         $products = $query->paginate(9);
//         $bestsellers = Produt::where('stock', '<=', 5)->get();
//         $categories = Categorie::all();
    
//         return view("frontend.pages.shop", compact('bestsellers', 'categories', 'products'));
//     }

// public function sort(Request $request)
// {
//     if ($request->criteria == "name") {
//         $products = Produt::orderBy('name', 'asc')->paginate(9);
//     }elseif ($request->criteria == "price") {
//         $products = Produt::orderBy('price', 'asc')->paginate(9);
//     }else{
//         $products= Produt::latest()->paginate(9);
//     }
//     $categories = Categorie::all();
//     $bestsellers = Produt::where('stock', '<=', 5)->get();

//     return view('frontend.pages.shop', compact('products', 'categories', 'bestsellers'));
// }


public function index()
{
    $allproducts = Produt::all();
    $categories = Categorie::all();

    $products = Produt::simplePaginate(6);
    $shw_products = $allproducts->count();
    $shw_categories=$categories->count();

    return view("frontend.pages.shop", compact("products", "allproducts","shw_products","categories","shw_categories"));
}


public function showCategory(Request $request)
{
$categoryId = $request->get('category'); // Utilisez get() pour obtenir la valeur du paramètre 'category'.

$query = Produt::query();

if (!empty($categoryId)) {
    $query->where('categorie_id', $categoryId);
}

$categories = Categorie::all();
$products = $query->paginate(8); // Assurez-vous de paginer les résultats.

return view("frontend.pages.shop", compact('categories', 'products'));
}


// public function sort(Request $request)
// {
//     if ($request->criteria == "name") {
//         $products = Product::orderBy('name', 'asc')->paginate(9);
//     }elseif ($request->criteria == "prix") {
//         $products = Product::orderBy('prix', 'asc')->paginate(9);
//     }else{
//         $products= Product::latest()->paginate(9);
//     }
//     $categories = Categorie::all();

//     return view('frontend.pages.shop', compact('products', 'categories'));
// }




// public function sort(Request $request)
// {
//     $criteria = $request->input('criteria');

//     // Construire la requête pour trier les produits en fonction du critère sélectionné
//     $query = Product::query();

//     if ($criteria === 'price_asc') {
//         $query->orderBy('prix', 'asc');
//     } elseif ($criteria === 'price_desc') {
//         $query->orderBy('prix', 'desc');
//     } elseif ($criteria === 'name') {
//         $query->orderBy('name', 'asc');
//     } elseif ($criteria === 'product') {
//         // Si aucun critère n'est sélectionné, vous pouvez trier par défaut comme vous le souhaitez.
//         $query->orderBy('prix', 'asc');
//     }

//     $products = $query->paginate(8); // Assurez-vous de paginer les résultats.

//     $categories = Categorie::all();

//     return view("frontend.pages.shop", compact('categories', 'products'));
// }




public function sort(Request $request)
{
$slct = $request->input('slct');

// Construire la requête pour trier les produits en fonction du critère sélectionné
$query = Produt::query();

if ($slct === 'price_asc') {
    $query->orderBy('prix', 'asc');
} elseif ($slct === 'price_desc') {
    $query->orderBy('prix', 'desc');
} elseif ($slct === 'name_asc') {
    $query->orderBy('name', 'asc');
} elseif ($slct === 'name_desc') {
    $query->orderBy('name', 'desc');
} elseif ($slct === 'product') {
    // Si aucun critère n'est sélectionné, vous pouvez trier par défaut comme vous le souhaitez.
    $query->orderBy('prix', 'asc');
}

$products = $query->paginate(8);

$categories = Categorie::all();

return view("frontend.pages.shop", compact('categories', 'products'));
}

}
