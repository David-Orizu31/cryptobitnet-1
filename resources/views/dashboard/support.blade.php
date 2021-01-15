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
                    <div id="mma-flash" class="mma">
                <div class="row">
                @include('flash::message')
                    
                                            <div class="col-sm-12">

                                                        
                                                                                                                                        </div>
                    
                                        


                                        
                                            <div class="col-sm-12"></div>
                                    </div>
            </div>
                
<div id="mma-flash" class="mma">
    <div class="row">
        <div class="col-sm-12">
                                </div>
    </div>
</div>


<div id="contact-support" class="mma mma-bc1">
    <div class="row">

        <h2 class="col-sm-12"><span></span>Contact                    </h2>

        <div class="col-xs-12 col-sm-6">
            <small class="" style="display:block;font-size: 14px;margin:-25px 0 50px 25px;">Keep in mind that the quality and promptness of our response depends on how accurately you fill out the Contact form. Our drop down menu has several options, and if the wrong topic is used, it can delay the resolution of the ticket.<br />We are looking forward to hearing from you!</small>
        </div>
        <div class="clearfix"></div>



        <div class="col-xs-12 col-sm-6 gm-contact-form">

            <!-- <div id="mma-flash" class="mma">
                <div id="flashMessage" class="alert alert-success">Login successful. Please activate 2 Factor Authentication by going to the <a href="/my-account" title="Settings">Settings</a> section.</div>            </div> -->

            <h3 class="col-sm-12 fos"><i class="fa fa-envelope"></i>Contact form</h3>
            <form action="/supportsent" class="" enctype="multipart/form-data" id="PageContactSupportInnerForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="data[_Token][key]" value="b03d799fdf727bf43ac89cfeb26f86dca09f60ee" id="Token22730122"/></div>            <div class="row">
            @csrf    
            <div class="form-group col-sm-12">
                                        <input name="name" class="form-control" placeholder="Your name" id="YourName" type="text" value="" required="required"/>                </div>
                <div class="form-group col-sm-12">
                    <input name="email" class="form-control disabled" placeholder="Your account email" id="EmailAddress" type="email" value="{{Auth::user()->email}}" required="required"/>                </div>
                <div class="form-group col-sm-12">
                    <input name="phone" class="form-control form-tel" placeholder="Your phone number" id="PhoneNumber" type="tel"/>                </div>

                <div class="form-group col-sm-12">     
                                 <select name="supportoption" class="form-control selectpicker" title="Select your service topic 1" id="SupportTopic1" required="required">
<option value="Select your service topic 1" selected disabled>Select your service topic 1</option>                                     
<option value="my_account">My account</option>
 <!-- <option value="order_purchase">Order purchase</option> -->
<option value="output">Mining output</option>
 <!-- <option value="allocation">Mining allocation</option>
 <option value="affiliate">Affiliate program</option>  -->
<option value="general">General</option>
</select> 


 


</div>
 
                <div class="form-group form-group-select col-sm-12" style="display:none">                    <select name="data[Page][support_topic][2]" class="form-control selectpicker cs-selection" data-style="" data-size="10" data-dropup-auto="false" title="Select your service topic 2" data-header="Select your service topic 2" data-order="2" id="SupportTopic2">
</select>                </div>

                <div class="form-group form-group-select col-sm-12" style="display:none">                    <input name="data[Page][datepicker]" class="form-control" placeholder="Select missing date" id="datetimepickerCSC" type="text"/>                </div>

                <div class="form-group form-group-select col-sm-12" style="display:none">                    <select name="data[Page][support_topic][3]" class="form-control selectpicker cs-selection" data-style="" data-size="10" data-dropup-auto="false" title="Select your service topic 3" data-header="Select your service topic 3" data-order="3" id="SupportTopic3">
</select>                </div>

                <div class="form-group form-group-select col-sm-12" style="display:none">                    <select name="data[Page][support_topic][4]" class="form-control selectpicker cs-selection" data-style="" data-size="10" data-dropup-auto="false" title="Select your service topic 4" data-header="Select your service topic 4" data-order="4" id="SupportTopic4">
</select>                </div>

                <div class="form-group form-group-select col-sm-12" style="display:none">                    <select name="data[Page][support_topic][5]" class="form-control selectpicker cs-selection" data-style="" data-size="10" data-dropup-auto="false" title="Select your service topic 5" data-header="Select your service topic 5" data-order="5" id="SupportTopic5">
</select>                </div>


<!--                <div class="form-group form-group-select col-sm-12">-->
<!--                    --><!--                </div>-->

                
                
                                                
                <div class="form-group form-group-textarea col-sm-12">
                    <textarea name="usermessage" class="form-control" placeholder="Enter your message here" rows="5" onkeyup="countChar(this)" cols="30" id="PageMessage" required="required"></textarea>                    <p class="letter-counter"><span id="charNum">0</span> / 240</p>
                </div>

                <div class="form-group col-sm-12">
                    <input type="file" name="attachments"  class="form-control"  id="attachment"/>                    <h5><small style="margin-bottom: 0px">Maximum upload size is 8MB.Maximum size per file is 2MB.</small></h5>
                </div>

                <div class="form-group col-sm-5 col-md-5 col-lg-3">
                    <!-- <input name="data[Page][verification]" class="form-control" placeholder="11 - 9 = ?" id="verification" required="required" autocomplete="off" maxlength="2" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57" type="text"/>   -->
                              </div>
                                <div class="col-sm-12">
                    <div class="form-group pull-right" style="margin-bottom: 50px;">
                        <button type="reset" class="btn btn-primary btn-reset"><i class="fa fa-refresh"></i>Reset</button>
                        <button type="submit" class="btn btn-warning btn-send"><i class="fa fa-sign-out"></i>Submit ticket</button>
                    </div>
                </div>
                <input type="hidden" name="data[Page][check]" value="f65ff12d38cc3be75f186a69560f8e7ce06f9963" id="PageCheck"/>            </div>
            <div style="display:none;"><input type="hidden" name="data[_Token][fields]" value="ae5ae1c251c79baeaa2c9b7f53307674a883220c%3A" id="TokenFields333551528"/><input type="hidden" name="data[_Token][unlocked]" value="Page.check" id="TokenUnlocked1316102044"/></div></form>
            <!-- <div class="row">
                <div class="col-sm-12">
                    <small class="" style="font-size: 14px;">If you are looking to contact our sales department click <a href="..//customer-service" title="Contact sales department">here</a>.</small>
                </div>
            </div> -->

        </div>

        <div class="col-xs-12 col-sm-5 col-sm-offset-1 gm-contact-info">
            <h3 class="fos"><i class="fa fa-users"></i>General information</h3>
            <h4 class="fos">Our office</h4>
            <address>
                CryptoBitNet Ltd.<br>
                N/A
                        210 Midhraun 80<br/>
                        Garðabær<br/>
                        Iceland
            </address>
                        <h4 class="fos">Operational address</h4>
            <address>
                Sjonarholl 16<br/>
                235 Reykjanesbaer<br/>
                Iceland<br/>
            </address>
            <h4 class="fos">Customer Service</h4>
            <address>Email: support@cryptobitnet.com<br/>
                                Average response time: within 1 business day.<br />
                However, depending on the volume of requests, the response time may occasionally be longer.<br />
                Check out our <a href="..//customer-service" title="Customer service center | Genesis Mining">Customer Service</a> section<br /><br />
                  <!--                --><!--                --><!--                  --><!--                -->                                            </address>
        </div>

    </div>
</div>

<div class="modal fade modal-csc" id="CSCModalOneTicket" tabindex="-1" role="dialog" aria-labelledby="CSCModalOneTicketLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="CSCModalOneTicketLabel">Ticket already submitted</h4>
            </div>
            <div class="modal-body">
                <p>We have recieved an inquiry with the same topic. Your inquiry is in queue and will be processed as soon as possible.<br />Thank you for your patience and understanding.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- <link type="text/css" rel="stylesheet" href="../css/bootstrap-select-form.min.css"/> -->
<link type="text/css" rel="stylesheet" href="../css/bootstrap-datetimepicker.min.css"/>

<!-- <script type="text/javascript" src="../js/bootstrap-select-front.min.js"></script> -->
<script type="text/javascript" src="../js/moment.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-datetimepicker.min.js"></script>


<script>
$(function(){

  $('.form-tel').keyup(function(e) {
        if(this.value!='-')
          while(isNaN(this.value))
            this.value = this.value.split('').reverse().join('').replace(/[\D]/i,'')
                                   .split('').reverse().join('');
    })
    .on("",function(e){
    	e.preventDefault();
    });

});
</script>

<script type="text/javascript">
  function countChar(val) {
    var len = val.value.length;
    if (len >= 241) {
      val.value = val.value.substring(0, 241);
    } else {
      $('#charNum').text(0 + len);
    }
  };
</script>

<div id="rawTopics" data-topics='{"CSG":{"my_account":"My account","order_purchase":"Order purchase","output":"Mining output","allocation":"Mining allocation","affiliate":"Affiliate program","general":"General"},"CSG|my_account":{"general":"General","wallet":"Cryptocurrency wallet"},"CSG|my_account|general":{"unlock":"Unlock my account","setup_2fa":"How to set up 2FA","lost_device_access":"Lost access to my device (I forgot 2FA code)","change_password":"Change password","forgot_password":"Forgot my password","password_length":"Password length","lost_email_access":"Lost access to my email","terminate":"Terminate my account","change_email":"Change my login email address","signup":"How to sign up","fake_scam_site":"Fake\/Scam site","other":"Nothing listed above"},"CSG|my_account|wallet":{"wallet_setup":"How to setup my wallet","wallet_change":"How to change my wallet","wallet_issues":"Wallet issues","other":"Nothing listed above"},"CSG|order_purchase":{"general":"General","credit_card":"I\u2019ve made credit card purchase","crypto":"I\u2019ve made cryptocurrency purchase"},"CSG|order_purchase|general":{"place_order":"How to place an order","payment_methods":"Payment methods","other":"Nothing listed above"},"CSG|order_purchase|credit_card":{"no_confirmation":"I didn\u2019t receive payment confirmation","order_status":"What is my order status?","order_pending":"My order status is pending","order_approved":"My order status is approved","order_canceled":"My order status is canceled","order_declined":"My order status is declined","order_missing":"I don\u2019t see my order listed","other":"Nothing listed above"},"CSG|order_purchase|crypto":{"no_confirmation":"I didn\u2019t receive payment confirmation","order_status":"What is my order status?","order_pending":"My order status is pending","order_approved":"My order status is approved","order_canceled":"My order status is canceled","order_expired":"My order status is expired","order_overpaid":"I\u2019ve overpaid my order","order_underpaid":"I\u2019ve underpaid my order","order_missing":"I don\u2019t see my order listed","other":"Nothing listed above"},"CSG|output":{"first":"First mining output","missing":"Missing mining output","blockchain_error":"Blockchain transaction error"},"CSG|output|first":{"credit_card":"I\u2019ve made credit card purchase","crypto":"I\u2019ve made cryptocurrency purchase"},"CSG|output|first|crypto":{"btc":"Bitcoin","dash":"Dash","ltc":"Litecoin","doge":"Dogecoin","bch":"Bitcoin Cash","zec":"Zcash"},"CSG|output|missing":{"date":"Missing date"},"CSG|output|missing|date":{"sha256":"Bitcoin Mining","equihash":"Zcash Mining","ethash":"Ether Mining","x11":"Dash Mining","cryptonight":"Monero Mining","cryptonightv0":"Monero Classic Mining","scrypt":"Litecoin Mining"},"CSG|output|missing|date|sha256":{"btc":"BTC","bch":"BCH","btg":"BTG","zet":"ZET","uno":"UNO","btcd":"BTCD","doge":"DOGE","ltc":"LTC","dash":"DASH","zec":"ZEC"},"CSG|output|missing|date|equihash":{"eth":"ETH","btc":"BTC","btg":"BTG","zec":"ZEC"},"CSG|output|missing|date|ethash":{"btc":"BTC","btg":"BTG","eth":"ETH","zec":"ZEC","rep":"REP","etc":"ETC","steem":"STEEM","ltc":"LTC","doge":"DOGE","bch":"BCH"},"CSG|output|missing|date|x11":{"dash":"DASH","btc":"BTC","btg":"BTG","start":"START","ltc":"LTC","doge":"DOGE","btcd":"BTCD","ppc":"PPC","nmc":"NMC","cure":"CURE","xmr":"XMR","zec":"ZEC"},"CSG|output|missing|date|cryptonight":{"xmr":"XMR","xmc":"XMC","etn":"ETN","btc":"BTC","btg":"BTG","ltc":"LTC","dash":"DASH","zec":"ZEC"},"CSG|output|missing|date|cryptonightv0":{"xmc":"XMC","xmr":"XMR","etn":"ETN","btc":"BTC","btg":"BTG","ltc":"LTC","dash":"DASH","zec":"ZEC"},"CSG|output|missing|date|scrypt":{"dash":"DASH","zec":"ZEC","ltc":"LTC","doge":"DOGE","btc":"BTC","btg":"BTG"},"CSG|output|blockchain_error":{"date":"Missing date"},"CSG|output|blockchain_error|date":{"sha256":"Bitcoin Mining","equihash":"Zcash Mining","ethash":"Ether Mining","x11":"Dash Mining","cryptonight":"Monero Mining","cryptonightv0":"Monero Classic Mining","scrypt":"Litecoin Mining"},"CSG|output|blockchain_error|date|sha256":{"btc":"BTC","bch":"BCH","btg":"BTG","zet":"ZET","uno":"UNO","btcd":"BTCD","doge":"DOGE","ltc":"LTC","dash":"DASH","zec":"ZEC"},"CSG|output|blockchain_error|date|equihash":{"eth":"ETH","btc":"BTC","btg":"BTG","zec":"ZEC"},"CSG|output|blockchain_error|date|ethash":{"btc":"BTC","btg":"BTG","eth":"ETH","zec":"ZEC","rep":"REP","etc":"ETC","steem":"STEEM","ltc":"LTC","doge":"DOGE","bch":"BCH"},"CSG|output|blockchain_error|date|x11":{"dash":"DASH","btc":"BTC","btg":"BTG","start":"START","ltc":"LTC","doge":"DOGE","btcd":"BTCD","ppc":"PPC","nmc":"NMC","cure":"CURE","xmr":"XMR","zec":"ZEC"},"CSG|output|blockchain_error|date|cryptonight":{"xmr":"XMR","xmc":"XMC","etn":"ETN","btc":"BTC","btg":"BTG","ltc":"LTC","dash":"DASH","zec":"ZEC"},"CSG|output|blockchain_error|date|cryptonightv0":{"xmc":"XMC","xmr":"XMR","etn":"ETN","btc":"BTC","btg":"BTG","ltc":"LTC","dash":"DASH","zec":"ZEC"},"CSG|output|blockchain_error|date|scrypt":{"dash":"DASH","zec":"ZEC","ltc":"LTC","doge":"DOGE","btc":"BTC","btg":"BTG"},"CSG|allocation":{"general":"More information about mining allocation","change_allocation":"Change mining allocation"},"CSG|allocation|general":{"how_it_works":"How it works in general","sha256;bitcoin_mining":"Bitcoin Mining","equihash;zcash_mining":"Zcash Mining","ethash;ether_mining":"Ether Mining","x11;dash_mining":"Dash Mining","cryptonight;monero_mining":"Monero Mining","scrypt;litecoin_mining":"Litecoin Mining"},"CSG|allocation|change_allocation":{"how_it_works":"How it works in general","sha256;bitcoin_mining":"Bitcoin Mining","equihash;zcash_mining":"Zcash Mining","ethash;ether_mining":"Ether Mining","x11;dash_mining":"Dash Mining","cryptonight;monero_mining":"Monero Mining","scrypt;litecoin_mining":"Litecoin Mining"},"CSG|affiliate":{"how_it_works":"How it works in general","reward":"Referral rewards","free_hashpower":"Free hashpower","promo_code":"Promo code\/discounts","ranks":"Affiliate ranks","more_info":"More about affiliate program"},"CSG|general":{"how_to_start":"How to start mining","know_more":"I want to know more about","pricing":"Pricing","returns":"Expected returns","maintenance_fee":"Maintenance fee"},"CSG|general|know_more":{"sha256;bitcoin_mining":"Bitcoin Mining","equihash;zcash_mining":"Zcash Mining","ethash;ether_mining":"Ether Mining","x11;dash_mining":"Dash Mining","cryptonight;monero_mining":"Monero Mining","scrypt;litecoin_mining":"Litecoin Mining","partner_sites":"Partner Sites"}}'></div>
<script type="text/javascript">
    $(document).ready(function () {
        function getAllTopics() {
            var topics = {};
            try {
                topics = JSON.parse($('#rawTopics').attr('data-topics'));
            } catch (e) {
                console.error(e);
            }
            return topics;
        }

        function compileTopicKey(currentSelectboxTopic, currentSelectboxOrder) {
            var compileTopics = ['CSG'];

            var allTopicsVals = [
                $('#SupportTopic1').val(),
                $('#SupportTopic2').val(),
                $('#SupportTopic3').val(),
                $('#SupportTopic4').val(),
                $('#SupportTopic5').val()
            ];

            console.dir(allTopicsVals);

            for(var i = 0; i < currentSelectboxOrder; i += 1){
                console.log(allTopicsVals[i]);
                if (allTopicsVals[i] !== '') {
                    compileTopics.push(allTopicsVals[i]);
                }
            }

            return compileTopics.join('|');
        }

        var allTopics = getAllTopics();

        var datePicker = function () {
            if( $('#SupportTopic2').val() == 'missing' || $('#SupportTopic2').val() == 'blockchain_error' ){

                $('#datetimepickerCSC').hide();
                $('#datetimepickerCSC').parent().hide();
                $('#datetimepickerCSC').prop('required', false);
                if($('#datetimepickerCSC').data("date")) {
                    $('#datetimepickerCSC').data("DateTimePicker").clear();
                }

                // Hide third dropdown
                $('#SupportTopic3').parent().parent().hide();
                // Show datepicker
                $('#datetimepickerCSC').show();
                $('#datetimepickerCSC').parent().show();

                $('#datetimepickerCSC').prop('required', true);
                $('#datetimepickerCSC').datetimepicker({
                    viewMode: 'days',
                    format: 'DD/MM/YYYY'
                });

                $('#datetimepickerCSC').on('dp.change', function(event){
                    $('#SupportTopic3').selectpicker('val', 'date').change();
                });

            } else  {
                $('#datetimepickerCSC').hide();
                $('#datetimepickerCSC').parent().hide();
                $('#datetimepickerCSC').prop('required', false);
                if($('#datetimepickerCSC').data("date")) {
                    $('#datetimepickerCSC').data("DateTimePicker").clear();
                }
            }
        };

        $('.cs-selection').on('change', function (e) {
            var currentElement = $(this);
            var nextElementOrder = parseInt(currentElement.attr('data-order'), 10);
            var nextElement = $("#SupportTopic" + ++nextElementOrder);
            var topicKey = compileTopicKey(currentElement.val(), currentElement.attr('data-order'));

            var nextElementOptionsHtml = '';
            if(typeof allTopics[topicKey] !== 'undefined'){
                Object.keys(allTopics[topicKey]).forEach(function(key){
                    nextElementOptionsHtml += "<option value=\"" + key + "\">" + allTopics[topicKey][key] + "</option>";
                });
            } else {
                var elementNAHtml = '<option class="bs-title-option" value="">N/A</option>';
                nextElementOptionsHtml += elementNAHtml;
                for(var zz = nextElementOrder; zz <= 5; zz += 1){
                    var elementNA = $("#SupportTopic" + zz);
                    elementNA.find('option').remove();
                    elementNA.append(elementNAHtml).selectpicker('refresh');
                }
            }

            nextElement.find('option').remove();
            nextElement.append(nextElementOptionsHtml).selectpicker('refresh');

            for (var zy = nextElementOrder; zy <= 5; zy += 1) {
                var hideElement = $('#SupportTopic' + zy);
                hideElement.prop('required', false).selectpicker('refresh');
                hideElement.parent().parent().hide();
            }

            if (nextElement.selector !== '#SupportTopic6') {
                if (nextElement.children()[0].innerHTML !== 'N/A') {
                    nextElement.prop('required', true);
                    nextElement.parent().parent().show();
                }
            }
            if(e.target.id == 'SupportTopic1'){
                $('#datetimepickerCSC').hide();
                $('#datetimepickerCSC').parent().hide();
                $('#datetimepickerCSC').prop('required', false);
                if($('#datetimepickerCSC').data("date")) {
                    $('#datetimepickerCSC').data("DateTimePicker").clear();
                }
            }
            if(e.target.id === "SupportTopic2"){
                datePicker();
            }
        });
    });
</script>

<script>
  $(document).ready(function () {
    $("#PageContactSupportInnerForm").submit(function (e) {
      $(".btn-send").attr("disabled", true);
      return true;
    });
  });
</script>
    </div>
</div>

</div>


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

.logo-background:hover .middle {
  opacity: 1;
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