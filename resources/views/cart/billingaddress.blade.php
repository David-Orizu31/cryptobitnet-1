
@extends('layouts.app')

@section('content')

<a href="https://api.whatsapp.com/send?phone=2348184751332&text=Digital%20Roah%20Services" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
            </a>
      <div class="selform_area">
                <br><br>
                <h2 class="text-center">Billing</h2>
                <br>
                <div class="container">
                <p class="item-purchased">Item Purchased from   @foreach($branches as $branch)  {{$branch->company_name}} @endforeach Restaurant at ₦ {{number_format($newesttotal,2)}}</p>
                <img src="favicon/favicon.ico" class="img-responsive" style="width: 55%; height: 10px;" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                        <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                {{ csrf_field() }}

                              
    <input type="hidden" name="amount" value="{{$newesttotal}}" />
     <input type="hidden" name="payment_method" value="both" />
     <input type="hidden" name="email" value="{{ isset(Auth::user()->email) ? Auth::user()->email : 'guestuser@gmail.com' }}" />
   

<input type="hidden" name="lastname" value=".{{ \Carbon\Carbon::now()->format('YmdHis').Str::random(2) }}" />
      <input type="hidden" name="country" value="NG" />
       <input type="hidden" name="currency" value="NGN" />

       <input type="hidden" name="delivery" value="{{ $delivery }}" />

  
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="name" class="form-label">Name</label>
                                 <input type="text" class="form-control" id="name" name="firstname" value="{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}">
                            </div>
                            <div class="form-group col-md-5 offset-md-2">
                                <label for="address" class="form-label">Address</label>
                                 <input type="text" class="form-control" id="address" name="address" value="{{ isset(Auth::user()->address) ? Auth::user()->address : '' }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="tel" class="form-label">Telephone Number</label>
                                <input type="tel" class="form-control" id="tel" name="phonenumber" value="{{ isset(Auth::user()->tel) ? Auth::user()->tel : '' }}">
                            </div>
                            <div class="form-group col-md-5 offset-md-2">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-control" id="gender" name="gender">
                                @if($user = Auth::user())
 
    <option @if(Auth::user()->gender == 'm')  selected @endif  value="m">Male</option>
                                <option  @if(Auth::user()->gender == 'f')  selected @endif   value="f" >Female</option>
@else 
<option   value="m">Male</option>
                                <option  value="f" >Female</option>
@endif
                              
                                 
                                </select>
                            </div>
                        </div>

               

                        <div class="form-row">
                            <!-- <div class="form-group col-md-5">
                                <label for="delivery" class="form-label">Delivery</label>
                                 <input type="text" class="form-control" id="delivery" name="delivery" value="">
                            </div> -->
                           
                            <div class="form-group col-md-5">
                                <label for="branch" class="form-label">Select Branch</label>
                                <select class="form-control" id="branch" name="branch">
                                <option selected disabled>Select Branch here</option>

                                    @foreach($branches as $branch)
                                   
                                   <option value="{{$branch->branch_address}}">{{$branch->branch_address}}</option>
                                   <input type="hidden" name="company_name" value="{{ $branch->company_name }}" />
                               @endforeach
                                </select>
                            </div>
                        </div>

                        
                        <br>
                        <button type="submit" class="btn btn-submit" style="float: right">Pay Now</button>
                        <br><br>
                    </form>
                    </div>

                    <div class="col-md-3">
                        <br>
                        <div class="box" style=" background-color: whitesmoke;">
                           <p class="text-white">YOUR PRICE</p>
                           <h2 class="text-dark text-center" style="padding: 10px;">Total Price  <br>  ₦ {{number_format($newesttotal,2)}}</h2>
                           <br>
                        </div>
                    </div>
                  </div>
                </div>
            </div>    



   
            @endsection
