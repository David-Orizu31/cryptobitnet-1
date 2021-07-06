<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Product;
use App\Category;
use Mail;
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


    public function contacted(Request $request)
    {
        // dd($request);//
        $dataemail = array(
            'email' => $request->email,
            'name' =>  $request->name,
            'topic' =>  $request->topic,
            'phone' =>  $request->phone ?? null,
            'messagenow' =>  $request->yourmessage ?? null,
        );
        // dd($dataemail);
        Mail::send('email.contacted', $dataemail, function($message) use ($dataemail){
        $message->to('support@cryptobitnet.com');
        $message->subject('Contact us non-signedup user');
        });
    flash('Message Sent Successfully')->success();
    return redirect()->back();
    }

}
