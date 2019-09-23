<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\MenuTrait;
use Auth;

class HomeController extends Controller
{
    use MenuTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $menu = $this->BuildMenu();
        // return $menu;
        return view('home', compact('menu'));
    }
}
