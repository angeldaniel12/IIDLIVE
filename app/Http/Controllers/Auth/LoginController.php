<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    public $maxAttempts = 5;
    public $decayMinutes = 60;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('login');
}
    public function sendFailedLoginResponse(Request $request)
    {
        // Obtener el número máximo de intentos fallidos permitidos
        $maxAttempts = 5;
    
        // Obtener el número actual de intentos fallidos de inicio de sesión
        $attempts = session()->get('login.attempts', 0);
    
        // Calcular el número de intentos restantes antes de bloquear la cuenta
        $remainingAttempts = $maxAttempts - $attempts;
    
        // Si se alcanza el número máximo de intentos fallidos, bloquear la cuenta
        if ($attempts >= $maxAttempts) {
            // Bloquear la cuenta
            session()->put('login.blocked', true);
    
            // Calcular el tiempo restante antes de que la cuenta se desbloquee (por ejemplo, 5 minutos)
            $blockTime = 5; // tiempo en minutos
            session()->put('login.blocked_until', now()->addMinutes($blockTime));
    
            // Redirigir con un mensaje de cuenta bloqueada y tiempo restante
            return redirect()->back()->with('error', 'Has excedido el límite de intentos de inicio de sesión. La cuenta ha sido bloqueada durante ' . $blockTime . ' minutos.');
           
        }
    
        // Si no se alcanza el límite, incrementar el contador de intentos y redirigir con un mensaje de intentos restantes
        session()->put('login.attempts', $attempts + 1);
        return redirect()->back()->with('status', 'Credenciales incorrectas. Intentos restantes: ' . $remainingAttempts);
    }
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials, $request->filled('remember'))) {
        // Si la autenticación es exitosa
        return redirect()->intended('home');
    }

    // Si la autenticación falla
    return back()->withErrors([
        'email' => 'Las credenciales proporcionadas no son válidas.',
    ])->withInput($request->only('email', 'remember'));
}

    // public function login(Request $request)
    // {
    //     // Verificar si la cuenta está bloqueada
    //     if ($this->isAccountBlocked($request)) {
    //         return redirect()->back()->with('error', 'La cuenta está bloqueada. Comunícate con el administrador.');
    //     }

    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         // La autenticación fue exitosa
    //         return redirect()->intended('home');
    //     }

    //     // Incrementar el contador de intentos fallidos
    //     $this->incrementLoginAttempts($request);

    //     // Devolver la respuesta de inicio de sesión fallida
    //     return $this->sendFailedLoginResponse($request);
    // }

    // protected function incrementLoginAttempts(Request $request)
    // {
    //     // Obtener el contador actual de intentos fallidos de inicio de sesión
    //     $attempts = $request->session()->get('login_attempts', 0);

    //     // Incrementar el contador
    //     $request->session()->put('login_attempts', $attempts + 1);
    // }

    // protected function sendFailedLoginResponse(Request $request)
    // {
    //     // Obtener el número máximo de intentos fallidos permitidos
    //     $maxAttempts = 5;

    //     // Obtener el número actual de intentos fallidos de inicio de sesión
    //     $attempts = $request->session()->get('login_attempts', 0);

    //     // Si se alcanza el número máximo de intentos fallidos, bloquear la cuenta
    //     if ($attempts >= $maxAttempts) {
    //         // Bloquear la cuenta solo si el usuario está autenticado
    //         if (Auth::check()) {
    //             $user = Auth::user();
    //             $user->blocked = true;
    //             $user->save();
    //         }

    //         return redirect()->back()->with('error', 'Has excedido el límite de intentos de inicio de sesión. La cuenta ha sido bloqueada.');
    //     }

    //     // Si no se alcanza el límite, devolver la respuesta con el mensaje de error
    //     return redirect()->back()
    //         ->withInput($request->only('email', 'remember'))
    //         ->withErrors(['email' => trans('auth.failed')])
    //         ->with('error', 'Credenciales incorrectas. Intentos restantes: ' . ($maxAttempts - $attempts));
    // }

    // protected function isAccountBlocked(Request $request)
    // {
    //     // Verificar si el usuario está autenticado y si su cuenta está bloqueada
    //     return Auth::check() && Auth::user()->blocked;
    // }
}
