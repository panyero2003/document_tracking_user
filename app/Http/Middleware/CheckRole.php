<?php

namespace App\Http\Middleware;

use Closure;

use Session;

class CheckRole
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
        if ($request->user() === null) {
            return response("Insufficient permissions", 401);
            
        }

        $actions = $request->route()->getAction();
        $roles = isset($actions['roles']) ? $actions['roles'] : null;

        if ($request->user()->hasAnyRole($roles) || !$roles) {
            return $next($request);
        }


                // return response("You do not have access to this module!", 401);
        return response('<div class="alert alert-warning">You do not have access to this module!</div>');
        // echo '<div class="result">Please tell them your</div> <div class="green">last name!</div> ';

    }
}
