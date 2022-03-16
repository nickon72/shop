<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class Administrator {
    public function handle($request, Closure $next, $guard = null) {
        // если это не администратор — показываем 404 Not Found

        if (!auth()->user()->admin) {
             abort(404);
       }
        return $next($request);

    }

    /**
     * Get the path the user should be redirected to when they are not admin.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */

//    protected function redirectTo($request) {
//        if (!auth()->user()->admin) {
//            return route('user.index');
//        }
//    }

}
