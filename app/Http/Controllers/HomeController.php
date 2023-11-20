<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\products;
use App\Models\Cart;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\UserSignup;
use App\Models\Catagory;
use App\Models\Order;
use Session;
use Stripe;
use PDF;
class HomeController extends Controller
{
    public function index()
    {   
        
        $product=products::paginate(2);
        return view('home.userpage',compact('product'));
    }

    public function index2()
    {   
        
        $product=products::paginate(3);
        return view('home.guestuser',compact('product'));
    }


    public function product_details($product_id)
    {
        $product=products::find($product_id);

        return view('home.product_details',compact('product'));
    }


    public function add_cart(Request $request,$product_id)
    { 
    
        $store = session('user'); // Assuming $store holds the username
        $user = UserSignup::where('username', $store)->first();
        $product = products::where('product_id', $product_id)->first();
        $check=$request->days;
        
        $days = $product->days;
            
            $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;
            $cart->username=$user->username;

            $cart->product_title=$product->product_title;
            $cart->vendor_name=$product->vendor_name;
            $cart->Product_id=$product->product_id;
            $cart->image=$product->image;
            $cart->quantity=$request->quantity;
            if ($check>=$days){
                $cart->day=$check;
            }
            else{
                return view('home.showcart');

            }
            
            if($product->discounted_price!=null)
            {
                $cart->price=$product->discounted_price * $request->quantity * $request->days;
            }
            else
            {
                $cart->price=$product->price * $request->quantity * $request->days;
            }
            
            

            $cart->save();

        Alert::success('Product Added Successfully','We have added product to the cart');

            return redirect()->back();
            }

    public function show_cart()
    {
        $username = session('user');
        $cart=cart::where('username','=',$username)->get();
        return view('home.showcart',compact('cart'));

    }
        
    public function remove_cart($product_id)
    {
        $cart=cart::find($product_id);
        $cart->delete();
        return redirect()->back();
    }
      

    public function product_show()
    {
       
        return view('home.product_show');
    }


}

