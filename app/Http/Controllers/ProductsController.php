<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Company;
class ProductsController extends Controller
{
    public function index($subdomain)
    {
        $companies =  Company::all();
        $products = Company::with('products')
            ->whereSubdomain($subdomain)
            ->firstOrFail();
            $currentsubdomain = $products->subdomain;
            // dd($products->products);
        return view('companyproducts.index', compact('products','companies','currentsubdomain'));
    }


    public function show($product)
    {

        $companies =  Company::all();
        $mightlike =  Product::where('featured', 2)->inRandomOrder()->get();
        $product = Product::with('company')->where('product_id', $product)->first();
        // dd($product);
        return view('companyproducts.show', compact('product','companies','mightlike'));
    }


    public function featured()
    {
        $companies =  Company::all();
        $products =  Product::where('featured', 2)->inRandomOrder()->paginate(21);
        $currentsubdomain = null;
        // dd($products);
        return view('featured.index', compact('products','companies','currentsubdomain'));
    }




 
}
