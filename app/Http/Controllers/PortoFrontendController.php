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
use App\Models\delivery_charge;
use App\Models\user_address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Session;
use Validator;
use Auth;
use App\Models\user;
use App\Models\area;
use App\Models\user_otp;
use App\Models\order;
use App\Models\order_details;
use App\Models\product_stock;
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
    public function get_all_cart_info()
    {
        $data = "";
            $total = 0;
            $cart = session()->get('cart');

            foreach( $cart as $id => $details)
            {
                $total += $details['price'] * $details['quantity'];
            }
            $delivery_charge = delivery_charge::first()->unit_charge ;
            $sub_total = $total+$delivery_charge;
            foreach($cart as $id =>$details)
            {
                $data .= '  <tr class="product-row">
                <td class="product-col">
                    <figure class="product-image-container">
                        <a href="product.html" class="product-image">
                            <img src="'.$details['image'].'" alt="product">
                        </a>
                    </figure>
                    <h2 class="product-title">
                        <a href="#">'.$details['name'].'</a>
                    </h2>
                </td>
                <td>Tk '.$details['price'].'</td>
                <td>

                    <div">
                    <button class="minus dec_view_cart btn"  type="button"><i class="icon-minus"></i></button>
                    <input type="hidden" class="input_quantity">
                  <input type="hidden" name="hidden_product_id" value="'.$id.'">
                  <input class="quantity quantity-'.$id.'" min="0" name="quantity" value="'.$details['quantity'].'" type="number" id="quantity-'.$id.'" readonly="readonly"/>
                    <button class="plus inc_view_cart btn"  type="button"><i class="icon-plus"></i></button>
                </div>

                </td>
                <td>TK '.$details['price']*$details['quantity'].'</td>
            </tr>
            <tr class="product-action-row">
                <td colspan="4" class="clearfix">


                    <div class="float-right">

                        <a href="#" title="Remove product" class="btn-remove"><span class="sr-only">Remove</span></a>
                    </div><!-- End .float-right -->
                </td>
            </tr>
        ';
            }

    $total_cart = ' <tbody>
    <tr>
        <td>Subtotal</td>
        <td>TK '.$total.'</td>
    </tr>

    <tr>
        <td>Delivery Charge</td>
        <td>TK '.$delivery_charge.'</td>
    </tr>
</tbody>
<tfoot>
    <tr>
        <td>Order Total</td>
        <td>TK '.$sub_total.'</td>
    </tr>
</tfoot>'
;

$data.='<script src="assets/porto-theme/js/main.min.js"></script>';
echo json_encode(['cart_table'=>$data,'cart_total'=>$total_cart]);
    }
    public function view_cart()
    {


        return view('themes.porto.cart_all');
    }
    public function view_cart2()
    {


        return view('themes.porto.cart_all');
    }
    function viewIndex()
    {
       // $banners = banner::all();
       // $homepage_sections = homepage_section::with('product_list')->get();
       $banners = banner::where('status',1)->orderBy('order')->get();
       $categories = category::get();
       $homepage_section_content = homepage_section::where('status',1)->where('delete_status',0)->orderBy('section_order')->get();
       $company_info = company_info::first();
        //dd($homepage_sections);
        return view ('themes.porto.index',compact('banners','categories','homepage_section_content','company_info'));
       // return view('themes.porto.index', ['banners' => $banners, 'homepage_sections' => $homepage_sections]);
    }
    function viewAllProducts($cat, $sub_cat)
    {
       // file_put_contents("test.txt", "I am in category");
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
        //file_put_contents("test.txt", "I am in brand");
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
    function viewAllFlashDeals($id)
    {
        //$homepage_section_id = homepage_section::where('id',$id )->first()->id;
        $products = homepage_product_list::where('homepage_section_id', $id)->with('product')->get();
        return view('themes.porto.product.featured', ['products' => $products, 'cat_name' => 'Flash Deals']);
    }
    function viewSingleProduct($id)
    {
        $product = product::where('id', (int)$id)->with('images')->first();
        return view('themes.porto.product.single', ['product' => $product]);
    }

    function complete_order()
    {
        return view('themes.porto.complete_order');
    }

    function viewCartCheckout()
    {
        $areas = area::where('status',1)->get();

        $sub_total = 0;
        $cart = session()->get('cart');

        foreach( $cart as $id => $details)
        {
            $sub_total += $details['price'] * $details['quantity'];
        }
        $delivery_charge = delivery_charge::first()->unit_charge ;
        $total = $sub_total+$delivery_charge;
        return view('themes.porto.cart-checkout',compact('areas','cart','delivery_charge','total','sub_total'));
    }
    public function place_order(Request $request)
    {
        //session()->forget('cart');
        $rules = [
            'address_id'=>'required',

        ];



         $customMessages = [
            'address_id.required' => 'Please select or add an address.',


        ];
        $validator = Validator::make( $request->all(), $rules, $customMessages );
    if($validator->fails())
    {
        return redirect()->back()->with('errors',collect($validator->errors()->all()));
    }
        $address_id = $request->address_id;
        $delivery_date = $request->delivery_date;
        $delivery_time = $request->delivery_time;
        $cart = session()->get('cart');
        $total = 0;

        $user_id = 58;// auth()->user()->id;
        $order_no = 'UB'.$user_id.mt_rand(10000,99999);
        $area_id = user_address::where('id',$address_id)->first()->area_id;
       // $courier_man = 1;//$this->search_courier_man($area_id);



        foreach( $cart as $id => $details)
        {
           $total += $details['price'] * $details['quantity'];
           $remaining_stock = product_stock::where('product_id',$id)->first()->stock_amount;
           $stock = $remaining_stock-$details['quantity'];
           product_stock::where('product_id',$id)->update(['stock_amount'=>$stock]);


           order_details::create(['order_no'=>$order_no,'product_id'=>$id,'unit_quantity'=>$details['unit'],'count'=>$details['quantity'],'price'=>$details['price'],'product_type'=>'regular']);

        }
        $delivery_fee = delivery_charge::first()->unit_charge ;
        $order = order::create(['address_id'=>$address_id,'user_id'=>$user_id,'order_no'=>$order_no,'status'=>'pending','total_price'=>$total,'delivery_fee'=>$delivery_fee,'delivery_date'=>$delivery_date,'delivery_time'=>$delivery_time]);

        $status = $order->status;
        $order_no = $order->order_no;
        $order_date =  date("d-m-Y h:i:s", strtotime($order->created_at));
        $delivery_address = $order->address->address;

        $order_detail = order_details::where('order_no',$order_no)->get();
        $sub_total = 0;
        for($j=0;$j<sizeof($order_detail);$j++)
        {
            $sub_total+=$order_detail[$j]->price*$order_detail[$j]->count;
           // array_push($order_details,['id'=>$order_detail[$j]->id,'price'=>$order_detail[$j]->price,'count'=>$order_detail[$j]->count,'unit'=>$order_detail[$j]->unit_quantity,'name'=>$order_detail[$j]->product->name,'image'=>$this->base_url.$order_detail[$j]->product->thumbnail_image,'total'=>$order_detail[$j]->price*$order_detail[$j]->count]);

        }
        $delivery_charge = delivery_charge::first()->unit_charge;
        $total = $sub_total+$delivery_charge;
       // session()->forget('cart');
        return view('themes.porto.complete_order',compact('status','order_no','order_date','delivery_address','delivery_charge','total','sub_total','order_detail'));
       // $order_no = $order->order_no;

       // file_put_contents('test.txt',$address_id);
    }


    public function add_address(Request $request)
    {
        $user_id = 58;//Auth::user()->id;
        $request['user_id'] = $user_id;
        user_address::create($request->all());
    }

    public function get_all_address()
    {
        $user_id = 58;// Auth::user()->id;
        $datas = user_address::where('user_id',$user_id)->get();
        if(sizeof($datas)>0)
        {
        $response = ' <div class="form-check">
        <input class="form-check-input" type="radio" value='.$datas[0]->id.' name="address_id" id="address_id">
        <label class="form-check-label radio-label" for="flexRadioDefault1">
          '.$datas[0]->address_type.'
        </label>
        <label class="form-check-label radio-label" style="float:right" for="flexRadioDefault1">
        <button type="button" class="btn btn-success" onclick="edit_address_modal('.$datas[0]->id.')"><i class="icon-pencil icon-shop5" style="color:white;font-weight:bold; font-family: Linearicons, Bangla634, sans-serif;"></i></button>
        <button  type="button" class="btn-remove" onclick="delete_address('.$datas[0]->id.')" style="background-color:#f10000"></button>
        </label>
        <p><i class="icon-home4" style="color:black"></i>&nbsp'.$datas[0]->area->name.'<span style="color:black;font-weight:bolder">,&nbsp'.$datas[0]->address.'</span></p>

        <p><i class="icon-telephone" style="color:black"></i>&nbsp'.$datas[0]->contact_no.'</p>
    </div>';

        }

        for($i=1;$i<sizeof($datas);$i++)
        {
            $response.='  <div class="form-check">
            <input class="form-check-input" type="radio"  value='.$datas[$i]->id.' name="address_id" id="address_id">
            <label class="form-check-label radio-label" for="flexRadioDefault1">
              '.$datas[$i]->address_type.'
            </label>
            <label class="form-check-label radio-label" style="float:right" for="flexRadioDefault1">
            <button type="button" class="btn btn-success" onclick="edit_address_modal('.$datas[$i]->id.')"><i class="icon-pencil icon-shop5" style="color:white;font-weight:bold; font-family: Linearicons, Bangla634, sans-serif;"></i></button>
            <button  type="button" class="btn-remove" onclick="delete_address('.$datas[$i]->id.')"  style="background-color:#f10000"></button>
            </label>
            <p>'.$datas[$i]->area->name.'<span>'.$datas[$i]->address.'</span></p>

            <p>'.$datas[$i]->contact_no.'</p>
        </div>';
        }

        return $response;

    }

    public function delete_address($id)
    {
        user_address::where('id',$id)->delete();
    }
    public function update_address(Request $request)
    {
       $id = $request->id;
       user_address::where('id',$id)->update($request->all());
    }
    public function edit_address($id)
    {
        $data = user_address::where('id',$id)->first();
        echo json_encode($data);
    }


    public function send_otp(Request $request)
    {
    //   $validator=  $request->validate([
    //         'mobile_number' => 'required|regex:/01[13-9]\d{8}$/',
    //          ]);
         $validator = Validator::make($request->all(), [
                'mobile_number' => ['required', 'regex:/01[13-9]\d{8}$/'],
             ]);
        if($validator->fails())
        {
            return redirect()->back()->with('errors',collect($validator->errors()->all()));
        }
        $mobile_number = $request->mobile_number;
        $otp = mt_rand(1000,9999);
        $otp_token = $this->str_random(30);
        Session::put('otp_token',$otp_token);
        Session::put('mobile_number',$mobile_number);
       $this->otp($mobile_number,$otp);
        // $check_user = user::where('contact_no',$mobile_number)->first();
        // if(!$check_user)
        // {
        //     $user = new user();
        //     $user->contact_no = $mobile_number;
        //     $user->save();
        // }
        user_otp::create(['token'=>$otp_token,'otp'=>$otp]);
        return view('auth.otp',compact('mobile_number'));
       // $response = ['status_code'=>200,'otp_token'=>$otp_token];
        //return response($response, 200);
    }
    public function otp($mobile_number,$otp)
    {
        $mobile_number = '88'.$mobile_number;
        $url = "http://gsms.pw/smsapi";
  $data = [
    "api_key" => "C20003436040f26e6f69b0.10063984",
    "type" => "text",
    "contacts" => $mobile_number,
    "senderid" => "8809601001329",
    "msg" => "Your GOGO SHO OTP is ".$otp,
  ];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $response = curl_exec($ch);
  curl_close($ch);
  //return $response;

    }
    public function logout()
    {
        auth()->logout();
        return redirect()->to('/');
    }

    public function submit_otp(Request $request)
    {

        $token = Session::get('otp_token');
        $otp = $request->otp;
        $mobile_number = Session::get('mobile_number');
        $check = user_otp::where('token',$token)->where('otp',$otp)->first();

         $user = user::where('contact_no', $mobile_number)->first();


        if($check)
        {

             if($user)
             {
                Auth::login($user);
                return redirect()->to('/');
             }
             else
             {
                return view('auth.save_name');
             }
            //return response($response, 200);

        }
        else
        {
            return redirect()->back()->with('error','Otp Not Matched');
        }

        //return response($response, 200);
    }
}
