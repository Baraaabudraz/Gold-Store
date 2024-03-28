<?php

namespace App\Http\Controllers;

use App\Mail\OrderUser;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index()
    {
        return view('cms.selection');
    }
    public function product_order(Request $request)
    {

        $request->validate([
            'quantity' => 'required|integer',
            'product_id' => 'required|integer',
        ]);
        $data = $request->only([
            'quantity', 'product_id','industry_id'
        ]);
        $data['user_id'] = Auth::id();;
        $order = Order::query()->create($data);
        if ($order) {
            Mail::queue(new OrderUser($order));
            notify()->success(trans('dashboard_trans.Add order successfully'));
            return redirect()->back();
        } else {
            notify()->error(trans('dashboard_trans.Failed to add order'));
        }
    }
}




