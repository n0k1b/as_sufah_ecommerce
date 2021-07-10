<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\category;
use App\Models\company_info;
use App\Models\homepage_product_list;
use App\Models\homepage_section;
use App\Models\product_brand;
use App\Models\product;
use App\Models\sub_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PortoFrontendController extends Controller
{
    //
    public function __construct()
    {
        $categories = category::all();
        $brands = product_brand::all();
        $company_info = company_info::first();
        $logo = json_decode(file_get_contents(storage_path('info.json')))->logo;

        View::share(['categories' => $categories, 'brands' => $brands, 'logo' => $logo, 'company_info' =>$company_info]);
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
        file_put_contents("test.txt", "I am in category");
        $products = [];
        //dd(array($cat, $sub_cat));
        $cat_name = null;
        $sub_cat_name = null;
        if($cat !== '-1') {
            $cat_name = category::where('id', $cat)->first()->name;
        } 
        if($sub_cat !== '-1') {
            $sub_cat_name = sub_category::where('id', $sub_cat)->first()->name;
        }        
        
        if($sub_cat === '-1' && $cat !== '-1') {
            $products = product::where('category_id', (int)$cat)->get();
        } else if($cat === '-1' && $sub_cat === '-1') {
            $products = product::all();
            //dd($products);
        } else {
            $products = product::where('sub_category_id', (int)$sub_cat)->get();
        }
        
        return view('themes.porto.product.all', ['products' => $products, 'cat_name' => $cat_name, 'sub_cat_name' => $sub_cat_name]);
    }
    function viewProductByBrand($brand)
    {
        file_put_contents("test.txt", "I am in brand");
        $brand_name = product_brand::where('id', $brand)->first()->brand_name;
        $products = product::where('brand_id', (int)$brand)->get();
        return view('themes.porto.product.all', ['products' => $products, 'cat_name' => $brand_name, 'sub_cat_name' => null]);
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
        } else {
            session()->flash('browse_error', 'Please select atleast one category or brand');
            return redirect()->route('porto-home');
        }
        return view('themes.porto.product.all', ['products' => $products, 'cat_name' => null, 'sub_cat_name' => null]);
    }
    function viewAllFlashDeals()
    {
        $homepage_section_id = homepage_section::where('section_name', 'Flash deals')->first()->id;
        $products = homepage_product_list::where('homepage_section_id', $homepage_section_id)->with('product')->get();
        return view('themes.porto.product.featured', ['products' => $products, 'cat_name' => 'Flash Deals']);
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
