<?php

namespace App\Http\Controllers;

use App\Mail\NewUserEmail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index(){
    	$users=User::latest()->paginate(10);
    	return view('cms.user.index',compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //

        $request->validate([
            'name'=>'required|string|min:3|max:55',
            'user_name'=>'required|string|unique:users|regex:/^\S*$/|alpha',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|string|min:8',
            'address'=>'required|string|min:3|max:50',
            'country'=>'required',
            'mobile' =>'required|numeric|unique:users',
        ]);
        $users=new User();
        $users->name=$request->get('name');
        $users->user_name=$request->get('user_name');
        $users->email=$request->get('email');
        $users->password=Hash::make($request->password);
        $users->address=$request->get('address');
        $users->mobile=$request->get('mobile');
        $users->country=$request->get('country');
        $isSaved=$users->save();
        if ($isSaved){
            session()->flash('alert-type','alert-success');
            session()->flash('message',trans('dashboard_trans.You have been successfully registered, log in please'));
            return redirect()->back();
        }else{
            session()->flash('alert-type','alert-danger');
            session()->flash('message',trans('dashboard_trans.Make sure the data entered is correct and try again!'));
            return redirect()->back();

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $users=User::query()->findOrFail($id);
        return view('cms.user.edit',compact('users'));
    }

    public function update(Request $request, $id)
    {
        //
        $request->request->add(['id'=>$id]);
        $request->validate([
            'id'=>'required|integer|exists:users',
            'name'=>'required|string|min:3|max:55',
            'user_name'=>'required|string|regex:/^\S*$/|unique:users,user_name,'.$id,
            'email'=>'required|string|email|unique:users,email,'.$id,
            'password'=>'required|string|min:8',
            'address'=>'required|string|min:3|max:50',
            'country'=>'required',
            'mobile' =>'required|numeric',
        ]);
        $users=User::query()->find($id);
        $users->name=$request->get('name');
        $users->user_name=$request->get('user_name');
        $users->email=$request->get('email');
        $users->password=Hash::make($request->password);
        $users->address=$request->get('address');
        $users->mobile=$request->get('mobile');
        $users->country=$request->get('country');
        $isSaved=$users->save();
        if ($isSaved){
            session()->flash('alert-type','alert-success');
            session()->flash('message',trans('dashboard_trans.User Updated successfully'));
            return redirect()->back();
        }else{
            session()->flash('alert-type','alert-danger');
            session()->flash('message',trans('dashboard_trans.Failed to update this user!'));
            return redirect()->back();

        }
    }

    public function destroy($id)

    {
        $isDeleted=User::destroy($id);
        if($isDeleted){
            return response()->json([
                'title'=>'success',
                'icon'=>'success',
                'text'=>trans('dashboard_trans.User deleted successfully'),
            ]);
        }else{
            return response()->json([
                'title'=>'error',
                'icon'=>'error',
                'text'=>trans('dashboard_trans.Failed to delete this user!'),
            ]);
        }

    }
}


//$users = User::query()->where('is_admin','!=',1)->get();
