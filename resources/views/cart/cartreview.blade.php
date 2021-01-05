
@extends('layouts.app')

@section('content')

@if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

<div class="banner-banner text-center">
              <!-- <img src="img/delivery-banner.jpg" alt="" class="img-responsive"> -->
              <div class="banner-link">
              <h1 class="text-white">CART</h1>
              <p class="text-white">Home | Cart</p>
              </div>
          </div>

          <a href="https://api.whatsapp.com/send?phone=2348184751332&text=Digital%20Roah%20Services" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
            </a>

            <br><br>
         
          <div class="container">
              <h3>Cart</h3>
             

            <h5>{{ Cart::count() }} item(s) in Shopping Cart</h5>
              <br>
              <!-- <div class="row">
                  <div class="col-md-4 cart-table text-center">
                      <br>
                      <p class="cart-item">ITEM</p>
                      <div class="row">
                          <div class="col-md-4">
                              <img src="img-2/big-mac-2.jpg" alt="" width="100%" class="img-responsive cart-image">
                          </div>
                          <div class="col-md-8">
                              <br>
                              <p class="cart-details">BIG MAC</p>
                          </div>
                      </div>
                      <br><br>
                  </div>
                  <div class="col-md-2 cart-table text-center">
                      <br>
                      <p class="cart-item">QUANTITY</p>
                      <br>
                      <select name="quantity" id="quantity" class="dropdown">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                     </select>
                     <br><br>
                 </div>
                  <div class="col-md-3 cart-table text-center">
                      <br>
                      <p class="cart-item">UNIT PRICE</p>
                      <br>
                      <p class="cart-details"><b>₦ 7,000</b></p>
                      <br><br>
                  </div>

                  <div class="col-md-3 cart-table text-center">
                      <br>
                      <p class="cart-item">SUB-TOTAL</p>
                      <br>
                      <p class="cart-details"><b>₦ 7,000</b></p>
                      <br><br>
                  </div>
              </div>
               -->

               <table class="table-responsive table-bordered" style="padding-bottom: 0px !important;">
                <tr class="table-row text-center">
                  <th>ITEM</th>
                  <th>QUANTITY</th>
                  <th>UNIT PRICE</th>
                  <th>SUB-TOTAL</th>
                </tr>
                @foreach (Cart::content() as $item)
                
                <tr class="table-row">

                  <td>
                    <div class="row">
                    <div class="col-md-4">

                      <img src="{{ $item->options->image}}" alt="" width="100%" class="img-responsive cart-image">
                  </div>
                  <div class="col-md-8">
                      <br>
                      <p class="cart-details">{{ $item->name }}</p>
                  </div>
                  </div>
                  </td>

                  <td class="text-center"> 
                       <div class="product_count">

           
                       
<select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->product_quantity }}">
        @for ($i = 1; $i < $item->model->product_quantity + 1 ; $i++)
            <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
        @endfor
</select>
</div>
</td>

                  <td>
                    <p class="cart-details text-center"><b>{{ presentPrice($item->price) }}</b></p>
                  </td>

                  <td>
                    <p class="cart-details text-center"><b>{{ presentPrice($item->subtotal) }}</b></p>
                  </td>

                  <td>

        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST" class="text-center">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Remove</button>
            </form>
</td>
                </tr>
                @endforeach
         
               </table>

              
              
              <div class="container text-right">
              <h6><b>Total :</b> <span style="color: rgb(248, 174, 36); font-size: 23px; margin-left: 15px;">{{ presentPrice($withoutTax) }}</span></h6>
                <br>
                <h6><b>Tax :</b> <span style="color: rgb(248, 174, 36); font-size: 23px; margin-left: 15px;">{{  ($tax) }}</span></h6>
                <br>
                <h6><b>Final Total :</b> <span style="color: rgb(248, 174, 36); font-size: 23px; margin-left: 15px;">{{  ($totalPrice) }}</span></h6>
                <br>
             
                </div>
                        <br>
                  <br>
                
          </div>
         <div class="container row">
         <div class="col-md-4 offset-md-2">
         @if (!empty($urllink))
                        <a class="btn btn-warning text-white" href="{{$urllink}}">Continue Shopping</a>

                        @else
                        <a class="btn btn-warning text-white" href="{{URL::previous()}}">Continue Shopping</a>
                        @endif
</div>

<div class="col-md-3 offset-md-3">
                <div class="form-check form-check-inline">
            
                    <p><b>Deliver to me:</b></p>
                </div>
                <small>This Charge is without Deivery. You will be Charged an extra ₦ 500 if you want your item Delivered</small> 
                <br>
                <form action="{{ route('cart.billing') }}" method="POST">
                    {{ csrf_field() }}
                    @foreach (Cart::content() as $item)
                    @if ($loop->first)
                    <input type="hidden" name="companyid" value="{{$item->model->company_id }}">
    @endif

                @endforeach
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes" >
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                 
<button type="submit" class="btn btn-pay text-white">Review</button>

</form>
</div>  
         </div>
        
        
           @endsection



            @section('extra-js')

            <!-- important for ajax quantity to work-->
 
 

<script src="{{ asset('js/app.js') }}"></script>
 
<script>
        (function(){
         
            const classname = document.querySelectorAll('.quantity')
             
            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')
                
                    axios.patch(`/cart/${id}`, {
      
                        quantity: this.value,
                        
                        productQuantity: productQuantity
                    })
                    .then(function (response) {
                      
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        
                        window.location.href = '{{ route('cart.index') }}'
                    });
                })
            })
        })();
    </script>

@endsection