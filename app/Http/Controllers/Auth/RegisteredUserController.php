<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validação e regra de negócio
        $request->validate([ 
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'tipo' => ['required'],
            'identificador' => ['required_if:tipo,Aluno,Professor', 'nullable', 'string', 'max:255'],
            'curso' => ['required_if:tipo,Aluno', 'nullable', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // 1. Pega o usuário logado no sistema
        $usuarioLogado = auth()->user();

        // 2. VERIFICAÇÃO DE SEGURANÇA: Se não tiver ninguém logado ou se não for ADM, impede o cadastro
        if (!$usuarioLogado || $usuarioLogado->tipo !== 'ADM') {
            return redirect()->route('login')->with('error', 'Você precisa estar logado como ADM para cadastrar usuários.');
        }

        // 3. Como o método 'newFromBuilder' que vimos no seu User.php vai transformar 
        // o $usuarioLogado em uma instância de ADM automaticamente, agora podemos chamar a função com segurança:
        $usuarioLogado->criar_conta($request->only([
            'name',
            'email', 
            'tipo', 
            'identificador', 
            'curso', 
            'password'
        ]));

        return redirect(route('register'))->with('status', 'Cadastrado com sucesso!');
    }
}