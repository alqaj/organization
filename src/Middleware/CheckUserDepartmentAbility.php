<?php

namespace Alliq\Organization\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserDepartmentAbility
{
    public function handle($request, Closure $next, $department_code)
    {
        if (Auth::check()) {  // Ensure user is authenticated
            $user = Auth::user();
            if(!$user->hasDepartment($department_code))
            {
                abort(404);
            }
        }
        return $next($request); 
    }
}
