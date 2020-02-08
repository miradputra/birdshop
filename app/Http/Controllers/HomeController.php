<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Laratrust::hasRole('admin')) {
            return redirect('admin.admin');
        }
        if(Laratrust::hasRole('member')) {
            return redirect('frontend.index');
        }
        // return view('home');
    }
}
