<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest',['except' => ['logout','getLogout'] ]);
    }

    public function guestLogin()
    {
        $email = 'guest@example.com';
        $password = 'guest0123';

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('group.list');
        }

        return redirect('/');
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/login');
    }
}
