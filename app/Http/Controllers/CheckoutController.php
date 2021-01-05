<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Rave;
use App\Order;
use App\Product;
use App\OrderProduct;
use DB;
use App\Company;
use Gloudemans\Shoppingcart\Facades\Cart;
class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function initialize(Request $request)
    {
        // dd($request);
        // dd($request->session()->get('total'));

      try  {
    

            $order = new Order;
            $order->user_id = auth()->user() ? auth()->user()->id : null;
            
            // $order->billing_name_on_card = $customer->customer_code;
            $order->order_billing_name = $request->firstname;
            $order->order_billing_email = $request->email;
            $order->order_status = 'Not Confirmed';
            $order->order_amount = $request->session()->get('total');
        
            $order->order_billing_address = $request->address;
            $order->gender = $request->gender;
         
            $order->order_unique_id = str_replace('.', '',$request->lastname);


            $order->company_name = $request->company_name;
            $order->company_branch_name = $request->branch;
            $order->delivery_status = $request->delivery;
          
            $order->save();
            foreach (Cart::content() as $item) {
                $orderproduct = new OrderProduct;
                $orderproduct->order_id = $order->id;
                $orderproduct->product_id = $item->model->id;
                $orderproduct->order_quantity = $item->qty;
                $orderproduct->save();
             
            }
    
        $orderamounts =    Product::where('id', $item->model->id)->select('order_amount')->first();
    
        $orderamount=  $orderamounts->order_amount + 1;
        // dd($orderamount);
          Product::where('id', $item->model->id)->update(['order_amount' => $orderamount]);
      
        //    dd('here');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        Rave::initialize(route('callback'));
    }
    public function callback(Request $request)
    {
        
        $companies =  Company::all();
        $resp = $request->resp; $body = json_decode($resp, true);
        $txRef = $body['data']['data']['txRef'];
         $data = Rave::verifyTransaction($txRef);
//  dd($data);
                if ($data->status == 'success') {
 $str = $data->data->custname;
 $new_str = substr($str, ($pos = strpos($str, '.')) !== false ? $pos + 0 : 1);
 
 $allData = DB::table('orders')->where('order_unique_id', str_replace('.', '', $new_str) )->first();
 
 $total =  $allData->order_amount;
 
 if($data->data->amount   ==  $total  ){
//  dd($total);
     $status = 'PAID';
    }elseif($data->data->amount   !=  $total ){
        // dd('not comp');
     $status = 'TAMPERED';
 
    }
 $purchaseId = $allData->order_unique_id ;
//  dd($allData);
//  dd( DB::table('orders')->where('order_unique_id', $new_str)->get());
   DB::table('orders')->where('order_unique_id', $purchaseId)->update(['order_status' => $status , 'ref_id' => $data->data->txref , 'amount_due' => $data->data->amountsettledforthistransaction, 'payment_type' => $data->data->paymenttype ]);
//   dd($allData);
    Cart::destroy();
   return view('thankyou',compact('purchaseId', 'companies'));
    }
    else {
  
        return view('errors.405',compact( 'companies'));
    }

}
    public function flutterwavelist(Request $request){

        $companies =  Company::all();
        $arrdata = array(
            'seckey'=> 'FLWSECK_TEST-8882d5f6ad8e677a847414511909ddb1-X'
            );
    
            $alltransactions = Rave::listTransactions($arrdata) ;
    
          $foreachtransactions =  $alltransactions->data->transactions;
 
          return view('transactions',compact('foreachtransactions', 'companies'));
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


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
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
