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



<div id="main-container">
    <div class="container">
        <div class="deposit" style="padding: 20px;">
        <h4>DEPOSIT</h4>
        <p>In order to make a Deposit into your mining account we advise you read through the following steps:</p>
        </div>

        <div class="steps text-center" data-aos="flip-up" data-aos-duration="2000">
           <h3><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> STEP 1 </h3>
           <p>Tap to request and copy the address of whatever coin you want to mine.</p>
        </div>

        <div id="current-mining" class="mma mma-bc1">
           <div class="row">
               <div class="col-sm-3">
                   <div class="logo-background text-center" data-aos="fade-up" data-aos-duration="1400">
                        <img src="img/bitcoin-logo (1).png" alt="bitcoin-logo" class="img-responsive image" style="width: 70px;">
                        <p style="color: white;">BITCOIN</p>
                        <div class="middle">
                            <button type="button" class="btn btn-request" data-toggle="modal" data-target="#exampleModal">Request</button>
                        </div>
                   </div>
               </div>
               <div class="col-sm-3">
                <div class="logo-background text-center" data-aos="fade-up-left" data-aos-duration="1600">
                    <img src="img/ethereum-trans.jpg" alt="bitcoin-logo" class="img-responsive" style="width: 70px;">
                    <p style="color: white;">ETHEREUM</p>
                    <div class="middle">
                        <button type="button" class="btn btn-request" data-toggle="modal" data-target="#exampleModal">Request</button>
                    </div>
               </div>
               </div>
               <div class="col-sm-3">
                <div class="logo-background text-center closed-coins" data-aos="fade-down-right" data-aos-duration="1800">
                    <label class="btn btn-closed">Closed !</label>
                    <img src="img/stellar-logo.png" alt="bitcoin-logo" class="img-responsive" style="width: 70px;">
                    <p style="color: white;">STELLAR</p>
                    <!-- <div class="middle">
                        <button type="button" class="btn btn-request" data-toggle="modal" data-target="#exampleModal-2">Request</button>
                    </div> -->
               </div>
               </div>
               <div class="col-sm-3">
                <div class="logo-background text-center closed-coins" data-aos="zoom-out-down" data-aos-duration="2000">
                    <label class="btn btn-closed">Closed !</label>
                    <img src="img/dogecoin-2.png" alt="bitcoin-logo" class="img-responsive" style="width: 70px;">
                    <p style="color: white;">DOGECOIN</p>
                    <!-- <div class="middle">
                        <button type="button" class="btn btn-request" data-toggle="modal" data-target="#exampleModal-2">Request</button>
                    </div> -->
               </div>
               </div>
               <div class="col-sm-3">
                <div class="logo-background text-center closed-coins" data-aos="zoom-in-right" data-aos-duration="2200">
                    <label class="btn btn-closed">Closed !</label>
                    <img src="img/litecoin.png" alt="bitcoin-logo" class="img-responsive" style="width: 70px;">
                    <p style="color: white;">LITECOIN</p>
                    <!-- <div class="middle">
                        <button type="button" class="btn btn-request" data-toggle="modal" data-target="#exampleModal-2">Request</button>
                    </div> -->
               </div>
               </div>
           </div>
        </div>

        <div class="row">
        <div class="col-sm-5">
        <div class="steps text-center"  data-aos="flip-left" data-aos-duration="2000">
            <h3><i class="fa fa-link" aria-hidden="true"></i> STEP 2 </h3>
            <p>follow the link below in- order to purchase the available coin into your mining account: <a href="https://buy.coingate.com">BUY.COINGATE.COM</a> <a href="https://bitcoin.com">BITCOIN.COM</a></p>
         </div>
         </div>

         <div class="col-sm-5">
            <div class="steps text-center"  data-aos="flip-right" data-aos-duration="2000">
                <h3><i class="fa fa-arrow-up" aria-hidden="true"></i> STEP 3 </h3>
                <p>Input your Copied wallet address copied (STEP 1) In either of the platform above in (STEP 2) and also the amount according to the selected package.</p>
             </div>
         </div>

         <div class="col-sm-5 offset-sm-2">
             <div class="steps text-center"  data-aos="flip-down" data-aos-duration="2000">
                <h3><i class="fa fa-money" aria-hidden="true"></i> STEP 4 </h3>
                <p>Make payment through your Card/ Bank Transfer to complete your purchase. </p>
             </div>
         </div>

         <div class="col-sm-5">
            <div class="steps text-center"  data-aos="flip-down" data-aos-duration="2000">
               <h3><i class="fa fa-phone" aria-hidden="true"></i> STEP 5 </h3>
               <p>If your money doesn't reflect in your dashboard within 28 - 48 hours get back to us at <a href="/contact-support">CONTACT CUSTOMER</a></p>
            </div>
        </div>

         </div>

         <br>
         <div class="container">
             <h4><b>Note</b>: Purchase usually takes 10-60mins to reflect into your mining account.</h4>
             <br><br>
             <div class="alternative">
                 <h4>ALTERNATIVE PAYMENT INCLUDES:</h4>
                 <!-- <br>
                 <ul>
                     <li><b>CASHAPP(USA ONLY & BTC )</b>: Purchase your investment  from your CashApp according to the selected package. Then send directly into your mining account using the BTC ADDRESS above.
                    </li>
                     <li><b>PAYPAL: Tap to request payment details. Payment details would be sent via Email.</b></li>
                 </ul> -->
             </div>
         </div>

         <div id="current-mining" class="mma mma-bc1">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo-background text-center" data-aos="fade-down" data-aos-duration="1800">
                         <img src="img/paypal-logo.png" alt="bitcoin-logo" class="img-responsive image" id="paypal" style="width: 150px;">
                         <p style="color: white; margin-top: -20px !important; font-size: 17px; padding: 20px;" class="pay-cashapp">Tap to request payment details. Payment details would be sent via Email.</p>
                         <div class="middle">
                             <button type="button" class="btn btn-request" onclick="alert()">Request</button>
                         </div>
                    </div>
                </div>
                <div class="col-sm-6">
                 <div class="logo-background text-center closed-coins" id="back-pay"data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                     <!-- <img src="img/dollar.png" alt="bitcoin-logo" class="img-responsive" style="width: 70px;"> -->
                     <p style="color: white; font-size: 25px; padding-top: 40px;"><b><i class="fa fa-usd" aria-hidden="true"></i> Cash App</b></p>
                     <p style="color: white; font-size: 16px; padding: 15px;" class="pay-cashapp"><b>CASHAPP(USA ONLY & BTC )</b>: Purchase your investment  from your CashApp according to the selected package. Then send directly into your mining account using the BTC ADDRESS above.</p>

                </div>
                </div>
            </div>
        </div>
<form action="/paypalrequest" method="post" id="form">
@csrf
<input type="hidden" name="name" value="{{Auth::user()->name}}">
<input type="hidden" name="username" value="{{Auth::user()->username}}">
<input type="hidden" name="email" value="{{Auth::user()->email}}">
<input type="hidden" name="email" value="{{Auth::user()->phone}}">
</form>
        <script src="js/sweet-alert.js"></script>
        <script>
            function alert() {
                Swal.fire({
                icon: 'info',
                title: 'Please wait',
                text: 'Payment details will be sent via email shortly.',

            }).then(function () {

      $('#form').submit();
  });

            }
        </script>

        <style>
            @media (max-width: 480px) {
                .pay-cashapp {
                    font-size: 14px !important;
                    padding-bottom: 30px !important;
                }

                #back-pay {
                    height: 300px !important;
                }

                #paypal {
                    margin-left: 0px !important;
                }
            }
        </style>

    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Wallet Address</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
                 <div class="form-group">
                    <label for="myInput">Your Wallet Address (Please Copy)</label>
                    <div class="row">
                     <div class="col-md-8" style="padding-left: 30px !important;">
                    <input type="text" class="form-control" id="myInput" name="id" value="39">
                </div>
                <div class="col-md-3 text-center copy-id">
                    <button type="button" class="btn btn-success butid" onclick="copied()">
                         Copy Address</button>
                </div>

                <style>
                    .butid {
                        border: 1px solid black !important;
                    }

                    @media (max-width: 800px) {
                        .copy-id {
                            padding-top: 20px;
                        }
                    }
                </style>
                </div>
                 </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>




  <script>
    function copied() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
//   alert("Copied id: " + copyText.value);
Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "Copied address: " + copyText.value,

            });
}
    </script>



  <!-- <script>
      $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
  </script> -->

  <script src="../bootstrap/js/jquery.min.js"></script>

<script src="../bootstrap/js/bootstrap-3.3.7.min.js"></script>


 <div id="footer-container">
    <footer class="container">
      <div class="mma">
        <p class="fpf">
          <img src="../img/logo-black.png" alt="Cryptobitnet-logo" class="img-responsive" style="width: 60px;">

                          <p>Cryptobitnet Ltd., N/A 210 Midhraun 80 Garðabær Iceland</p>
      </div>
    </footer>
  </div>








<script type="text/javascript">
  $(document).ready(function() {
    $('.hp ul a').click(function() {
      var sel = $(this).attr('data-option');
      if (sel == '-') {
        $('.hp-val').val('');
        $('.hp-holder').show();

      } else {
        $('.hp-val').val(sel);
        $('.hp-holder').hide();
      }
    });

    $('h5').popover();

  });
</script>


<!-- <link rel="stylesheet" href="../aos/css/aos.css">
  <script src="../aos/js/aos.js"></script>
  <script>
    AOS.init();
  </script> -->

 <style>

     .steps {
         background-color: #e69500;
         color: white !important;
         width: 400px;
         float: center;
         margin-left: 60px;
         padding: 15px;
         margin-bottom: 20px;
     }

     .steps h3 {
         color: white !important;
     }

     .steps p {
         color: white !important;
         font-size: 17px;
         margin-top: 10px;
     }

     .steps a {
         color: white !important;
     }

     .steps a:hover {
         color: black !important;
     }

     .logo-background {
        background-color: #274c65;
        height: 200px;
        margin-bottom: 30px;
        position: relative;
     }
     .logo-background img {
         margin-left: 110px;
         padding-top: 40px;
     }


     @media (max-width: 480px) {
        .logo-background img {
            margin-left: 90px !important;
        }
     }

     .logo-background p {
         font-size: 18px;
         padding-top: 10px;
     }



.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.logo-background:hover {
  background-color: rgba(0, 0, 0, 0.9) !important;
}

.closed-coins:hover {
    background-color: #113a56 !important;
}

.logo-background:hover .middle {
  opacity: 1;
}

.btn-closed {
    color: white !important;
    background-color: rgb(231, 24, 24) !important;
    border-radius: 0px !important;
    height: 30px !important;
    font-size: 14px !important;
    float: left !important;
    width: 80px !important;
}

.btn-request {
    color: white !important;
    border-radius: 0px !important;
    background-color: #ffab32 !important;
    font-size: 17px !important;
}

@media (max-width: 750px) {
    .btn-request {
        margin-top: -10px !important;
    }
    .btn-closed {
        margin-top: -0px !important;
    }
}

@media (max-width: 479px) {
    .steps {
        width: 300px !important;
        margin-left : 0px !important;
    }
}

.alternative ul {
    list-style-type: square !important;
}

.alternative ul li {
    margin-bottom: 10px;
}
 </style>


@endsection
