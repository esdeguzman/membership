<?php

namespace App\Http\Middleware;

use Closure;

class CheckIdleState
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
        $user = user(); // save user instance so we can update it

        if (user()->visited_at and 
                now()->subMinutes(5)->gte(user()->visited_at)) {

            logoutUser();

            return redirect()->route('login')
                ->with('status', 'You have been logout due to inactivity');

        } else if (isAuthenticated()) {

            updateVisitedAt();
            
        }

        return $next($request);
    }
}
