<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Product;
use App\Category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth')->except(['index','customerservice']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

     
        return view('welcome');

    }

    public function customerservice()
    {

     
        return view('customerservice');

    }

    public function contact()
    {

     
        return view('contact');

    }


    public function policy()
    {

     
        return view('policy');

    }

    public function datacenter()
    {

     
        return view('datacenter');

    }
    
}
