<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{


    /**
     * HomeController constructor.
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
        return view('home');
    }



    public function getLogUserData()
    {
        $data['user'] = \Auth::user()->name;
        return $data;
    }
}
