<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\login;

class Level
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
        $login = login::where('username',$request->username)->first();
        if ($login->level == 'admin') {
            return redirect('dashboard');
        } elseif ($login->level == 'siswa') {
            return redirect('user');
        } elseif ($login->level == 'guru') {
            return redirect('user1');
        }
        return $next($request);
    }
}
