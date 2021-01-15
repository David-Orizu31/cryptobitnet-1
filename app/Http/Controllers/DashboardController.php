<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Models\User;
use App\History;
use App\UserNotification;
use Carbon\Carbon;
use Mail;
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
        $user = \Auth::user()->id;
        $nots =  UserNotification::where('user_id', $user)->orderBy('id','desc')->get();
        $unread =  UserNotification::where('user_id', $user)->where('seen','2')->count();
        // dd($unread);
        return view('dashboard.overview',compact('nots','unread'));
    }

    public function settings()
    {
        $user = \Auth::user()->id;
        $nots =  UserNotification::where('user_id', $user)->orderBy('id','desc')->get();
        $unread =  UserNotification::where('user_id', $user)->where('seen','2')->count();
        return view('dashboard.settings',compact('nots','unread'));
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
    public function activity()
    {
        $user = \Auth::user()->id;

        $nots =  UserNotification::where('user_id', $user)->orderBy('id','desc')->get();
        $unread =  UserNotification::where('user_id', $user)->where('seen','2')->count();
       $histories = History::where('user_id', $user)->orderBy('id','desc')->get();
    //    dd($histories);

        return view('dashboard.activity',compact('histories','nots','unread'));
    }


    public function deposit(Request $request)
    {
        $user = \Auth::user()->id;
        $nots =  UserNotification::where('user_id', $user)->orderBy('id','desc')->get();
        $unread =  UserNotification::where('user_id', $user)->where('seen','2')->count();
        return view('dashboard.deposit',compact('nots','unread'));
    }


    public function withdraw()
    {
        $user = \Auth::user()->id;
        $eth = \Auth::user()->eth;
        $bitcoin = \Auth::user()->bitcoin;
        $nots =  UserNotification::where('user_id', $user)->orderBy('id','desc')->get();
        $unread =  UserNotification::where('user_id', $user)->where('seen','2')->count();
         $hists =  History::where('user_id' , $user)->orderBy('id','desc')->get()->take(5);
    // dd($hists);
    return view('dashboard.withraw',compact('eth','bitcoin','hists','nots','unread'));
}



    public function withdrawdone(Request $request)
    {


        $user = \Auth::user()->id;

        $package = \Auth::user()->package;
        if($request->choice == 'btc'){
            $balance = \Auth::user()->bitcoin;

            $total =  $balance - $request->withdrawn;
             $history =  new History;

             $history->currency_name = 'Bitcoin';
             $history->transaction_balance = $request->withdrawn;
             $history->trans_status = 'Pending';
             $history->trans_package = $request->package;
             $history->trans_action = 'Credit';
             $history->trans_wallet_address = $request->walletaddress;
             $history->user_id = $user;
             $history->save();

             User::where('id', $user)->update(['bitcoin' => $total]);
        }elseif($request->choice == 'eth'){
            $balance = \Auth::user()->eth;

           $total =  $balance - $request->withdrawn;
            $history =  new History;

            $history->currency_name = 'Ethereum';
            $history->transaction_balance = $request->withdrawn;
            $history->trans_status = 'Pending';
            $history->trans_package = $package;
            $history->trans_action = 'Credit';
            $history->trans_wallet_address = $request->walletaddress;
            $history->user_id = $user;
            $history->save();

            User::where('id', $user)->update(['eth' => $total]);
        }


    //    dd($histories);

    flash('Widthrawal Pending. Please check your status to verify successful payment')->success();
    return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function usernotification($id)
    {
        $user = \Auth::user()->id;
        $nots =  UserNotification::where('user_id', $user)->orderBy('id','desc')->get();

        $show =  UserNotification::where('user_id', $user)->where('id', $id)->first();
        // dd($show);
        if($show->seen == '2'){
           UserNotification::where('id', $id)->update(['seen'=> 1]);

        }
        $unread =  UserNotification::where('user_id', $user)->where('seen','2')->count();
         // dd($show);
        return view('dashboard.message',compact('show','nots','unread'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function support()
    {


        $user = \Auth::user()->id;
        $nots =  UserNotification::where('user_id', $user)->orderBy('id','desc')->get();
        $unread =  UserNotification::where('user_id', $user)->where('seen','2')->count();


        return view('dashboard.support',compact('nots','unread'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function supportsent(Request $request)
    {
        // dd($request);//
           $dataemail = array(
            'email' => $request->email,
            'name' =>  $request->name,
            'supportoption' =>  $request->supportoption,
            'phone' =>  $request->phone,
            'usermessage' =>  $request->usermessage,

        );

        Mail::send('email.support', $dataemail, function($message) use ($dataemail){

        $message->to('support@cryptobitnet.com');
        $message->subject('You Have Been Contacted');


    });
    flash('Message Sent Successfully')->success();
    return redirect()->back();
    }

    public function paypalrequest(Request $request)
    {
        // dd($request);//
           $dataemail = array(
            'email' => $request->email,
            'name' =>  $request->name,
            'phone' =>  $request->phone ?? null,
            'username' =>  $request->username ?? null,


        );

        Mail::send('email.paypal', $dataemail, function($message) use ($dataemail){

        $message->to('support@cryptobitnet.com');
        $message->subject('Paypal Requested');


    });

    return redirect()->back();
    }


}
