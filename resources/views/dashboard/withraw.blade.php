@extends('dashboard.navbar')
 
@section('content')






<style>
        @media (max-width: 800px) {
             .profile {
               margin-bottom: -50px !important;
            }

            .profile img {
                margin-left: 50px !important;
            }

           .profile p {
               margin-left: 40px !important;
           }

           .profile .btn-primary {
               margin-left: 30px !important;
           }
           .start-mining {
               margin-bottom: -50px !important;
           }
           .navbar-nav {
               max-height: 400px !important;
               overflow: auto !important;
           }
        }
    </style>
    
    <script src="js/vue-2.5.16.min.js"></script>
    <script src="js/axios-0.18.0.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/marked.js"></script>
    <script src="js/js.cookie.min.js"></script>
    <script src="js/notifications.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
      $('.message-toggle').on('click', function (e) {
        $('.side-notification-overlay').toggleClass('opened');
        $('.side-notification').toggleClass('opened');
        $('body').toggleClass('overflow-hidden');
        e.preventDefault();
      });
    });
    </script></header>


<div class="container-fluid">



<div id="main-container">
    <div class="container">
    @include('flash::message')
        <div class="deposit" style="padding: 30px;">
        <h4>WITHDRAWAL</h4>
        <p>Input your wallet address below ( Do not input the same wallet address used to deposit into your mining wallet). Don’t have one click here <a href="https://exodus.io"><b>exodus.io</b></a></p>
        </div>
        <div class="deposit" style="padding: 30px;">
        <div id="btc">
        <h4>Balance: {{$bitcoin}}</h4>
        </div>
       
        <div id="eth">
        <h4>Balance: {{$eth}}</h4>
        </div>

         </div>
        <form action="withdrawdone" method="post">
        @csrf
            <div class="container">
            <div class="row">
            <div class="col-sm-3">
            <div class="form-group">
                <label for="withdrawn-cash">Select</label>
                <select name="choice" class="form-control" id="purpose">
                  <option value="btc">Bitcoin</option>
                  <option value="eth">Ethereum</option>
   
             </select>
             </div>
        </div>
            <div class="col-sm-4">
            <div class="form-group">
                <label for="withdrawn-cash">Amount</label>
                <input type="text"  required class="form-control" id="withdrawn_cash" name="withdrawn" placeholder="Enter your Amount" style="width: 250px;">
            </div>
        </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label for="wallet-address">Wallet Address</label>
                    <input type="text" class="form-control" required id="wallet-address" name="walletaddress" placeholder="Enter your Wallet Address" style="width: 250px;">
                </div>
            </div>
            </div>
            
            
            <div class="form-group">
                <button class="btn btn-withdraw" type="submit">Withdraw</button>
            </div>
        </div>
        </form>





        
        <script src="js/sweet-alert.js"></script>
        <script type="text/javascript">
            
            $(document).ready(function(){
                $("#eth").hide(); 
                document.getElementById("withdrawn_cash").onkeyup = function() {
  var input = parseInt(this.value);
  if (input < 0 || input >   {{ $bitcoin }}  )
  Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Insufficient balance please try again',
  
})
  return;
} 
    $('#purpose').on('change', function() {
      if ( this.value == 'btc')
      //.....................^.......
      {
          
        $("#btc").show();
        $("#eth").hide();
        document.getElementById("withdrawn_cash").onkeyup = function() {
  var input = parseInt(this.value);
  if (input < 0 || input >   {{ $bitcoin }}  )
  Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Insufficient balance please try again',
  
})
  return;
}
      }
      else
      {
        
        $("#btc").hide();
        $("#eth").show();
        document.getElementById("withdrawn_cash").onkeyup = function() {
  var input = parseInt(this.value);
  if (input < 0 || input >  {{$eth}} )
  Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Insufficient balance please try again',
  
})
  return;
}
      }
    });
});


            
            </script>

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script>
            $('#button').click(function(){
  
  if($('#wallet-address').is(':<= 100000')) {
		alert("withdrawal successful"); 
	}
  
	else {
		alert('Opps Insufficient balance, Withdrawal declined');
	}
  
});
        </script> -->

        <style>
        @media (max-width: 480px) {
            #withdrawn-cash {
                width: 250px !important;
            }
        }
        </style>
    </div>

    <div class="container">
        <div class="history-area">
        <h4>Withdrawal History</h4>
        
        <div class="col-xs-12 col-sm-12 col-md-12 cm12-1">
        <div class="dashbox600" style="margin-top: 30px; margin-bottom: 30px;">
        <table class="dash dash600">
           <thead>
               <tr>
               <th></th>
                   <th>Wallet Address</th>
                   <th>Amount</th>
                   <th>Date</th>
                   <th>Status</th>
               </tr>
           </thead>

           <tbody>
               @forelse($hists as $hist)
               <tr>
               <td data-label="Walletname">{{$hist->currency_name}}</td>
                   <td data-label="Wallet Address">{{$hist->trans_wallet_address}}</td>
                   <td data-label="Amount">{{$hist->transaction_balance}}</td>
                   <td data-label="Date">{{$hist->created_at->format('Y-m-d')}}</td>
                   <td data-label="Status">{{$hist->trans_status}}</td>
               </tr>
               @empty
               <tr>
               <td data-label="Wallet Address">----</td>
                   <td data-label="Wallet Address">----</td>
                   <td data-label="Amount">----</td>
                   <td data-label="Date">-----</td>
                   <td data-label="Status">----</td>
               </tr>
               @endforelse
           </tbody>
        </table>
        </div>
        </div>
    
    </div>
    </div>
</div> 

</div>

<style>
    .btn-withdraw {
        color: white !important;
        background-color: #e69500 !important;
        margin-left: 15px !important;
    }

    .history-area h4 {
        padding-top: 30px;
        padding-left: 30px;
    }
</style>




@endsection