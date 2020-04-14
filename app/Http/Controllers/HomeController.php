<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Contrack;
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
        $users = User::get();
        $contracks = Contrack::get();

        return view('welcome',compact('users','contracks'));
    }
}
