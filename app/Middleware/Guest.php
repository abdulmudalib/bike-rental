<?php

Namespace App\Middleware;

use Xcholars\Http\Request;

use Xcholars\Support\Proxies\Auth;

use Xcholars\Support\Proxies\Response;

use Xcholars\Middleware\Middleware;

use Closure;

class Guest extends Middleware

{
   /**
    * Handle the user request.
    *
    * @param object \Xcholars\Http\Request  $request
    * @param object Closure $next
    * @return mixed
    */
    public function handle(Request $request, Closure $next)
    {
        if(!$this->isValidPass())
        {
            if ($request->isAjax())
            {
                return Response::withView('/000'); 
            }
            return Response::withView('/000');
        }
        
        if (Auth::check())
        {
            if ($request->isAjax())
            {
                return Response::withAjaxRedirect('/');
            }

            return Response::withRedirect('/');
        }

        return $next($request);
    }
}
