<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\MenuTrait;

class CobaController extends Controller
{
	use MenuTrait;
	
    public function index()
    {
    	 return $this->BuildMenu();
    }
}
