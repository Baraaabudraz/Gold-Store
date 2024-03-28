<?php
namespace App\Http\Traits;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

trait AuthTrait{
    public function checkGuard($request){
        if ($request->type =='user'){
            $guardName='user';
        }
        elseif ($request->type == 'admin'){
            $guardName='admin';
        }else{
            $guardName='user';
        }
        return $guardName;
    }
    public function redirect($request){
        if ($request->type == 'user'){
            notify()->success(trans('home_trans.You have successfully logged in'));
            return redirect()->intended(RouteServiceProvider::HOME);

        } elseif ($request->type == 'admin'){
            $admins=Auth::guard('admin')->user();
            if ($admins->status == 'Active'){
                return redirect()->intended(route('dashboard'));
            }else{
                $request->session()->invalidate();
                return redirect()->guest(route('admin.login_view'));
            }

        }

    }
}
