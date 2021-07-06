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

                                            <div class="col-sm-12">



                                <p></p>
                                                                                                                </div>





                                            <div class="col-sm-12"></div>
                                    </div>
            </div>

<div id="pending-output">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="h2-new">MINING OUTPUT BALANCE</h2>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 cm12-1">
            <div class="dashbox600">
                <table class="dash dash600">
                    <thead>
                    <tr>
                        <th>Crypto Currency Name</th>
                        <th>Currency Code</th>

                        <th>Status</th>
                        <th>Package</th>
                        <th>Action</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                             @forelse($histories as $history)
                           <tr>
                                <td data-label="Crypto Currency"><b>{{$history->currency_name}}</b></td>
                                <td data-label="Currency Code">@if($history->currency_name == 'Bitcoin') BTC   @elseif($history->currency_name == 'Ethereum')  Eth @else ---  @endif</td>

                                <td data-label="Status">{{$history->trans_status}}</td>
                                <td data-label="Status">{{$history->package}}</td>
                                <td data-label="Package">{{$history->trans_action}}</td>
                                <td data-label="Balance">{{$history->transaction_balance}}</td>
                            </tr>
                              @empty

                              <tr>
                                <td data-label="Crypto Currency"><b>----------</b></td>
                                <td data-label="Currency Code">----------</td>
                                <td data-label="Balance">----------</td>
                                <td data-label="Status">----------</td>
                                <td data-label="Package">----------</td>
                                <td data-label="Duration">----------</td>
                            </tr>
                              @endforelse
                              <!-- <tr>
                                <td data-label="Crypto Currency"><b>Ethereum</b></td>
                                <td data-label="Currency Code">ETH</td>
                                <td data-label="Balance">0.00000000</td>
                                <td data-label="Status">----------</td>
                                <td data-label="Package">----------</td>
                                <td data-label="Duration">----------</td>
                            </tr>
                                                                                                                            <tr>
                                <td data-label="Crypto Currency"><b>Stellar</b></td>
                                <td data-label="Currency Code">XLM</td>
                                <td data-label="Balance">0.00000000</td>
                                <td data-label="Status">----------</td>
                                <td data-label="Package">----------</td>
                                <td data-label="Duration">----------</td>
                            </tr>
                                                                                                                            <tr>
                                <td data-label="Crypto Currency"><b>Dogecoin</b></td>
                                <td data-label="Currency Code">DOGE</td>
                                <td data-label="Balance">0.00000000</td>
                                <td data-label="Status">----------</td>
                                <td data-label="Package">----------</td>
                                <td data-label="Duration">----------</td>
                            </tr>
                                                                                                                            <tr>
                                <td data-label="Crypto Currency"><b>Litecoin</b></td>
                                <td data-label="Currency Code">LTC</td>
                                <td data-label="Balance">0.00000000</td>
                                <td data-label="Status">----------</td>
                                <td data-label="Package">----------</td>
                                <td data-label="Duration">----------</td>
                            </tr> -->

                                                                                                                                                                                                                                                                                                                                                                                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    </tfoot>
                </table>
                <div class="clearfix"></div>
            </div>
        </div>

        <!-- <div class="col-xs-12 col-sm-6 col-md-6 cm6-2">
            <div class="dashbox600">
                <table class="dash dash600">
                    <thead>
                    <tr>
                        <th>Crypto Currency Name</th>
                        <th>Currency Code</th>
                        <th>Balance</th>
                    </tr>
                    </thead>
                    <tbody>
                                                                                                                                                                                                                                                                                                                                                                            <tr>
                                <td data-label="Crypto Currency"><b>Monero</b></td>
                                <td data-label="Currency Code">XMR</td>
                                <td data-label="Balance">0.00000000</td>
                            </tr>
                                                                                                                            <tr>
                                <td data-label="Crypto Currency"><b>Monero Classic</b></td>
                                <td data-label="Currency Code">XMC</td>
                                <td data-label="Balance">0.00000000</td>
                            </tr>
                                                                                                                            <tr>
                                <td data-label="Crypto Currency"><b>Augur</b></td>
                                <td data-label="Currency Code">REP</td>
                                <td data-label="Balance">0.00000000</td>
                            </tr>
                                                                                                                            <tr>
                                <td data-label="Crypto Currency"><b>Ether Classic</b></td>
                                <td data-label="Currency Code">ETC</td>
                                <td data-label="Balance">0.00000000</td>
                            </tr>
                                                                                                                            <tr>
                                <td data-label="Crypto Currency"><b>Bitcoin Cash</b></td>
                                <td data-label="Currency Code">BCH</td>
                                <td data-label="Balance">0.00000000</td>
                            </tr>
                                                                                                                            <tr>
                                <td data-label="Crypto Currency"><b>Bitcoin Gold</b></td>
                                <td data-label="Currency Code">BTG</td>
                                <td data-label="Balance">0.00000000</td>
                            </tr>
                                                                                                                            <tr>
                                <td data-label="Crypto Currency"><b>Electroneum</b></td>
                                <td data-label="Currency Code">ETN</td>
                                <td data-label="Balance">0.00000000</td>
                            </tr>
                                                                </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    </tfoot>
                </table>
                <div class="clearfix"></div>
            </div>
        </div> -->
    </div>
</div>




<!-- <div id="output-info" class="mma mma-bc1">
    <div class="row">



        <div class="col-sm-6 pi2">
          <p><b>Quick Information:</b></p>


          <div id="affiliate" class="affiliate">

            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#qck-1">
                    <span><svg id="icon-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 28"><path d="M17.297 13.703l-11.594 11.594c-0.391 0.391-1.016 0.391-1.406 0l-2.594-2.594c-0.391-0.391-0.391-1.016 0-1.406l8.297-8.297-8.297-8.297c-0.391-0.391-0.391-1.016 0-1.406l2.594-2.594c0.391-0.391 1.016-0.391 1.406 0l11.594 11.594c0.391 0.391 0.391 1.016 0 1.406z"></path></svg></span>
                      Mining output - status ‘Balanced’                  </a></h4>
                </div>
                <div id="qck-1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Your mining output amount is below your chosen transaction threshold. This amount will be added to your total coin balance - you can check your total balance info if you hover your cursor over the ‘info’ symbol.</p>
                    <p>When the balance reaches the transaction threshold, the coins will be transferred to your wallet.</p>
                    <p>The minimum transaction thresholds are set because a large number of small transfers will cause higher fees for the customers when sending coins to third parties (due to a large number of inputs). In addition, several web wallets do not allow the receiving of such small amounts.</p>
                    <p>Keep in mind that the total coin balance amounts are separate for the same type of coin from different contracts (algorithms) - only outputs that reach the minimum threshold on the same day are being summed up and sent in one transfer (one transaction ID).</p>
                    <p>The minimum transaction thresholds for each coin can be found <a href="#" data-toggle="modal" data-target="#ModalOutputTreshold" title="here">here</a>.</p>
                    <p>In case you want to adjust the minimum transaction thresholds, you can do that by going to the ‘<a href="/my-account" title="Settings - Wallets">Settings - Wallets</a>’ section.</p>
                  </div>
                </div>
              </div>
            </div>


            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#qck-2">
                    <span><svg id="icon-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 28"><path d="M17.297 13.703l-11.594 11.594c-0.391 0.391-1.016 0.391-1.406 0l-2.594-2.594c-0.391-0.391-0.391-1.016 0-1.406l8.297-8.297-8.297-8.297c-0.391-0.391-0.391-1.016 0-1.406l2.594-2.594c0.391-0.391 1.016-0.391 1.406 0l11.594 11.594c0.391 0.391 0.391 1.016 0 1.406z"></path></svg></span>
                      Mining output - status ‘Sent to wallet’                  </a></h4>
                </div>
                <div id="qck-2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Your mining output has been sent to the last wallet address you have entered in the ‘Wallets’ section for that particular coin.</p>
                    <p>You can check the transaction on the blockchain if you click on the ‘View Transaction’ link in the ‘Transaction hash’ column.</p>
                    <p>Keep in mind that sometimes there are delays in the blockchain, so when you see messages like ‘error’, please check again later. The mining output was sent out, and it should arrive in your wallet soon.</p>
                    <p>As soon we send out the transaction, it is within the blockchain, waiting for confirmation. Unfortunately, we cannot accelerate this process from our end. Also, some wallets only show the transactions once a certain number of blockchain confirmations has been reached.</p>
                    <p>If the issue persists after 72 hours, please contact our <a href="/contact-support" title="Customer Service">Customer Service</a>.</p>
                  </div>
                </div>
              </div>
            </div>


            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#qck-3">
                    <span><svg id="icon-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 28"><path d="M17.297 13.703l-11.594 11.594c-0.391 0.391-1.016 0.391-1.406 0l-2.594-2.594c-0.391-0.391-0.391-1.016 0-1.406l8.297-8.297-8.297-8.297c-0.391-0.391-0.391-1.016 0-1.406l2.594-2.594c0.391-0.391 1.016-0.391 1.406 0l11.594 11.594c0.391 0.391 0.391 1.016 0 1.406z"></path></svg></span>
                      Mining output - missing                  </a></h4>
                </div>
                <div id="qck-3" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Rarely, out of many possible reasons, a mining output can be missing.<br />In this case, please contact our <a href="/contact-support" title="Customer Service">Customer Service</a>.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <br /><br />
          <p><b>Additional Information:</b></p>
          <ul>
            <li>To get more info about our services, you can visit our <a href="/customer-service" title="Customer Service">FAQ</a></li>
            <li>For updates, please see our <a href="https://twitter.com/GenesisMining" target="_blank" title="Twitter feed">Twitter feed</a></li>
          </ul>



        </div>
    </div>
</div> -->


<!-- <div id="my-transactions">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="h2-new">My activity</h2>
    </div>

          <div class="col-sm-12">
        <p class="text-center">No activities so far</p>
      </div>
      </div>
</div> -->








    </div>
</div>
</div>





@endsection
