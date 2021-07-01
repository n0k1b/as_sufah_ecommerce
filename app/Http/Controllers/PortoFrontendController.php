<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\category;
use App\Models\homepage_section;
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
        $banners = banner::all();
        $homepage_sections = homepage_section::with('product_list')->get();
        //dd($homepage_sections);
        return view('themes.porto.index', ['banners' => $banners, 'homepage_sections' => $homepage_sections]);
    }
    function viewAllProducts($cat, $sub_cat)
    {
        $products = [];
        if($sub_cat === '-1') {
            $products = product::where('category_id', (int)$cat)->get();
        } else {
            $products = product::where('sub_category_id', (int)$sub_cat)->get();
        }
        
        return view('themes.porto.product.all', ['products' => $products]);
    }
    function viewAllProductsByBrandOrCategory()
    {
        $products = [];
        $category_id = request()->get('category');
        $brand_id = request()->get('brand');

        if($category_id !== null && $brand_id !== null) {
            $products = product::where('category_id', $category_id)->where('brand_id', $brand_id)->get();
        } else if($category_id !== null) {
            $products = product::where('category_id', $category_id)->get();
        } else if($brand_id !== null) {
            $products = product::where('brand_id', $brand_id)->get();
        }
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
