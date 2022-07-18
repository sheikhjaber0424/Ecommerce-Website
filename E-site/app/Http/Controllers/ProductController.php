<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
 
class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }

    function search(Request $request)
    {
        
       $data = Product::where('name', 'like','%'.$request->input('query').'%')->get();
      return view('search',['products'=>$data]);
    }

    function addToCart(Request $request)
    {
        if($request->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

   public static function cartItem()
    {
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }

    function shoppingCart(){
        $userId = Session::get('user')['id'];
        $cartItems = DB::table('cart')
       ->join('products','cart.product_id','=','products.id')
       ->where('cart.user_id',$userId)
       ->select('products.*')
       ->get();

       return view('shoppingCart',['cartItems'=>$cartItems]);
    }
}
