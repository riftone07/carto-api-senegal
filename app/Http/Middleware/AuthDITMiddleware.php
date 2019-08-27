<?php

namespace App\Http\Middleware;

use Closure;
use Auth0\SDK\JWTVerifier;

class AuthDITMiddleware
{
  /**
  * Run the request filter.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \Closure  $next
  * @return mixed
  */
  public function handle($request, Closure $next)
  {
    if(!$request->hasHeader('Authorization')) {
      return response()->json('Not Authorize', 401);
    }

    if($request->header('Authorization') == "IuO2PlpQ25pYCpbIXllBQG6Ndz3d1hoJ") {

      return $next($request);
    }
    if($request->header('Authorization') != "IuO2PlpQ25pYCpbIXllBQG6Ndz3d1hoJ") {

      return response()->json('No token valid', 401);
    }


  }


}
