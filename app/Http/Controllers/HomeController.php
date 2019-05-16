<?php

namespace App\Http\Controllers;

use App\Tour;
use DB;
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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $tours = DB::table('tours')->where('discount', '>',10)->get();
       
        return view('home', ['tours' => $tours]);
    }
}
