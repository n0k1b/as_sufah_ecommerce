<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product_brand;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PortoFrontendController extends Controller
{
    //
    public function __construct()
    {
        $categories = category::all();
        $brands = product_brand::all();

        View::share(['categories' => $categories, 'brands' => $brands]);
    }
    function viewIndex()
    {
        return view('themes.porto.index');
    }
    function viewAllProducts($cat, $sub_cat)
    {
        $products = [];
        if($sub_cat === '-1') {
            $products = product::where('category_id', (int)$cat)->get();
        }
        $products = product::where('sub_category_id', (int)$sub_cat)->get();
        return view('themes.porto.product.all', ['products' => $products]);
    }
    function viewSingleProduct($id)
    {
        $product = product::where('id', (int)$id)->with('images')->first();
        return view('themes.porto.product.single', ['product' => $product]);
    }
    function viewCartCheckout()
    {
        return view('themes.porto.cart-checkout');
    }
}
