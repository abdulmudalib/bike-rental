<?php

Namespace App\Middleware;

use Xcholars\Http\Request;

use Xcholars\Middleware\Middleware;

use Xcholars\Support\Proxies\Response;

use Closure;

use Xcholars\Support\Proxies\Auth as Login;

class M000 extends Middleware
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

        return $next($request);
    }
}
