<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Symfony\Component\HttpFoundation\Response;

class CheckAluno
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Facade Auth 
        if (Auth::check() && Auth::user()->tipo === 'Aluno') {
            return $next($request);
        }

        //ADM ou Professor, será redirecionado ao erro
        abort(403, 'Acesso não autorizado. Esta página é exclusiva para alunos.');
    }
}