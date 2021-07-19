<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;
use App\Models\category;
use App\Models\company_info;
use App\Models\homepage_product_list;
use App\Models\homepage_section;
use App\Models\product_brand;
use App\Models\product;
use App\Models\sub_category;
use Illuminate\Support\Facades\View;

class CitroenFrontendController extends Controller
{
    //
    public function __construct()
    {
        $categories = category::with('sub_category')->get()->sortBy(function($item) {

        });
        $brands = product_brand::all();
        $company_info = company_info::first();
        $logo = json_decode(file_get_contents(storage_path('info.json')))->logo;

        View::share(['categories' => $categories, 'brands' => $brands, 'logo' => $logo, 'company_info' => $company_info]);
    }
    function viewIndex()
    {
        $banners = banner::all();
        $homepage_sections = homepage_section::with('product_list')->get();
        $most_sold = [];
        // Getting cateogry wise most sold products
        foreach(category::all() as $cat) {
            array_push($most_sold, $this->sortProductByOrderCountWithCategory($cat->id));
        }
        //dd($homepage_sections);
        return view('themes.citroen.index', ['banners' => $banners, 'homepage_sections' => $homepage_sections, 'most_sold' => $most_sold]);
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
            $products = product::where('category_id', (int)$cat)->with('brand')->paginate(15);
            $recommended_product = product::where('category_id', (int)$cat)->with('order_details')->paginate(7)->sortBy(function($item) {
                return count($item->order_details);
            });
        } else if($cat === '-1' && $sub_cat === '-1') {
            $products = product::paginate(15);
            // $recommended_product = product::with('order_details')->paginate(7)->sortBy(function($item) {
            //     return count($item->order_details);
            // });
            //dd($products);
        } else {
            $products = product::where('sub_category_id', (int)$sub_cat)->paginate(15);
            $recommended_product = product::where('sub_category_id', (int)$sub_cat)->with('order_details')->paginate(7)->sortBy(function($item) {
                return count($item->order_details);
            });
        }
        $banners = banner::all();
        return view('themes.citroen.product.all', ['products' => $products, 
            'recommended_product'=>$recommended_product, 
            'cat_name' => $cat_name, 
            'sub_cat_name' => $sub_cat_name, 
            'banners' => $banners,
            'cat' => $cat,
            'sub_cat' => $sub_cat
        ]);
    }
    function sortProductByOrderCount()
    {
        $products = product::with('order_details')->get()->sortBy(function($item) {
            return count($item->order_details);
        });
        return $products;
    }
    function sortProductByOrderCountWithCategory($cat, $pagnate=10)
    {
        $products = product::where('category_id', $cat)->with('order_details')->with('category')->paginate($pagnate)->sortBy(function($item) {
            return count($item->order_details);
        });
        //dd($products);
        return $products;
    }
    function viewSingleProduct($id)
    {
        $product = product::where('id', (int)$id)->with('images')->with('category')->with('sub_category')->with('stock')->first();
        return view('themes.citroen.product.single', ['product' => $product]);
    }
    
}
