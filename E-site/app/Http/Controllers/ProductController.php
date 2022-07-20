<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
 
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
       ->select('products.*','cart.id as cart_id')
       ->get();

       $total_price = DB::table('cart')
       ->join('products','cart.product_id','=','products.id')
       ->where('cart.user_id',$userId)
       ->select('products.*','cart.id as cart_id')
       ->sum('products.price');

       return view('shoppingCart',['cartItems'=>$cartItems,'total_price'=>$total_price]);
    }

    function removeItem($id){

        Cart::destroy($id);

        return redirect('/shoppingCart');
    }

   function orderNow(Request $request){
    $userId = Session::get('user')['id'];
    $allCartItems = Cart::where('user_id',$userId)->get();

        foreach($allCartItems as $cart)
        {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_status = "pending";
            $order->address = $request->address;
            $order->save();

            Cart::where('user_id',$userId)->delete();
        }

    // $request->input();

    return redirect('/');
    }

    function register(Request $request){
        $customer = new User;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->save();
        return redirect('/login');
        
    }
}