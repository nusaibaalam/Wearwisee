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


    

    public function product_show()
    {
       
        return view('home.product_show');
    }

   
    //mehedimahfuzlam sprint 2 
    public function product_search(Request $request)
    {
    $search_text = $request->search;
    $product = products::where('product_title', 'LIKE', "%" . $search_text . "%")->paginate(2);


    $catagory = Catagory::where('catagory_name', 'LIKE', "%" . $search_text . "%")->paginate(2);
    return view('home.userpage', compact('product', 'catagory'));
    }


}