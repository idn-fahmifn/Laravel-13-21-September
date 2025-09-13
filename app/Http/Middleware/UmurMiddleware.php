<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UmurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $umur = $request->session()->get('age'); //mendapatkan nilai yang diinputkan
        if ($umur >= 18) {
            return $next($request); //perintah mengizinkan akses pada route
        }

        return redirect()->route('form.umur')
        ->with('failed', 'Umur kamu belum cukup');


    }
}
