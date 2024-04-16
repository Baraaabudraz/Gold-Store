<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function addToWishlist(Product $product){
        if (session()->has('wishlist')){
            $wishList = new Wishlist(session()->get('wishlist'));
        }else{
            $wishList = new Wishlist();
        }
        $wishList->add($product);
        session()->put('wishlist',$wishList);
        notify()->success('Product added to Wishlist');
        return redirect()->back();
    }

    public function showWishlist($id){
        if (session()->has('wishlist')){
            $wishList = new  Wishlist(session()->get('wishlist'));
        }else{
            $wishList = null;
        }
        $users = User::findOrFail($id);
        $products = Product::query()->latest()->get();
        return view('frontend.wishlist',compact('wishList','products','users'));
    }

    public function removeWishlist(Product $product){
        $wishList = new Wishlist(session()->get('wishlist'));
        $wishList->remove($product->id);
        if ($wishList){
            session()->forget('wishlist');
        }else{
            session()->put('wishlist',$wishList);

        }
        notify()->success('Wishlist updated');
        return redirect()->back();
    }
}
