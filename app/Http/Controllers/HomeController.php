<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        $total_user = User::where('status', 1)->where('role', 1)->get()->count();
        $total_admin = User::where('status', 1)->where('role', 2)->get()->count();
        $disabled_user = User::where('status', -1)->get()->count();

        return view('backend.dashboard', compact('total_user', 'total_admin', 'disabled_user'));
    }
}
