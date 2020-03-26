<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()){    //hàm kiểm tra xem người dùng đã đăng nhập hay chưa
            $currentUser = Auth::user();
            if ($currentUser->role == User::ADMIN){
                return $next($request);
            }
            return redirect()->to("/");
        }
        return redirect()->to("/login");
    }
}
