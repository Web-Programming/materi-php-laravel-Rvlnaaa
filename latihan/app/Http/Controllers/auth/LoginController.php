<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home'; // default

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Override method bawaan setelah login sukses.
     */
    protected function authenticated(Request $request, $user)
    {
        if ($user->level === 'admin') {
            return redirect('/admin');
        } elseif ($user->level === 'dosen') {
            return redirect('/dosen');
        } elseif ($user->level === 'mahasiswa') {
            return redirect('/mahasiswa');
        }

        return redirect('/home'); // fallback jika level tidak dikenali
    }
}
