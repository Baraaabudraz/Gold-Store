<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index()
    {
        if (Auth::guard('admin')->check()){
            $orders=Order::query()->latest()->paginate(10);
        }else{
            $orders = Order::query()->with('product')
                ->where('industry_id',Auth::id())
                ->latest()->paginate(10);
        }

        return view('cms.products_orders.index',compact('orders'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        $order = Order::with('product')->where('user_id',$id)->latest()->paginate(5);
        return view('frontend.show-orders',compact('order'));
    }

    public function edit(Order $order)
    {
    }

    public function update(Request $request, Order $order)
    {
    }

    public function destroy($id)
    {
        //
        $isDeleted=Order::destroy($id);
        if($isDeleted){
            return response()->json([
                'title'=>'success',
                'icon'=>'success',
                'text'=>trans('dashboard_trans.Order deleted successfully'),
            ]);
        }else{
            return response()->json([
                'title'=>'error',
                'icon'=>'error',
                'text'=>trans('dashboard_trans.Failed to delete this order!'),
            ]);
        }
    }
}
