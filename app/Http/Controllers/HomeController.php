<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function rumah()
    {
        return view('dashboard.rumah');
    }
    public function menu()
    {
        return view('dashboard.menu');
    }
    public function event()
    {
        return view('dashboard.event');
    }
    public function feedback()
    {
        return view('dashboard.layanan.feedback');
    }
}
