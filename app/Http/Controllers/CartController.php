<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    function add_to_cart($product_id, $quantity)
    {
        $cart = session()->get('cart');
        if($cart === null) {
            $cart = [];
        }
        if(isset($cart[$product_id])) {
            $cart[$product_id]['quantity'] = $quantity;
        } else {
            $product = product::where('id', $product_id)->first();
            $props = Array(
                'name' => $product->name,
                'image' => $product->thumbnail_image,
                'price' => $product->price,
                'quantity' => (int)$quantity,
                'unit'=>$product->unit->unit_quantity.' '.$product->unit->unit_type
            );
            $cart[$product_id] = $props;
        }
        session()->put('cart', $cart);
        return json_encode($cart);
    }
    function get_cart_details()
    {
        return session()->get('cart');
    }
    function delete_item($product_id)
    {
        $cart = session()->get('cart');
        unset($cart[$product_id]);
        session()->put('cart', $cart);
        return $cart;
    }
}
