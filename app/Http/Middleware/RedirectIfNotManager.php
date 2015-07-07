<?php

namespace bens_portfolio\Http\Middleware;

use Closure;

class RedirectIfNotManager
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

        if ( ! $request->user()->isATeamManager())
        {
            return redirect('blog');
        }

        return $next($request);
    }
}
