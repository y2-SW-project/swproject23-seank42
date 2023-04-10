<?php

namespace App\Http\Controllers;

use App\Models\Movie;
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
    public function index()
    {
        $station = Station::all();
        $station = Station::paginate(10);
        // $station = Movie::with('newreleases')->get();
 
         return view('home')->with('station', $station);
       // return view('home');
    }
}
