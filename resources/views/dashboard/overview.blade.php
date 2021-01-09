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

<div class="c">
    <div id="main-container">
        <div class="container">
                        <div id="mma-flash" class="mma">
                    <div class="row">

                                                <div class="col-sm-12">



                                    <p></p>
                                                                                                                    </div>





                                                <!-- <div class="col-sm-12"><div id="flashMessage" class="alert alert-success">Login successful. Please activate 2 Factor Authentication by going to the <a href="/my-account" title="Settings">Settings</a> section.</div></div> -->
                                        </div>
                </div>









    <!-- hash power -->
    <div id="current-mining" class="mma mma-bc1">
        <div class="row">
            <div class="col-sm-3" data-aos="fade-down" data-aos-duration="2000">
                <div class="cmg cmg-1">
                    <span class="cpwr"><svg class="icon gm-icon-dashboard-power"><use xlink:href="#gm-icon-dashboard-power"></use></svg></span>

                    <div class="cmc">
                                            <b>{{Auth::user()->bitcoin}}  TH/s</b>

                        <p>Bitcoin                        <small>Hashrate</small>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3" data-aos="flip-right" data-aos-duration="2200">
                <div class="cmg cmg-2">
                    <span class="cpwr"><svg class="icon gm-icon-dashboard-power"><use xlink:href="#gm-icon-dashboard-power"></use></svg></span>

                    <div class="cmc">
                                            <b>0.0000 TH/s</b>

                        <p>Bitcoin (Radiant)
                            <small>Hashrate</small>
                        </p>
                    </div>
                </div>
            </div>

            <!-- <div class="col-sm-3">
                <div class="cmg cmg-3">
                    <span class="cpwr"><svg class="icon gm-icon-dashboard-power"><use xlink:href="#gm-icon-dashboard-power"></use></svg></span>

                    <div class="cmc">
                                            <b>0.0000 MH/s</b>

                        <p>Dash (X11)                        <small>Hashrate</small>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="cmg cmg-4">
                    <span class="cpwr"><svg class="icon gm-icon-dashboard-power"><use xlink:href="#gm-icon-dashboard-power"></use></svg></span>

                    <div class="cmc">
                                            <b>0.0000 MH/s</b>

                        <p>Litecoin                        <small>Hashrate</small>
                        </p>
                    </div>
                </div>
            </div> -->

                    <div class="col-sm-3" data-aos="zoom-in-up"data-aos-duration="2400">
                <div class="cmg cmg-5">
                    <span class="cpwr"><svg class="icon gm-icon-dashboard-power"><use xlink:href="#gm-icon-dashboard-power"></use></svg></span>

                    <div class="cmc">
                                            <b>{{Auth::user()->eth}} MH/s</b>

                        <p>Ether                        <small>Hashrate</small>
                        </p>
                    </div>
                </div>
            </div>

            <!-- <div class="col-sm-3">
                <div class="cmg cmg-6">
                    <span class="cpwr"><svg class="icon gm-icon-dashboard-power"><use xlink:href="#gm-icon-dashboard-power"></use></svg></span>

                    <div class="cmc">
                                            <b>0.0000 H/s</b>

                        <p>Zcash                        <small>Hashrate</small>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="cmg cmg-7">
                    <span class="cpwr"><svg class="icon gm-icon-dashboard-power"><use xlink:href="#gm-icon-dashboard-power"></use></svg></span>

                    <div class="cmc">
                                            <b>0.0000 H/s</b>

                        <p>Monero                        <small>Hashrate</small>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="cmg cmg-8">
                    <span class="cpwr"><svg class="icon gm-icon-dashboard-power"><use xlink:href="#gm-icon-dashboard-power"></use></svg></span>

                    <div class="cmc">
                                            <b>0.0000 H/s</b>

                        <p>Monero Classic                        <small>Hashrate</small>
                        </p>
                    </div>
                </div>
            </div> -->
            <div class="col-sm-12">&nbsp;</div>
        </div>
    </div>
    <!-- hashing power -->


    <!-- button boxes -->
    <!-- <div id="current-mining-boxes" class="mma mma-bc1">
        <div class="row">
            <div class="col-sm-6">
                <div class="cmb-allocate">
                    <h3>Mining Allocation</h3>
                    <p>Allocate your hashpower</p>
                    <a href="/mining-allocation" role="button" class="btn btn-primary mining-hp-allocation pull-right"><span class="fa fa-signal"></span>Configure miners</a>
                    <svg class="icon gm-icon-dashboard-mining-allocation"><use xlink:href="#gm-icon-dashboard-mining-allocation"></use></svg>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="cmb-upgrade">
                    <h3>Buy Hashpower</h3>
                    <p>Purchase more hashpower</p>
                    <a href="/upgrade-hashpower/universal" role="button" class="btn btn-warning order-hp-dash pull-right"><span class="fa fa-bolt"></span>Buy Hashpower</a>
                    <svg class="icon gm-icon-dashboard-upgrade-hashpower"><use xlink:href="#gm-icon-dashboard-upgrade-hashpower"></use></svg>
                </div>
            </div>
        </div>
    </div> -->
    <!-- button boxes -->


   


    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card" style="padding-top: 20px; padding-bottom: 20px;">
          <div class="p-4 pr-5 border-bottom bg-light d-flex justify-content-between">
            <h4 class="card-title mb-0" style="padding: 20px;">Area chart</h4>
            <div id="radar-chart-legend"></div>
          </div>
          <div class="card-body">
         <div class="container">
   <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
<div id="tradingview_4661f"></div>
<div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView</div>
<script type="text/javascript" src="js/tv.js"></script>
<script type="text/javascript">
new TradingView.widget(
{
"width": "100%",
"height": 290,
"symbol": "NASDAQ:AAPL",
"interval": "3",
"timezone": "Etc/UTC",
"theme": "light",
"style": "3",
"locale": "en",
"toolbar_bg": "#f1f3f6",
"enable_publishing": false,
"hide_top_toolbar": true,
"hide_legend": true,
"save_image": false,
"container_id": "tradingview_4661f"
}
);
</script>
</div>
<!-- TradingView Widget END -->
         </div>
          </div>
        </div>
      </div>


    <div id="my-earnings-sha256" class="mma mma-bc1">
        <div class="row">
            <h2 class="col-sm-12"><span></span>Output chart - SHA-256 (Bitcoin mining)</h2>

            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Output in USD</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="pull-right panel-btns"></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="hero-graph" id="hero-graph-sha256"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="my-earnings-scrypt" class="mma mma-bc1">
        <div class="row">
            <h2 class="col-sm-12"><span></span>Output chart - Scrypt (Litecoin mining)</h2>

            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Output in USD</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="pull-right panel-btns"></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="hero-graph" id="hero-graph-scrypt"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="my-earnings-x11" class="mma mma-bc1">
        <div class="row">
            <h2 class="col-sm-12"><span></span>Output chart - X11 (Dash mining)</h2>

            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Output in USD</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="pull-right panel-btns"></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="hero-graph" id="hero-graph-x11"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div id="my-earnings-dagger-hashimoto" class="mma mma-bc1">
        <div class="row">
            <h2 class="col-sm-12"><span></span>Output chart - Ethash (Ether mining)</h2>

            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Output in USD</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="pull-right panel-btns"></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="hero-graph" id="hero-graph-dagger-hashimoto"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    

<script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script> <div class="livecoinwatch-widget-3 overide-width" lcw-base="USD" lcw-d-head="true" lcw-d-name="true" lcw-d-code="true" lcw-d-icon="true" lcw-color-tx="#ffffff" lcw-color-bg="#1f2434" lcw-border-w="1"></div>
<style>
    .overide-width {
        width: 100% !important;
        height: auto !important;
    }
</style>
    <!-- <div class="container">
        <h3 style="padding: 20px;">Crytocurrency live update</h3>
    <div id="tvc_container_a1dc7c002bdf809f1284cb61e2b06953" class="tvChartContainer"  style="width: 970px; height: 800px;">
        <div id="tvc_overlay_a1dc7c002bdf809f1284cb61e2b06953">
            <div id="tvc_fullscreen_button_a1dc7c002bdf809f1284cb61e2b06953"></div>
            <div id="tvc_fullscreen_escape_a1dc7c002bdf809f1284cb61e2b06953">press <span>ESC</span> to exit fullscreen mode</div>
            <iframe id="tvc_frame_a1dc7c002bdf809f1284cb61e2b06953" class="embed embed-responsive" seamless="seamless" src="https://tvc4.forexpros.com/init.php?family_prefix=tvc4&carrier=86e07583dbfe556594a33fd03f9ed996&time=1608814230&domain_ID=72&lang_ID=72&timezone_ID=16&pair_ID=945629&interval=900&refresh=6&session=24x7&client=&user=guest&width=970&height=800&init_page=live-charts&m_pids=&watchlist=945629,1116086,1162811,1054920,1165465,1061993,1010773,1162422,1056630,1073899,1118146,1054919,1165541,1097518,1073620,1168117,1057454,1070789,1088171,1036964,1167224,1054876,1057768&site=https://ng.investing.com"   style="width: 970px; height: 800px;"></iframe>
        </div>
        <div id="tvc_credits_a1dc7c002bdf809f1284cb61e2b06953">Powered by <a id="tvc_credits_link" href="javascript:void(0);" onclick="window.open('https://www.tradingview.com/');">TradingView</a></div>
    </div>
</div>

<style>
    @media (max-width: 800px) {
        .embed-responsive {
            width: 700px !important;
            height: 700px !important;
        }

        .tvChartContainer {
            width: 700px !important;
            height: 700px !important;
        }
    }
    @media (max-width: 479px) {
        .embed-responsive {
            width: 350px !important;
            height: 500px !important;
        }

        .tvChartContainer {
            width: 350px !important;
            height: 500px !important;
        }
    }
</style> -->
    <!-- <div id="my-earnings-equihash" class="mma mma-bc1">
        <div class="row">
            <h2 class="col-sm-12"><span></span>Output chart - Equihash (Zcash mining)</h2>

            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Output in USD</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="pull-right panel-btns"></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="hero-graph" id="hero-graph-equihash"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="my-earnings-cryptonight" class="mma mma-bc1">
        <div class="row">
            <h2 class="col-sm-12"><span></span>Output chart - Cryptonight (Monero mining)</h2>

            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Output in USD</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="pull-right panel-btns"></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="hero-graph" id="hero-graph-cryptonight"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



    <div style="display:none;">
        <div id="algos-view" data-value='{"sha256":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_2year":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_1year":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_12month":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_9month":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_075year":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_18month":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_150year":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_18month015":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_18month003":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_18month00":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_21monthClassic":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_2year006":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_2year003":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_2year00":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_30month003":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_30month00":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_6month006":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_6month003":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"sha256_6month00":{"name":"sha256","nname":"Bitcoin","description":"Pure Bitcoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Bitcoin mining"},"equihash":{"name":"equihash","nname":"Zcash","description":"Pure Zcash mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Zcash mining"},"scrypt":{"name":"Scrypt","nname":"Litecoin","description":"Pure Litecoin mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Litecoin mining"},"x11":{"name":"X11","nname":"Dash","description":"Pure Dash mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Dash mining"},"x11_1year00001":{"name":"X11","nname":"Dash","description":"Pure Dash mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Dash mining"},"x11_1year0000015":{"name":"X11","nname":"Dash","description":"Pure Dash mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Dash mining"},"x11_2year0000015":{"name":"X11","nname":"Dash","description":"Pure Dash mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Dash mining"},"x11_15monthClassic":{"name":"X11","nname":"Dash","description":"Pure Dash mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Dash mining"},"x11_1year0f":{"name":"X11","nname":"Dash","description":"Pure Dash mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Dash mining"},"x11_2year000005":{"name":"X11","nname":"Dash","description":"Pure Dash mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Dash mining"},"x11_1year000005":{"name":"X11","nname":"Dash","description":"Pure Dash mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Dash mining"},"x11_2year00":{"name":"X11","nname":"Dash","description":"Pure Dash mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Dash mining"},"x11_1year00":{"name":"X11","nname":"Dash","description":"Pure Dash mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Dash mining"},"dagger-hashimoto":{"name":"dagger-hashimoto","nname":"Ethash","description":"Pure Ether mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Ether mining"},"dagger-hashimoto_3month00":{"name":"dagger-hashimoto","nname":"Ethash","description":"Pure Ether mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Ether mining"},"dagger-hashimoto_12month00":{"name":"dagger-hashimoto","nname":"Ethash","description":"Pure Ether mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Ether mining"},"dagger-hashimoto_24month00":{"name":"dagger-hashimoto","nname":"Ethash","description":"Pure Ether mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Ether mining"},"cryptonight":{"name":"Monero","nname":"Monero","description":"Monero mining","active":1,"active_admin":1,"out_of_stock":1,"nice_name":"Monero mining"}}'></div>
        <div id="algos-chart-data" data-value=''></div>
        <div id="algos-chart-data-all" data-value='{"sha256":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_2year":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_1year":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_12month":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_9month":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_075year":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_18month":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_150year":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_18month015":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_18month003":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_18month00":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_21monthClassic":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_2year006":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_2year003":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_2year00":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_30month003":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_30month00":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_6month006":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_6month003":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"sha256_6month00":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"equihash":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"scrypt":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"x11":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"x11_1year00001":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"x11_1year0000015":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"x11_2year0000015":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"x11_15monthClassic":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"x11_1year0f":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"x11_2year000005":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"x11_1year000005":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"x11_2year00":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"x11_1year00":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"dagger-hashimoto":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"dagger-hashimoto_3month00":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"dagger-hashimoto_12month00":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"dagger-hashimoto_24month00":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}],"cryptonight":[{"period":"2020-11-21","hash":0},{"period":"2020-11-22","hash":0},{"period":"2020-11-23","hash":0},{"period":"2020-11-24","hash":0},{"period":"2020-11-25","hash":0},{"period":"2020-11-26","hash":0},{"period":"2020-11-27","hash":0},{"period":"2020-11-28","hash":0},{"period":"2020-11-29","hash":0},{"period":"2020-11-30","hash":0},{"period":"2020-12-01","hash":0},{"period":"2020-12-02","hash":0},{"period":"2020-12-03","hash":0},{"period":"2020-12-04","hash":0},{"period":"2020-12-05","hash":0},{"period":"2020-12-06","hash":0},{"period":"2020-12-07","hash":0},{"period":"2020-12-08","hash":0},{"period":"2020-12-09","hash":0},{"period":"2020-12-10","hash":0},{"period":"2020-12-11","hash":0},{"period":"2020-12-12","hash":0},{"period":"2020-12-13","hash":0},{"period":"2020-12-14","hash":0},{"period":"2020-12-15","hash":0},{"period":"2020-12-16","hash":0},{"period":"2020-12-17","hash":0},{"period":"2020-12-18","hash":0},{"period":"2020-12-19","hash":0}]}'></div>
        <div id="algos-req-ip" data-value='"197.210.8.238"'></div>
    </div>


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

    <div class="modal fade" id="ModalOutputTreshold" tabindex="-1" role="dialog" aria-labelledby="ModalOutputTresholdLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Default transaction threshold</h4>
                </div>
                <div class="modal-body">
                    <ul>
                        <li><b>Cryptocurrency</b>
                            <span>Minimum transaction threshold</span></li>
                        <li><b>BTC</b> <span>0.0025 (250 000 satoshi)</span></li>
                        <li><b>BCH</b> <span>0.0015</span></li>
                        <li><b>BTG</b> <span>0.01</span></li>
                                                                <li><b>DOGE</b> <span>50</span></li>
                        <li><b>DASH</b> <span>0.001</span></li>
                        <li><b>ETH</b> <span>0.04</span></li>
                        <li><b>ETC</b> <span>0.15</span></li>
                        <li><b>REP</b> <span>0.1</span></li>
                        <li><b>LTC</b> <span>0.002</span></li>
                                            <li><b>XMR</b> <span>0.4</span></li>
                        <li><b>XMC</b> <span>4</span></li>
                        <li><b>ZEC</b> <span>0.001</span></li>
                                            <li><b>ETN</b> <span>100</span></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> 


    



    <div id="mpo"></div>
    <div id="the-loader">
        <div class="loader-content">
            <p>Your request is being processed. Please wait.</p>
                    <div class="progress-line"></div>
        </div>
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

@endsection