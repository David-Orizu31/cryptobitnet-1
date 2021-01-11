<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
 class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function overview()
    {
        
        return view('dashboard.overview'); 
    }

    public function settings()
    {
        return view('dashboard.settings'); 
    }


    public function othersettings(Request $request)
    {
      
        $date =  Carbon::parse($request->day_of_birth);
        $usableDate = $date->format('Y-m-d');
      
       $user = \Auth::user()->id;
                User::where('id', $user)->update(['dob' => $usableDate, 'name' => $request->name, 'mobilenumber' => $request->mobile, 'wallet_address' => $wallet_address ?? null]);
                flash('Successfully Saved')->success();
                return redirect()->back();
    }

    public function passwordchange(Request $request)
    {
        $request->validate([
           
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

       
      
        $pword =  Hash::make($request->password);
       
      
       $user = \Auth::user()->id;
                User::where('id', $user)->update(['password' => $pword]);
                flash('Successfully Saved')->success();
                return redirect()->back();
    }

    




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
