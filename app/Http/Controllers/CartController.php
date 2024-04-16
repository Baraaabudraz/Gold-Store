<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Charge;



class CartController extends Controller
{
    public function addToCart(Product $product){
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));

        }else{
            $cart=new Cart();
        }
        $cart->add($product);
        session()->put('cart',$cart);
        notify()->success(trans('home_trans.Product added to cart'));
        return redirect()->back();

    }
    public function showCart(){
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));

        }else{
            $cart=null;
        }
        $products = Product::query()->latest()->get();
        return view('frontend.shop-cart',compact('cart','products'));

    }
    public function updateCart(Request $request,Product $product){
        $request->validate([
           'qty'=>'required|numeric|min:1'
        ]);
        $cart=new Cart(session()->get('cart'));
        $cart->updateQty($product->id,$request->qty);
        session()->put('cart',$cart);
        notify()->success('Cart updated');
        return redirect()->back();


    }
    public function removeCart(Product $product){
        $cart=new Cart(session()->get('cart'));
        $cart->remove($product->id);
        if ($cart->totalQty<=0){
            session()->forget('cart');
        }else{
            session()->put('cart',$cart);

        }
        notify()->success('Cart updated');
        return redirect()->back();
    }

    public function checkout(){
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        }else{
            $cart=null;
        }
        return view('frontend.shop-checkout',compact('cart'));

    }
    public function charge(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $price= session()->get('cart')->totalPrice;
        try {
           $charge= Charge::create([
                'currency'=>'USD',
                'source'=>$request->stripeToken,
                'amount'=>$price,
                'description'=>'Test',
            ]);
           $chargeId = $charge['id'];
           if ($chargeId){
               auth(guard: 'user')->user()->orders()->create([
                   'cart'=>serialize(session()->get('cart'))
               ]);
               session()->forget('cart');
               notify()->success('Payment successful!');
               return redirect()->to('/');
           }else{
               notify()->error('Error!');
               return redirect()->back();
           }

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function order(){
        $orders = auth()->user()->orders;
        $carts =$orders->transform(function($cart,$key){
            return unserialize($cart->cart);
        });
        return view('frontend.show-orders',compact('carts'));

    }
    //for admin
    public function userOrder(){
            $orders = Order::query()->latest()->paginate(5);
            return view('cms.products_orders.index',compact('orders'));
    }
    public function viewUserOrder($userid,$orderid){
        $user = User::query()->find($userid);
        $orders = $user->orders->where('id',$orderid);
        $carts =$orders->transform(function($cart,$key){
            return unserialize($cart->cart);

        });
        return view('cms.products_orders.show',compact('carts'));

    }
}
