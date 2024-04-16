<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Industry;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\File;

class ProfileController extends Controller
{
    public function index()
    {
        $users=Auth::user();
        return view('frontend.profile',compact('users'));
    }
    public function edit($id)
    {
        //
        $users=Auth::user()->findOrFail($id);
        return view('frontend.edit-profile',compact('users'));
    }

    public function update(Request $request, $id)
    {
        $request->request->add(['id'=>$id]);
        $request->validate([
            'name'=>'required|string|min:3|max:55,name,'.$id,
            'user_name'=>'required|string|regex:/^\S*$/|alpha|unique:users,user_name,'.$id,
            'email'=>'required|string|email|unique:users,email,'.$id,
            'password'=>'required|string|min:8',
            'address'=>'required|string|min:3|max:50',
            'country'=>'required',
            'mobile' =>'required|numeric|unique:users,mobile,'.$id,
        ]);
        $users=User::query()->find($id);
        $users->update([
            'name'=>$request->name,
            'user_name'=>$request->user_name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'address'=>$request->address,
            'country'=>$request->country,
            'mobile' =>$request->mobile,
//
        ]);
        session()->flash('alert-type','alert-success');
        session()->flash('message',trans('home_trans.Profile Edit successfully'));
        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
