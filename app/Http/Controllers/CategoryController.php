<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\sub_category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    static function all()
    {
        $categories = category::all();
        return $categories;
    }
    static function allJSON()
    {        
        return json_encode(CategoryController::all());
    }
    static function subcategoriesOfJSON($id)
    {
        return json_encode(sub_category::where('category_id', $id)->get());
    }
}
