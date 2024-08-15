<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAkses
{
    private $roleHierarchy = [
        'Super Admin' => 3,
        'Admin' => 2,
        'Karyawan' => 1,
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $userRole = auth()->user()->role;

        if ($this->roleHierarchy[$userRole] >= $this->roleHierarchy[$role]) {
            return $next($request);
        }

        $url = "/" . auth()->user()->role;
        return redirect($url)->withErrors('Tidak dapat mengakses halaman ini.');
    }
}
