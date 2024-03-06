<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;
use Illuminate\Support\Facades\Redirect;

class RestricUserMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ipAddress = $request->ip();
        if (Session::has('ipAddress')) {
            $msg="Previous sessions in progress!";
            return response(view('secondsession',compact('msg')));
        }

        Session::put('ipAddress',$ipAddress);
        return $next($request);

    }
}
