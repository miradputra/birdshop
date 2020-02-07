<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    /**
     * where to redirect users after login
     * 
     * @var string
     */
    protected $redirectTo ='index';
    /**
     * create a new controller instance
     * 
     * @return void
     */

    public function __cosntruct()
    {
        $this->middleware('guest')->except('logout');
    }
}
