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
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

     $companies =  Company::all();
       $randomproducts =             Product::with('company')->where('featured', '2')->get();
    //    dd($randomproducts);
   $highdemands = Product::with('company:id,company_name')->orderBy('order_amount', 'desc')->take(10)->get();
             $categories =       Category::with('products')->get();
    // dd($category);
    //    $highdemands =             Product::with('company')->orderBy('order_amount', 'desc')->take(10)->get();
        return view('welcome', compact('companies','randomproducts','highdemands','categories'));

    }
}
