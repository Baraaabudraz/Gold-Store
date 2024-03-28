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

    public function edit_industry($id)
    {
            $categories=Category::get();
            $industry=Auth::user()->findOrFail($id);
            return view('frontend.edit-industry-profile',compact('industry','categories'));
    }
    public function update_industry(Request $request, $id){

        $request->request->add(['id'=>$id]);
        $request->validate([
            'name.*'  =>  'required',
            'email'    =>  'required|string|email|unique:industries,email,'.$id,
            'password'=>'required|string',
            'state' =>  'required|string',
            'category_id'       =>'required|exists:categories,id',
            'industrial_area'   =>  'required|string',
            'industry_phone'    =>  'required|string|numeric|unique:industries,industry_phone,'.$id,
            'salesperson_phone' =>  'required|string|numeric|unique:industries,salesperson_phone,'.$id,
            'salesperson_email' =>  'required|string|email|unique:industries,salesperson_email,'.$id,
            'address'   =>  'required|string',
            'website'   =>  'string|url|nullable',
            'work_time.*'=>'required|string',
        ]);
        $data=$request->only([
            'name','email','password'=>Hash::make($request->password),'state','industrial_area','industry_phone','salesperson_phone',
            'salesperson_email','address', 'website', 'category_id',
        ]);
        $data['work_time']=json_encode($request->get('work_time'));
        $industry=Industry::query()->find($id);
        $industry->update($data);
        session()->flash('alert-type','alert-success');
        session()->flash('message',trans('home_trans.Profile Edit successfully'));
        return redirect()->back();

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
