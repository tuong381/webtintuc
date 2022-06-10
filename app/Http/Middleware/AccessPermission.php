<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Toastr;
use Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

class AccessPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(Auth::user()->hasRole('Quản trị viên')){

             return $next($request);
        }

    //    $alert='Bạn không có quyền truy cập vào trang quản lý nhân viên';


     //   return redirect()->back()->with('alert',$alert);
         Toastr::warning('Bạn không có quyền truy cập vào trang quản lý nhân viên');

         return redirect::to('/Dashboard');




    }
}
