
   @extends('layouts.app')

@section('content')

   
   <div class="container">
             <br><br>
             <h2 class="message-header">Thank you <small>Your purchase id is {{$purchaseId}}</small></h2>
             <br>
             <p class="message-body">Congratulations! your item purchase has been successfull. Please incase you didn't request for delivery make sure you locate the right fast foods restaurant that you used to purchase your items.  If you don't know the location you can call or send a mail to the number and email listed below on our webpage.</p>
             <p class="message-body">For those that made delivery please ensure that you send the correct contact address and phone number to us to avoid some controversies.</p>
             <p class="message-body">Thank you so much once more for using our platform to purchase your fast foods, we really appreciate your effort. We'll be expecting to render more service next time. Thanks!</p>
         </div>
         @endsection