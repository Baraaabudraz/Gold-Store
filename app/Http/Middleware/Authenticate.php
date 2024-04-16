<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */

    public function handle($request, Closure $next, ...$guards)
    {
        $this->guards = $guards;

        return parent::handle($request, $next, ...$guards);
    }
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if (Arr::first($this->guards) === 'user') {
                return route('loginView');
            }else{
                return route('admin.login_view');
            }
        }


//        if (!$request->expectsJson()) {
//            if ($this->auth->guard('user')) {
//                return route('selection');
//
//            } elseif ($this->auth->guard('admin')) {
//                return route('admin.login_view');
//            } else {
//                return route('selection');
//            }
//        }
    }
}
