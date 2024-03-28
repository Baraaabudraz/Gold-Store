<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
//    public function handle(Request $request, Closure $next, ...$guards)
//    {
//        $guards = empty($guards) ? [null] : $guards;
//        switch ($guards) {
//            case 'user':
//                if (Auth::guard($guards)->check()) {
//                    Auth::guard($guards)->user();
//                    return redirect()->route('home');
//                }
//                break;
//            case 'admin':
//                if (Auth::guard($guards)->check()) {
//                    $admin = Auth::guard($guards)->user();
//                    if ($admin->status == 'Active') {
//                        return redirect()->route('dashboard');
//                    }
//                }
//                break;
//            case 'industry':
//                if (Auth::guard($guards)->check()) {
//                    $industries = Auth::guard($guards)->user();
//                    if ($industries->status == 'Active') {
//                        return redirect()->route('home');
//                    }
//                }
//                break;
//        }
//    }


 /**
  * another way auth.
  */

  public function handle($request, Closure $next,)
  {

      if (auth('user')->check()) {
          return redirect(RouteServiceProvider::HOME);
      }

      if (Auth::guard('admin')->check()) {
          $admins=Auth::guard('admin')->user();
          if($admins->status == 'Active'){
              return redirect((RouteServiceProvider::ADMIN));
          }else{
              $request->session()->invalidate();
              return redirect()->guest(route('admin.login_view'));
          }
      }
      return $next($request);
  }

    }
