@extends('layouts.app')



    @section('content')
 <link rel="stylesheet" href="https://david-orizu31.github.io/Cryptobitnet/css/front-1680.min.css">
 <link rel="stylesheet" href="https://david-orizu31.github.io/Cryptobitnet/css/bootstrap-select-form.min.css">
<script src="https://david-orizu31.github.io/Cryptobitnet/css/bootstrap-date-time-picker.min.js"></script>

    <div class="container-fluid">
        <div id="gm-customer-service-1" style="background:url(img/banner-pages.jpg) no-repeat 50% 0;">
            <div class="container">
            <div class="row">
            @include('flash::message')
              <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h1>Customer Service Center</h1>
                <p>What coin can I mine ?          <span>Browse our Customer service Browse our customer services Directory and receive answers to the most common questions.</span>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div id="gm-customer-service-faq">
            <div id="gm-customer-service-2">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <h2>Top questions</h2>
                  </div>

                  <div class="col-sm-6">
                    <div class="panel-group accordion" id="accordion1">

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion1"
                              href="#what-is-genesis-mining"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> What is CryptoBitNet?</a></h4>
                        </div>
                        <div id="what-is-genesis-mining" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p> CryptoBitnet is a Cryptocurrency CLOUD MINING service that offer an easy and safe way to mine without having to deal with complex hardwares and softwares, setup. We offer hosted Cryptocurrency services related solutions to large and small scale Customers. The Combination of our Algorithimic Trading Framework, Mining infrastructure, and proprietary mining farm-management, Software Cryptobitnet Hive, Quick made us an Industrial leader. Our Team of mining Experts with extended knowledge of the Digital sector specializes in Building the most efficient and reliable mining facilities. Genesis Mining targets Investors looking to gain access to Bitcoin and various Digital assets Potentials.</p>

                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion1"
                              href="#how-does-bitcoin-mining-work"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> How does bitcoin mining work with CryptoBitNet?                  </a></h4>
                        </div>
                        <div id="how-does-bitcoin-mining-work" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>It quick and easy! As soon as you’ve funded your Account, Your contract will be added to your profile, and you can immediately start mining. The first mining output is released in 24hrs and then the daily mining output will follow remark. Everyday of mining will be processed and sent into your Account in the follows 24hrs until mining is over. Please refer to the section. " WHEN DO I GET MY MINING OUTPUT " For more details.</p>

                          </div>
                        </div>
                      </div>



                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion1"
                              href="#what-does-100-percent-uptime-mean"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span>What is the mining performance ? Why are you not mining yourself?                  </a></h4>
                        </div>
                        <div id="what-does-100-percent-uptime-mean" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>
                              Besides the fact that we ourselves mine with the very same hardware, that we offer to our client our capital is limited. Bitcoin and Altcoin mining is one of the best ways to receive Cryptocurrencies. However, we do not want to " put all our eggs in one basket "</p>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion1"
                              href="#mining-farm-location"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> Where is your mining farm located?                  </a></h4>
                        </div>
                        <div id="mining-farm-location" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>
                              For security reasons, we do not disclose the exact location of our mining farms. As of April 2020, we are operating several mining farms that are located in Europe, America and Asia
                              Electricity Cost and Availability oh cooling are important, But not the only criteria. See our " <a href="datacenters.html">DATACENTER</a> SECTION "</p>
                          </div>
                        </div>
                      </div>

                      <!-- <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion1"
                              href="#mining-pools"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="/img/Version3/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="/img/Version3/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> Which pools are you using for mining?                  </a></h4>
                        </div>
                        <div id="mining-pools" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>We do not publish a list of pools we are using.                    Our main criteria for a good pool are: reliability, fee structure and reject rate.                    Going forward we will solo-mine a few coins (and pass the fee savings to our users!).                  </p>
                            <p>Our internal policy is: “be a good crypto citizen”.                    This means, that we will at least use two different pools (in some cases we use up to four) for each coin.                    This is to preserve the decentralized nature of the crypto networks!                    If we become aware that a pool is getting close to 50% share, we will switch away from it and use a backup instead.                  </p>
                          </div>
                        </div>
                      </div> -->

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion1"
                              href="#isnt-buying-the-hardware-cheaper"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> Isn’t buying the hardware cheaper?                  </a></h4>
                        </div>
                        <div id="isnt-buying-the-hardware-cheaper" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>
                              On the first glance one might think that buying miner X is slightly cheaper than hosted mining. However, there are a number of “hidden” costs related to purchasing and maintaining a miner that change the economics significantly:                  </p>
                            <ul>
                              <li>
                                <strong>Shipping costs:</strong> few merchants will cover this, but in most cases they will charge you extra.                    </li>
                              <li>
                                <strong>Customs dues / VAT:</strong> If it’s an International delivery you will likely have to pay Custom dues and Vats, Generally this 2 huge impact on the total cost of your mining Equipment.                    </li>
                              <!-- <li>
                                <strong>Delivery time:</strong> when you pay for your device you have to wait until the miner is packaged and shipped; if it is held up in the customs this can take weeks. And during that time you cannot mine at all (“opportunity costs”). You have to wait and hope. And if the merchant has a stock shortage; it is you who has to wait. With CryptoBitNet you pay and get your hashpower immediately online. No delays!                    </li>
                              <li>
                                <strong>Costs for additional equipment:</strong> when buying miners from larger retailers you often have to buy additional equipment like an extra PSU that matches the electricity specs for your country, control units and specific shelves to store them efficiently. This adds up significantly to the overall price for hashpower.                    </li>
                              <li> -->
                                <strong>Setting up the system up:</strong>When the device finally arrived, You have to assemble and configure  it. Beginners often underestimate the amount of work and technical knowledge that is needed to bring the device up and optimize its settings. People that used the First ASIC spend days and weeks on it.</li>
                              <li>
                                <strong>Electricity and Maintenance:</strong> Having the machines at home not only bring heat and noise, But also an increase of your electricity bills.                     </li>

                            </ul>
                            <p>
                              Please do not get us wrong: we do not want to discourage anyone from mining at home. We are often asked about prices and realized that many users do not know about all the hidden costs. </p>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion1"
                              href="#how-am-I-guaranteed-profits"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> How am I guaranteed profits?                  </a></h4>
                        </div>
                        <div id="how-am-I-guaranteed-profits" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>
                              In mining there are some key aspects attached:
                  </p>

                            <p>
                              Successful cryptocurrency mining builds in various underlying factors. The factors that affect potential coin production can be spilt into two  categories. </p>
                              <p>While Cryptobitnet has control over the facility specific factors and operating expenses, we also have the best mining hardwares and facilities, which makes mining efficient and profitable.</p>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion1"
                              href="#which-pool-are-you-using-for-mining"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> Which pool are you using for mining?                   </a></h4>
                        </div>
                        <div id="which-pool-are-you-using-for-mining" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>
                              We do not publish a list of pools we are using. Our main criteria for a good pool are: Reliability, fee structure and reject rate. Going forward we will solo-mine a few coins ( and pass the fee savings to our users).
                  </p>

                            <p>
                              Our internal policy is " Be a good crypto citizen”. This means, that we will at least use two difficult pools (in some cases we use up to four for different coin). This is to preserve the decentralized nature of the crypto networks: if we become aware that a pool is getting close to 50% share, we will switch away from it and use a backup instead. </p>

                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion1"
                              href="#why-is-mining-only-for-20days"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> Why is mining only for 20 days?             </a></h4>
                        </div>
                        <div id="why-is-mining-only-for-20days" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>
                            This is how long the mining process last
                  </p>

                          </div>
                        </div>
                      </div>




                    </div>        </div>



                  <div class="col-sm-6">

                     <div class="panel-group accordion" id="accordion2" aria-multiselectable="true">


                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion1"
                              href="#what-coins-can-be-mined"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> OK Fine! How do I Deposit into my Cryptobitnet Account?                  </a></h4>
                        </div>
                        <div id="what-coins-can-be-mined" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>
                              Select the address of whatever coin you want to mine, Then use our highly recommended platform <a href="http://buy.coingate.com/" title="buy.coingate.com">buy.coingate.com</a> <a href="http://bitcoin.com/" title="bitcoin.com">bitcoin.com</a> then complete payment through Bank Transfer or Card. You can also use Alternative payment via CashApp or PayPal.</p>
                            <!-- <p>
                              You must allocate your hashpower in order to determine the cryptocurrency received for your mining output.                    If no allocation has been made, the mining output will default to the following for the given blockchain algorithm:                  </p>
                            <ul>
                              <li>SHA-256 contract - Bitcoin</li>
                              <li>X11 contract - Dash</li>
                              <li>Ethash contract - Ethereum</li>
                              <li>CryptoNight contract - Monero/Monero Classic</li>
                              <li>Scrypt - Litecoin</li>
                              <li>Equihash - Zcash</li>
                            </ul>
                            <p>(*) “CryptoBitNet Advanced Allocation” (special feature):<br />
                              It allows you to get mining outputs in many different coins even if they are not mined directly by a certain algorithm.                    For example, you can get mining outputs in BTC while mining with an X11 algorithm!                    That is possible by mining the DASH coin directly, which is then automatically swapped to BTC by our algorithmic framework.                    The Allocation function is designed for customers to receive delivery of their mining results in their preferred cryptocurrency.                    We call it “mining BTC the smart way”.                    The same technique is also used to get mining results in LTC with a SHA-256 contract, etc.                  </p> -->
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion1"
                              href="#how-to-mine-diffent-coins-simultaneously"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> When would I recieve my mining output?                  </a></h4>
                        </div>
                        <div id="how-to-mine-diffent-coins-simultaneously" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>
                              Daily for a period of 20 days.</p>

                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion1"
                              href="#which-mining-algorithms-are-used-for-mining"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span>
                                How frequently would I recieve my mining output?                  </a></h4>
                        </div>
                        <div id="which-mining-algorithms-are-used-for-mining" class="panel-collapse collapse">
                          <div class="panel-body">

                            <p>
                              Mining output are generated Daily, but You can withdraw at the end of your Contract.</p>

                          </div>
                        </div>
                      </div>


                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion2"
                              href="#what-are-the-expected-returns"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> How can I reach you if I have further questions?                  </a></h4>
                        </div>
                        <div id="what-are-the-expected-returns" class="panel-collapse collapse">
                          <div class="panel-body">
                                              <p> Customer service is our highest priority! Making decisions is not only about having a good feeling but also about understanding the business  concept in detail. Therefore, if you need help, Our agent are available to assist you Via-Chat.  We are looking forward to hearing from you. </p>

                          </div>
                        </div>
                      </div>





                      <!-- <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion2"
                              href="#how-to-add-a-wallet-address"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> How do I add my wallet addresses to my CryptoBitNet profile?                  </a></h4>
                        </div>
                        <div id="how-to-add-a-wallet-address" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>In the menu “My Account” select “Settings” and then “Wallets”.                    Here you can set wallet addresses for each type of coin.</p>
                            <p>
                              Important: Remember that you have to add a wallet for each coin selected in the “Mining Allocation” section                  </p>
                            <p class="faq-img">
                              <picture>
                                <source srcset="/img/Version3/csc/gm-faq-1_1.webp 1x, /img/Version3/csc/gm-faq-1_1.webp 2x" type="image/webp">
                                <source srcset="/img/Version3/csc/gm-faq-1_1.png 1x, /img/Version3/csc/gm-faq-1_1.png 2x">
                              </picture>
                            </p>
                          </div>
                        </div>
                      </div> -->

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion2"
                              href="#what-cloud-mining"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> What’s Cloud Mining ?                  </a></h4>
                        </div>
                        <div id="what-cloud-mining" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>CLOUD MINING is the process of cryptocurrency mining utilizing a remote datacenter with shared processing power. This type of cloud mining enables users to mine bitcoins or alternative cryptocurrencies without managing the hardware.</p>

                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion2"
                              href="#which-mining-algorithm-and-architecture"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> Which mining algorithm and architecture types are used for mining ?                    </a></h4>
                        </div>
                        <div id="which-mining-algorithm-and-architecture" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>Most cryptocurrency protocols  utilize different proof-of-work mining algorithms to enforce their blockchain rules. In the table below, you can see what type of architecture we deploy got mining the available cryptocurrencies</p>
                            <p>Please be aware that blockchain developer may make changes to features and specifications of the algorithm over time, which can result in the elimination of support for and/ or a different use of chips utilized by cryptobitnet.</p>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#accordion2"
                              href="#what-in-it-cryptobitnet"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> What's in it for CryptoBitnet?                    </a></h4>
                        </div>
                        <div id="what-in-it-cryptobitnet" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>We are entitled to 12% of the total profits realized after mining is completed </p>
                            <!-- <ul>
                              <li>BEGINNERS = 2%</li>
                              <li>PREMIUM = 5%</li>
                              <li>INVESTORS = 7%</li>
                              <li>VIP = 10%</li>
                            </ul> -->
                          </div>
                        </div>
                      </div>








            </div></div><div class="clearfix"></div>


          </div>
          </div>
          </div>




          <div id="gm-customer-service-41">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <h2>Frequently asked questions</h2>
                </div>

                <div class="col-sm-12">


                  <div class="row">
                    <ul class="nav nav-tabs nav-tabs-main" role="tablist">
                      <li role="presentation" class="col-xs-2 active"><a href="#my-account" aria-controls="my-account" role="tab"
                          data-toggle="tab">My account</a>
                      </li>
                      <li role="presentation" class="col-xs-2"><a href="#mining-outputs" aria-controls="mining-outputs" role="tab"
                          data-toggle="tab">Mining outputs</a>
                      </li>
                      <!-- <li role="presentation" class="col-xs-2"><a href="#allocation" aria-controls="allocation" role="tab"
                          data-toggle="tab">Allocation</a>
                      </li> -->
                      <li role="presentation" class="col-xs-2"><a href="#contracts" aria-controls="contracts" role="tab"
                          data-toggle="tab">Contracts</a>
                      </li>
                      <!-- <li role="presentation" class="col-xs-2"><a href="#affiliate-program" aria-controls="affiliate-program"
                          role="tab" data-toggle="tab">Affiliate program</a>
                      </li> -->
                      <li role="presentation" class="col-xs-2"><a href="#general" aria-controls="general" role="tab"
                          data-toggle="tab">General</a>
                      </li>
                    </ul>
                    <div class="clearfix tabs-clearfix"></div>
                  </div>

                  <!-- Tab navigation -->


                  <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade in active" id="my-account">
                      <!-- start MY ACCOUNT -->
                      <div class="row">
                        <div class="col-sm-10 col-md-8">

                          <div class="panel-group accordion" id="faq-accordion1">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion1"
                                    href="#csp-fp1-1" aria-controls="csp-fp1-1"><span><svg class="gm-icon gm-icon-arrow-down">
                                        <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                      </svg><svg class="gm-icon gm-icon-arrow-up">
                                        <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                      </svg></span> How can I create a new account?                        </a></h4>
                              </div>
                              <div id="csp-fp1-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <p>
                                    To create a Cryptobitnet mining, Simply click on Sign-Up, Enter your Full Name, Username, Package, Password, Confirm Password </p>
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion1"
                                    href="#csp-fp1-2" aria-controls="csp-fp1-2"><span><svg class="gm-icon gm-icon-arrow-down">
                                        <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                      </svg><svg class="gm-icon gm-icon-arrow-up">
                                        <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                      </svg></span> How can I deposit into my Cryptobitnet Account?                        </a></h4>
                              </div>
                              <div id="csp-fp1-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <p>
                                    Click on Deposit, select one of the our highly recommended platform to purchase <a href="http://buy.coingate.com/" title="buy.coingate.com">buy.coingate.com</a> <a href="http://bitcoin.com/" title="bitcoin.com">bitcoin.com</a> Or CASHAPP(USA only). Make payment with your Card details </p>

                                </div>
                              </div>
                            </div>


                          </div>

                        </div>


                      </div>
                    </div><!-- end csp-faq-1 - MY ACCOUNT -->


                    <div role="tabpanel" class="tab-pane fade" id="mining-outputs">
                      <!-- start MINING OUTPUTS -->
                      <div class="row">
                        <div class="col-sm-10 col-md-8">

                          <div class="panel-group accordion" id="faq-accordion2">


                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion2"
                                    href="#csp-fp2-1" aria-controls="csp-fp2-1"><span><svg class="gm-icon gm-icon-arrow-down">
                                        <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                      </svg><svg class="gm-icon gm-icon-arrow-up">
                                        <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                      </svg></span>What are the expected return?                        </a></h4>
                              </div>
                              <div id="csp-fp2-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <p>
                                    This strictly depends on the selected package. So each customer  must make an independent decision about which package would be more convenient and profitable.</p>
                                </div>

                                <!-- subcategory 1 -->



          </div><!-- end #faq-accordion2 -->

          </div><!-- end col-sm-10 col-md-8 -->
          </div><!-- end row -->
          </div><!-- end csp-faq-2 - MINING OUTPUTS -->
          </div>
                    </div>


          <div role="tabpanel" class="tab-pane fade" id="allocation">
            <!-- start ALLOCATION -->
            <div class="row">
              <div class="col-sm-10 col-md-8">

                <div class="panel-group accordion" id="faq-accordion3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion3"
                          href="#csp-fp3-1" aria-controls="csp-fp3-1"><span><svg class="gm-icon gm-icon-arrow-down">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                            </svg><svg class="gm-icon gm-icon-arrow-up">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                            </svg></span> What coins can I mine with each algorithm?              </a></h4>
                    </div>
                    <div id="csp-fp3-1" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Please find the information in the table below.</p>
                        <p class="faq-img">
                          <picture>
                            <!--[if IE 9]><video style="display: none"><![endif]-->
                            <source
                              srcset="/img/Version3/csc/gm-csc-algo-table.webp 1x, /img/Version3/csc/gm-csc-algo-table@2x.webp 2x"
                              type="image/webp">
                            <source
                              srcset="/img/Version3/csc/gm-csc-algo-table.png 1x, /img/Version3/csc/gm-csc-algo-table@2x.png 2x">
                            <!--[if IE 9]></video><![endif]-->
                            <img src="/img/Version3/csc/gm-csc-algo-table.png" title="Algorithm table" alt="Algorithm table" />
                          </picture>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion3"
                          href="#csp-fp3-2" aria-controls="csp-fp3-2"><span><svg class="gm-icon gm-icon-arrow-down">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                            </svg><svg class="gm-icon gm-icon-arrow-up">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                            </svg></span> Why is my allocation switching back to BTC (SHA-256)?              </a></h4>
                    </div>
                    <div id="csp-fp3-2" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>
                          The allocation is only reverting in appearance. Each time you click on ‘Mining allocation’, you will be sent to SHA-256 by default. Thus, to see the allocation for X11, Zcash, Ethash, Monero, or Scrypt, please click on X11, Zcash, Ethash, Monero, or Scrypt at the top of the page. You will be shown the correct allocation.              </p>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion3"
                          href="#csp-fp3-3" aria-controls="csp-fp3-3"><span><svg class="gm-icon gm-icon-arrow-down">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                            </svg><svg class="gm-icon gm-icon-arrow-up">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                            </svg></span> How does allocation work? What does AUTO mean?              </a></h4>
                    </div>
                    <div id="csp-fp3-3" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Every algorithm can mine only certain cryptocurrencies directly:</p>
                        <ul>
                          <li>SHA-256 mines BTC and BCH</li>
                          <li>X11 mines DASH</li>
                          <li>Ethereum mines ETH and ETC</li>
                          <li>Zcash mines ZEC</li>
                          <li>Scrypt mines LTC and DOGE</li>
                          <li>CryptoNight-R mines XMR</li>
                          <li>CryptoNightV0 mines XMC</li>
                        </ul>
                        <p>The other coins are marked with AUTO and they are not mined directly.                In other words, mining outputs will be traded automatically from the mined coins to the AUTO ones at the exchange rate of that day.              </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- end csp-faq-3 - ALLOCATION -->


          <div role="tabpanel" class="tab-pane fade" id="contracts">
            <!-- start CONTRACTS -->
            <div class="row">
              <div class="col-sm-10 col-md-8">

                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="fa4-1">
                    <div class="panel-group accordion" id="faq-accordion4-1">


                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion4-1"
                              href="#csp-fp4-15" aria-controls="csp-fp4-15"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span>
                                How long does mining last?                  </a></h4>
                        </div>
                        <div id="csp-fp4-15" class="panel-collapse collapse">
                          <div class="panel-body">

                            <p>
                              A period of 20 days.</p>

                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion4-1"
                              href="#csp-fp4-14" aria-controls="csp-fp4-14"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> Can I recieve mining outputs monthly or weekly?                  </a></h4>
                        </div>
                        <div id="csp-fp4-14" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>Your mining output will be sent automatically to your wallet once the minimum amount for transfer is reached/ mining is completed. It is not possible to delay the mining output for security reasons.</p>

                          </div>
                        </div>
                      </div>

                      <!-- <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion4-1"
                              href="#csp-fp4-3" aria-controls="csp-fp4-3"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> Can I switch from monthly to weekly?                  </a></h4>
                        </div>
                        <div id="csp-fp4-3" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p> No! But you can switch from weekly to monthly</p>
                          </div>
                        </div>
                      </div> -->


                      </div>

                    </div>        </div>
                  <!-- <div role="tabpanel" class="tab-pane" id="fa4-2">
                    <div class="panel-group accordion" id="faq-accordion4-2">


                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion4-2"
                              href="#csp-fp4-7" aria-controls="csp-fp4-7"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="/img/Version3/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="/img/Version3/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> Can I switch my contract to a different product?                  </a></h4>
                        </div>
                        <div id="csp-fp4-7" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>
                              Unfortunately, it is not possible to switch contracts because mining machines have already been associated to it and the mining has started.                  </p>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion4-2"
                              href="#csp-fp4-10" aria-controls="csp-fp4-10"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="/img/Version3/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="/img/Version3/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> Why was I charged cash advance?                  </a></h4>
                        </div>
                        <div id="csp-fp4-10" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>
                              In some rare cases, some issuing banks may charge additional fees from customers who purchase Bitcoin or Cloud Mining services using Credit Card.                    They call it Cash Advance.                    Please contact your bank beforehand for further information.</p>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion4-2"
                              href="#csp-fp4-12" aria-controls="csp-fp4-12"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="/img/Version3/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="/img/Version3/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> Can I receive mining outputs monthly or weekly?                  </a></h4>
                        </div>
                        <div id="csp-fp4-12" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>
                              Your mining outputs will be sent automatically to your wallet once the minimum amount for transfer is reached.                    It is not possible to delay the mining output for security reasons.                    Please visit the “My Account - Settings - Wallets” section on your account for details regarding minimum transaction thresholds.                  </p>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion4-2"
                              href="#csp-fp4-11" aria-controls="csp-fp4-11"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="/img/Version3/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="/img/Version3/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> What will happen when Ethereum switches from PoW to PoS?                  </a></h4>
                        </div>
                        <div id="csp-fp4-11" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>
                              Currently Ethereum uses the Proof of Work concept, which means Ethereum is released gradually as a reward to miners that spent time and effort (and electricity) on finding blocks.                    This mining consumes energy and the developers of Ethereum have already mentioned that at some point they might switch the algorithm to the Proof of Stake concept, which, simply put, gives rewards to people who hold on to their Ethereum instead of giving rewards to those that mine.                    When that switch happens, mining Ethereum will no longer be possible.                    This might occur before the end of your Ethereum mining plan, but your hashrate will not be lost!                    Instead, we will reconfigure the underlying hardware to mine the most popular coin, and from then on your hashrate will be mining that other coin.                    Which coin will be the most popular is impossible to say.                    We will decide on that when Ethereum switches from PoW to Pos.</p>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion4-2"
                              href="#csp-fp4-1" aria-controls="csp-fp4-1"><span><svg class="gm-icon gm-icon-arrow-down">
                                  <use xlink:href="/img/Version3/sprite.svg#gm-icon-arrow-down"></use>
                                </svg><svg class="gm-icon gm-icon-arrow-up">
                                  <use xlink:href="/img/Version3/sprite.svg#gm-icon-arrow-up"></use>
                                </svg></span> What does “Open-Ended” contract mean?                  </a></h4>
                        </div>
                        <div id="csp-fp4-1" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>
                              The specific duration of an Open-Ended contract is variable and determined by three factors: The mining difficulty, Bitcoin vs. USD exchange rates, and the daily maintenance fee. We cannot control the first two factors which are unpredictable, but we do always deploy the latest mining technology, and do our best to keep it running at their maximum capability for you.                  </p>
                            <p>
                              The daily maintenance fee covers all ongoing costs for the hosting service, including electricity, cooling, and hardware maintenance work.                    It is deducted from the daily mining reward prior to delivery of your mining results to the “Activity - My Activity” section of your account (or directly to your wallet, if the threshold for transfer has been reached).                    In the event that the daily reward of your hosted mining is lower than the daily maintenance fee, the service may become inactive and your output will become 0.                  </p>
                            <p>After that, the contract will continue to mine for 60 days. That means that we will take care of the maintenance fee in the hope that your contract will become active again.                    This may happen if the mining network difficulty decreases and/or the Bitcoin price increases. If the contract does not become active within those 60 consecutive days, it will be terminated because the mining machines are consuming resources (electricity, cooling, hosting, servicing, etc.) which cannot be covered by their generated mining rewards.</p>
                          </div>
                        </div>
                      </div>
                    </div>        </div>      </div> -->
              </div>

              <!-- <div class="col-sm-12">
                <nav aria-label="Page navigation" class="paginator">
                  <ul class="pagination" role="tablist">
                    <li class="disabled"><a href="#" aria-label="Previous">
                        <svg class="gm-icon gm-icon-arrow-left">
                          <use xlink:href="/img/Version3/sprite.svg#gm-icon-arrow-left"></use>
                        </svg>
                      </a></li>
                    <li role="presentation" class="active"><a href="#fa4-1" aria-controls="fa4-1" role="tab"
                        data-toggle="tab">1</a>
                    </li>
                    <li role="presentation"><a href="#fa4-2" aria-controls="fa4-2" role="tab" data-toggle="tab">2</a></li>
                    <li class="disabled"><a href="#" aria-label="Next">
                        <svg class="gm-icon gm-icon-arrow-right">
                          <use xlink:href="/img/Version3/sprite.svg#gm-icon-arrow-right"></use>
                        </svg>
                      </a></li>
                  </ul>
                </nav>
              </div> -->

            </div>
          </div><!-- end csp-faq-4 - CONTRACTS -->


          <div role="tabpanel" class="tab-pane fade" id="affiliate-program">
            <!-- start AFFILIATE PROGRAM -->
            <div class="row">
              <div class="col-sm-10 col-md-8">

                <div class="panel-group accordion" id="faq-accordion5">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion5"
                          href="#csp-fp5-1" aria-controls="csp-fp5-1"><span><svg class="gm-icon gm-icon-arrow-down">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                            </svg><svg class="gm-icon gm-icon-arrow-up">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                            </svg></span> How do I use my affiliate code?              </a></h4>
                    </div>
                    <div id="csp-fp5-1" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>
                          Share it! Twitter, Facebook, your brother’s podcast or your mom’s blog - it doesn’t matter where, but get it out there!              </p>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion5"
                          href="#csp-fp5-2" aria-controls="csp-fp5-2"><span><svg class="gm-icon gm-icon-arrow-down">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                            </svg><svg class="gm-icon gm-icon-arrow-up">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                            </svg></span> How does the affiliate code work?              </a></h4>
                    </div>
                    <div id="csp-fp5-2" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>It’s simple - anytime your referral uses your affiliate code, they’ll get a 3% discount on their purchase, and you’ll get a hashpower upgrade. The upgrade corresponds to your current affiliate rank - the higher your rank, the bigger the rewards! You’ll be notified by your registered email anytime someone uses your affiliate code.</p>
                        <p>
                          Promo codes can be used for the purchase of all CryptoBitNet plans, with the exception of 6-month mining plans.              </p>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion5"
                          href="#csp-fp5-3" aria-controls="csp-fp5-3"><span><svg class="gm-icon gm-icon-arrow-down">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                            </svg><svg class="gm-icon gm-icon-arrow-up">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                            </svg></span> How big are the rewards?              </a></h4>
                    </div>
                    <div id="csp-fp5-3" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>At Rank 1 - our ‘Starter’ tier - you’ll get 2.5% of the quantity of hashpower purchased by your referral. For example, if someone purchases a 10 MH/s contract using your affiliate code, you’ll get 0.25MH/s for free - and they’ll get 3% off the total price. It’s a win-win situation!</p>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion5"
                          href="#csp-fp5-4" aria-controls="csp-fp5-4"><span><svg class="gm-icon gm-icon-arrow-down">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                            </svg><svg class="gm-icon gm-icon-arrow-up">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                            </svg></span> What do you mean by a ‘ranking’ system?              </a></h4>
                    </div>
                    <div id="csp-fp5-4" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>
                          Our tier-based program means you’ll level up based on your progress: the more you refer, the bigger the bonus. There are a total of eight ranks to achieve, each with a bigger reward than the last - and some very special rewards.              </p>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion5"
                          href="#csp-fp5-5" aria-controls="csp-fp5-5"><span><svg class="gm-icon gm-icon-arrow-down">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                            </svg><svg class="gm-icon gm-icon-arrow-up">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                            </svg></span> How do I ‘rank up’? Can I move down in rank?              </a></h4>
                    </div>
                    <div id="csp-fp5-5" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>
                          Your rank is based on the total amount your referrals have purchased over the last 100 days.              </p>
                        <p>You start at Rank 1 - Starter.                To move up in rank, you’ll need to collect a total of $100 USD in referred sales.                If you refer $50 USD in sales in the two weeks, then another $60 USD in the third week, your total amount purchased by your referrals will be $110 USD - so you’ll hit Rank 2 - Copper.                Six weeks later, your referrals might purchase another $400 USD - your total would be $510 USD, and you’d hit Rank 3 - Bronze.              </p>
                        <p>
                          Ranks are based over the last 100 days - that means they’re variable and your rank can ‘decay’ over time. Any referral’s purchase older than 100 days will be discarded, and your rank (and reward) adjusted accordingly.              </p>
                        <p>You’ll see your current rank and total sales performance on your affiliate page.              </p>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion5"
                          href="#csp-fp5-6" aria-controls="csp-fp5-6"><span><svg class="gm-icon gm-icon-arrow-down">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                            </svg><svg class="gm-icon gm-icon-arrow-up">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                            </svg></span>
                          What are Affiliate ID URLs? How can I use them? What’s the difference between a URL and a ‘promo code’?              </a></h4>
                    </div>
                    <div id="csp-fp5-6" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>
                          Your affiliate ID URLs are personalized for you, to link across various services: websites, on your social media accounts, on email and forum signatures. It ties a user to a particular referrer, and is used when you create an account. This will tie all future purchases to the affiliate account, as long a promotional code isn’t entered.              </p>
                        <p>
                          The promo code, on the other hand, can be used with both a new account, and an existing one - simply apply the promotional code at checkout!              </p>
                        <p>Remember - the promotional code will always take priority.                If you sign up with affiliate A’s URL, and then apply affiliate B’s promotional code to get a discount - only affiliate B (and not affiliate A) will receive the hashpower bonus.              </p>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion5"
                          href="#csp-fp5-7" aria-controls="csp-fp5-7"><span><svg class="gm-icon gm-icon-arrow-down">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                            </svg><svg class="gm-icon gm-icon-arrow-up">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                            </svg></span> Why do some sales remain in the ‘pending’ state?              </a></h4>
                    </div>
                    <div id="csp-fp5-7" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Sometimes, some of your sales will remain in ‘pending’.                These will be credited appropriately once your referral’s purchase is finalized in our system - this can take <em>up to</em> 6 days.              </p>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion5"
                          href="#csp-fp5-8" aria-controls="csp-fp5-8"><span><svg class="gm-icon gm-icon-arrow-down">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                            </svg><svg class="gm-icon gm-icon-arrow-up">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                            </svg></span> I have a suggestion regarding the affiliate program…              </a></h4>
                    </div>
                    <div id="csp-fp5-8" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Let us know! We really want to hear your feedback, and we mean that - so send your opinions, ideas and thoughts to <a
                                                                      href="mailto:partners@genesis-mining.com?subject=Affiliate program feedback">partners@genesis-mining.com</a> where you will get individual help and support. We’re constantly working to improve our program, and your feedback is needed to make it the best it can possibly be.</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div><!-- end #csp-faq-5 - AFFILIATE PROGRAM -->


          <div role="tabpanel" class="tab-pane fade" id="general">
            <!-- start GENERAL -->
            <div class="row">
              <div class="col-sm-10 col-md-8">

                <div class="panel-group accordion" id="faq-accordion6">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title panel-inactive"><a data-toggle="collapse" data-parent="#faq-accordion6"
                          href="#csp-fp6-1" aria-controls="csp-fp6-1"><span><svg class="gm-icon gm-icon-arrow-down">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-down"></use>
                            </svg><svg class="gm-icon gm-icon-arrow-up">
                              <use xlink:href="img/sprite.svg#gm-icon-arrow-up"></use>
                            </svg></span>
                          Are you a legit company? or scam / Ponzi scheme / etc... Can I trust CryptoBitNet?              </a></h4>
                    </div>
                    <div id="csp-fp6-1" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>We are one  the most reliable companies, and we are very serious about the business we are in. You can find out about our staff and management here:  <a href="index.html#about" target="_blank" rel="noreferrer">ABOUT US</a><br />To get inside views of our datacenters, check here: <a href="datacenters.html" target="_blank" rel="noreferrer">DATACENTER</a></p>
                      </div>
                    </div>
                  </div>



                </div><!-- end faq-accordion6 - GENERAL -->

              </div><!-- end col-sm-10 col-md-8 - GENERAL -->
            </div><!-- end row - GENERAL -->
          </div><!-- end csp-faq-6 - GENERAL -->


          </div><!-- Tab content container -->

          </div>
          </div>

          <!--<div class="cus-sup-btn-holder cus-sup-btn-2">-->
          <!--<button title="Need more help"-->
          <!--class="btn btn-warning">Need more help</button>-->
          <!--</div>-->
          </div>
          </div>


          <div id="gm-customer-service-5">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <h2>Contact Customer Service</h2>
                </div>


                <div class="col-sm-6 col-md-5">
                  <div class="alert alert-info2" style="margin-top:-50px;">
                    <p>
                      Keep in mind that the quality and promptness of our response depends on how accurately you fill out the Contact form.            Our drop down menu has several options, and if the wrong topic is used, it can delay the resolution of the ticket.          </p>
                    <p>We are looking forward to hearing from you!</p>
                  </div>
                </div>
                <div class="clearfix"></div>



                <div class="col-sm-6 col-md-5">
                  <div class="customer-service-form-box">
                    <form action="/contact" class="" enctype="multipart/form-data" id="PageDisplayForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="data[_Token][key]" value="92f8cb019ac2ac8014318d9157b36d007701996e" id="Token2137707148"/></div>
                    @csrf
                    <div class="form-group">
                      <input name="name" class="form-control" placeholder="Your name" id="YourName" type="text" required="required"/>          </div>
                    <div class="form-group">
                      <input name="email" class="form-control" placeholder="Your account email" id="EmailAddress" type="email" required="required"/>          </div>
                    <div class="form-group">            <input name="phone" class="form-control
                                      form-tel" placeholder="Your phone number" id="PhoneNumber" type="tel"/>          </div>

                    <div class="form-group">            <select name="topic" class="form-control selectpicker
                                      cs-selection" data-style="" data-size="10" data-dropup-auto="false" title="Select your service topic 1" data-header="Select your service topic 1" data-order="1" id="SupportTopic1" required="required">
          <option value="my_account">My account</option>
          <!-- <option value="order_purchase">Order purchase</option> -->
          <option value="output">Mining output</option>
          <!-- <option value="allocation">Mining allocation</option>
          <option value="affiliate">Affiliate program</option> -->
          <option value="general">General</option>
          </select>          </div>




                  <div class="form-group form-group-textarea">
                    <label for="PageMessage">Enter your message here</label><textarea name="yourmessage" class="form-control" placeholder="Start typing here..." onkeyup="countChar(this)" cols="30" rows="6" id="PageMessage" required="required"></textarea>          <p class="letter-counter"><span id="charNum">0</span> / 240</p>
                  </div>

                  <!-- <div class="form-group">
                    <input type="file" name="data[Page][attachments][]"  class="form-control" multiple="multiple" id="attachment"/>          <h5><small
                        style="margin-bottom: 0px">Maximum upload size is 8MB.Maximum size per file is 2MB.</small>
                    </h5>
                  </div> -->

                  <div class="form-group form-group-captcha">


                  <div class="form-group">
                    <button type="submit" class="btn btn-warning" id="btn-submit"
                      style="margin-bottom: 50px;">Submit ticket</button>
                  </div>
                  <div class="clearfix"></div>

                  <input type="hidden" name="data[Page][check]" value="c112c572743e5e5c89fc4ae0dc81228bc4d72b09" id="PageCheck"/>
                  <div style="display:none;"><input type="hidden" name="data[_Token][fields]" value="ae5ae1c251c79baeaa2c9b7f53307674a883220c%3A" id="TokenFields981945300"/><input type="hidden" name="data[_Token][unlocked]" value="Page.check" id="TokenUnlocked2070158681"/></div></form>
                  <!-- <div class="row">
                    <div class="col-sm-12">
                      <span>If you are looking to contact our sales department click <a href="/contact-sales" title="Contact sales department">here</a>.</span>
                    </div>
                  </div> -->
                </div>
              </div>

              <div class="col-sm-6 col-md-6 col-md-offset-1">






          </div>
          <div class="clearfix"></div>
          </div>
          </div>
          </div>



          </div>




          <div class="modal fade modal-csc" id="CSCModal" tabindex="-1" role="dialog" aria-labelledby="CSCModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                      aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title" id="CSCModalLabel">Please Log In</h4>
                </div>
                <div class="modal-body">
                  <p>Please Log In to submit a Ticket about mining outputs</p>
                  <div class="btn-box">
                    <a href="/contact-support" class="btn btn-warning">Login</a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Go back</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade modal-csc" id="CSCModalOneTicket" tabindex="-1" role="dialog"
            aria-labelledby="CSCModalOneTicketLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="CSCModalOneTicketLabel">Ticket already submitted</h4>
                </div>
                <div class="modal-body">
                  <p>We have recieved an inquiry with the same topic.          Your inquiry is in queue and will be processed as soon as possible.<br />Thank you for your patience and understanding.        </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal"
                    aria-label="Close">Close</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade modal-csc" id="CSCModalMessage" tabindex="-1" role="dialog"
            aria-labelledby="CSCModalMessageLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                        </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal"
                    aria-label="Close">Close</button>
                </div>
              </div>
            </div>
          </div>

          </div>

          <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
          <link type="text/css" rel="stylesheet" href="css/bootstrap-select-form.min.css" />
          <link type="text/css" rel="stylesheet" href="css/slick.min.css" />
          <link type="text/css" rel="stylesheet" href="css/bootstrap-date-time-picker.min.css" />

          <script type="text/javascript" src="js/bootstrap-select-front.min.js"></script>
          <script type="text/javascript" src="js/moment.min.js"></script>
          <script type="text/javascript" src="js/bootstrap-date-time-picker.min.js"></script>
          <script type="text/javascript" src="js/slick.min.js"></script>


          <script type="text/javascript">
            $(document).ready(function() {


              /* input:focus */
              $('.form-control').on('focusin', function() {
                $(this).parent().addClass('focus');
              });
              $('.form-control').on('focusout', function() {
                $(this).parent().removeClass('focus');
              });

              $('.form-control').on('mouseover', function() {
                $(this).parent().addClass('hover');
              });
              $('.form-control').on('mouseout', function() {
                $(this).parent().removeClass('hover');
              });

              /* input:active */
              /*$('.form-control').mousedown(function() {
               $(this).parent().addClass('active');
               });
               $('.form-control').mouseup(function() {
               $(this).parent().removeClass('active');
               });*/

              /*$('.form-control').click(function () {
               $inputs.parent().filter('.red').removeClass('red');
               $(this).parent().addClass('red');
               });*/


              /* Slider */
              $('.video-slide').slick({
                infinite: true,
                speed: 450,
                autoplay: true,
                autoplaySpeed: 6500,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev"><svg class="gm-icon gm-icon-arrow-left"><use xlink:href="img/sprite.svg#gm-icon-arrow-left"></use></svg></button>',
                nextArrow: '<button type="button" class="slick-next"><svg class="gm-icon gm-icon-arrow-right"><use xlink:href="img/sprite.svg#gm-icon-arrow-right"></use></svg></button>',
                appendArrows: '.video-nav',
                dots: true,
                dotsClass: 'video-dots',
                appendDots: '.video-nav',
                responsive: [{
                    breakpoint: 1440,
                    settings: {
                      slidesToShow: 4
                    }
                  },
                  {
                    breakpoint: 1200,
                    settings: {
                      slidesToShow: 3
                    }
                  },
                  {
                    breakpoint: 992,
                    settings: {
                      slidesToShow: 3
                    }
                  },
                  {
                    breakpoint: 768,
                    settings: {
                      slidesToShow: 2
                    }
                  },
                  {
                    breakpoint: 600,
                    settings: {
                      slidesToShow: 1
                    }
                  }
                ]
              });

              //    KK testing
              /*var btnPrev = document.querySelector(".prev");
                    var btnNext = document.querySelector(".next");
                    var btnNext2 = document.querySelector(".next-2");
                    var btnHolder = document.querySelector(".button-holder-faq");

                    var section_1 = document.querySelector("#gm-customer-service-2");
                    var section_2 = document.querySelector("#gm-customer-service-4");
                    var section_3 = document.querySelector("#gm-customer-service-5");

                    var allSections = [section_1, section_2, section_3];

                    var sectionSelected = 1
                    initSections(sectionSelected);

                    btnPrev.addEventListener("click", function () {
                        sectionSelected--;
                        showSections(sectionSelected);
                    });

                    btnNext.addEventListener("click", function () {
                        sectionSelected++;
                        showSections(sectionSelected);
                    });

                    btnNext2.addEventListener("click", function () {
                        sectionSelected++;
                        showSections(sectionSelected);
                    });*/

              /* Functions */
              /*function initSections(sectionSelected) {
                  if (sectionSelected === 1) {
                      $(btnNext).removeClass("btn-hide");
                      $(btnNext2).addClass("btn-hide");
                      $(btnHolder).removeClass("button-holder-faq--bgc");
                      $(section_1).addClass("active-faq");

                  } else if (sectionSelected === 3) {
                      $(btnPrev).removeClass("btn-hide");
                      $(btnHolder).removeClass("button-holder-faq--bgc");
                      $(section_3).addClass("active-faq");
                  } else {
                      $(btnNext).removeClass("btn-hide");
                      $(btnPrev).removeClass("btn-hide");
                      $(btnHolder).addClass("button-holder-faq--bgc");
                      $(section_2).addClass("active-faq");
                  }
              }

              function showSections(sectionId) {
                  allSections.forEach(function (element) {
                      if ($(element).hasClass("active-faq")) {
                          $(element).removeClass("active-faq");
                      }
                  });

                  if (sectionId === 1) {
                      $(btnPrev).addClass("btn-hide");
                      $(btnNext).removeClass("btn-hide");
                      $(btnNext2).addClass("btn-hide");
                      $(section_1).addClass("active-faq");
                      $(btnHolder).removeClass("button-holder-faq--bgc");
                      $('html,body').animate({scrollTop: $("#gm-customer-service-2").offset().top -100},300);
                  } else if (sectionSelected === 3) {
                      $(btnNext).addClass("btn-hide");
                      $(btnNext2).addClass("btn-hide");
                      $(section_3).addClass("active-faq");
                      $(btnHolder).removeClass("button-holder-faq--bgc");
                       $('html,body').animate({scrollTop: $("#gm-customer-service-5").offset().top -100},300);
                  } else {
                      $(btnPrev).removeClass("btn-hide");
                      $(btnNext).addClass("btn-hide");
                      $(btnNext2).removeClass("btn-hide");
                      $(section_2).addClass("active-faq");
                      $(btnHolder).addClass("button-holder-faq--bgc");
                      $('html,body').animate({scrollTop: $("#gm-customer-service-4").offset().top -100},300);
                  }
              }*/
              //  END KK testing


              /* Accordion */
              $('.accordion').on('hidden.bs.collapse', function() {});

              /*var q = parseInt("");

                   if(q != 0){
                   var checkFaq = $('#csp-top-' + q);
                   if(checkFaq.length > 0)
                   checkFaq.collapse('show');
                   }*/

              function toggleChevron(e) {
                $(e.target).parent('.panel-default').toggleClass('active');
                $(e.target)
                  .prev('.panel-heading')
                  .find('.panel-title')
                  .toggleClass('panel-inactive panel-active');
              }

              $('.accordion').on('hidden.bs.collapse', toggleChevron);
              $('.accordion').on('shown.bs.collapse', toggleChevron);

            });
            </script>


            <script>
            $(function() {

              $('.form-tel').keyup(function(e) {
                  if (this.value != '-')
                    while (isNaN(this.value))
                      this.value = this.value.split('').reverse().join('').replace(/[\D]/i, '')
                      .split('').reverse().join('');
                })
                .on("", function(e) {
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
            }
            </script>

            <script type="text/javascript">
            $(document).ready(function() {
              if (location.hash != null && location.hash != "") {
                $('.collapse').removeClass('in');
                $(location.hash + '.collapse').collapse('show');
              }
            });
            </script>


            <div id="rawTopics" data-topics='{"CSG":{"my_account":"My account","order_purchase":"Order purchase","output":"Mining output","allocation":"Mining allocation","affiliate":"Affiliate program","general":"General"},"CSG|my_account":{"general":"General","wallet":"Cryptocurrency wallet"},"CSG|my_account|general":{"unlock":"Unlock my account","setup_2fa":"How to set up 2FA","lost_device_access":"Lost access to my device (I forgot 2FA code)","change_password":"Change password","forgot_password":"Forgot my password","password_length":"Password length","lost_email_access":"Lost access to my email","terminate":"Terminate my account","change_email":"Change my login email address","signup":"How to sign up","fake_scam_site":"Fake\/Scam site","other":"Nothing listed above"},"CSG|my_account|wallet":{"wallet_setup":"How to setup my wallet","wallet_change":"How to change my wallet","wallet_issues":"Wallet issues","other":"Nothing listed above"},"CSG|order_purchase":{"general":"General","credit_card":"I\u2019ve made credit card purchase","crypto":"I\u2019ve made cryptocurrency purchase"},"CSG|order_purchase|general":{"place_order":"How to place an order","payment_methods":"Payment methods","other":"Nothing listed above"},"CSG|order_purchase|credit_card":{"no_confirmation":"I didn\u2019t receive payment confirmation","order_status":"What is my order status?","order_pending":"My order status is pending","order_approved":"My order status is approved","order_canceled":"My order status is canceled","order_declined":"My order status is declined","order_missing":"I don\u2019t see my order listed","other":"Nothing listed above"},"CSG|order_purchase|crypto":{"no_confirmation":"I didn\u2019t receive payment confirmation","order_status":"What is my order status?","order_pending":"My order status is pending","order_approved":"My order status is approved","order_canceled":"My order status is canceled","order_expired":"My order status is expired","order_overpaid":"I\u2019ve overpaid my order","order_underpaid":"I\u2019ve underpaid my order","order_missing":"I don\u2019t see my order listed","other":"Nothing listed above"},"CSG|output":{"first":"First mining output","missing":"Missing mining output","blockchain_error":"Blockchain transaction error"},"CSG|output|first":{"credit_card":"I\u2019ve made credit card purchase","crypto":"I\u2019ve made cryptocurrency purchase"},"CSG|output|first|crypto":{"btc":"Bitcoin","dash":"Dash","ltc":"Litecoin","doge":"Dogecoin","bch":"Bitcoin Cash","zec":"Zcash"},"CSG|output|missing":{"date":"Missing date"},"CSG|output|missing|date":{"sha256":"Bitcoin Mining","equihash":"Zcash Mining","ethash":"Ether Mining","x11":"Dash Mining","cryptonight":"Monero Mining","cryptonightv0":"Monero Classic Mining","scrypt":"Litecoin Mining"},"CSG|output|missing|date|sha256":{"btc":"BTC","bch":"BCH","btg":"BTG","zet":"ZET","uno":"UNO","btcd":"BTCD","doge":"DOGE","ltc":"LTC","dash":"DASH","zec":"ZEC"},"CSG|output|missing|date|equihash":{"eth":"ETH","btc":"BTC","btg":"BTG","zec":"ZEC"},"CSG|output|missing|date|ethash":{"btc":"BTC","btg":"BTG","eth":"ETH","zec":"ZEC","rep":"REP","etc":"ETC","steem":"STEEM","ltc":"LTC","doge":"DOGE","bch":"BCH"},"CSG|output|missing|date|x11":{"dash":"DASH","btc":"BTC","btg":"BTG","start":"START","ltc":"LTC","doge":"DOGE","btcd":"BTCD","ppc":"PPC","nmc":"NMC","cure":"CURE","xmr":"XMR","zec":"ZEC"},"CSG|output|missing|date|cryptonight":{"xmr":"XMR","xmc":"XMC","etn":"ETN","btc":"BTC","btg":"BTG","ltc":"LTC","dash":"DASH","zec":"ZEC"},"CSG|output|missing|date|cryptonightv0":{"xmc":"XMC","xmr":"XMR","etn":"ETN","btc":"BTC","btg":"BTG","ltc":"LTC","dash":"DASH","zec":"ZEC"},"CSG|output|missing|date|scrypt":{"dash":"DASH","zec":"ZEC","ltc":"LTC","doge":"DOGE","btc":"BTC","btg":"BTG"},"CSG|output|blockchain_error":{"date":"Missing date"},"CSG|output|blockchain_error|date":{"sha256":"Bitcoin Mining","equihash":"Zcash Mining","ethash":"Ether Mining","x11":"Dash Mining","cryptonight":"Monero Mining","cryptonightv0":"Monero Classic Mining","scrypt":"Litecoin Mining"},"CSG|output|blockchain_error|date|sha256":{"btc":"BTC","bch":"BCH","btg":"BTG","zet":"ZET","uno":"UNO","btcd":"BTCD","doge":"DOGE","ltc":"LTC","dash":"DASH","zec":"ZEC"},"CSG|output|blockchain_error|date|equihash":{"eth":"ETH","btc":"BTC","btg":"BTG","zec":"ZEC"},"CSG|output|blockchain_error|date|ethash":{"btc":"BTC","btg":"BTG","eth":"ETH","zec":"ZEC","rep":"REP","etc":"ETC","steem":"STEEM","ltc":"LTC","doge":"DOGE","bch":"BCH"},"CSG|output|blockchain_error|date|x11":{"dash":"DASH","btc":"BTC","btg":"BTG","start":"START","ltc":"LTC","doge":"DOGE","btcd":"BTCD","ppc":"PPC","nmc":"NMC","cure":"CURE","xmr":"XMR","zec":"ZEC"},"CSG|output|blockchain_error|date|cryptonight":{"xmr":"XMR","xmc":"XMC","etn":"ETN","btc":"BTC","btg":"BTG","ltc":"LTC","dash":"DASH","zec":"ZEC"},"CSG|output|blockchain_error|date|cryptonightv0":{"xmc":"XMC","xmr":"XMR","etn":"ETN","btc":"BTC","btg":"BTG","ltc":"LTC","dash":"DASH","zec":"ZEC"},"CSG|output|blockchain_error|date|scrypt":{"dash":"DASH","zec":"ZEC","ltc":"LTC","doge":"DOGE","btc":"BTC","btg":"BTG"},"CSG|allocation":{"general":"More information about mining allocation","change_allocation":"Change mining allocation"},"CSG|allocation|general":{"how_it_works":"How it works in general","sha256;bitcoin_mining":"Bitcoin Mining","equihash;zcash_mining":"Zcash Mining","ethash;ether_mining":"Ether Mining","x11;dash_mining":"Dash Mining","cryptonight;monero_mining":"Monero Mining","scrypt;litecoin_mining":"Litecoin Mining"},"CSG|allocation|change_allocation":{"how_it_works":"How it works in general","sha256;bitcoin_mining":"Bitcoin Mining","equihash;zcash_mining":"Zcash Mining","ethash;ether_mining":"Ether Mining","x11;dash_mining":"Dash Mining","cryptonight;monero_mining":"Monero Mining","scrypt;litecoin_mining":"Litecoin Mining"},"CSG|affiliate":{"how_it_works":"How it works in general","reward":"Referral rewards","free_hashpower":"Free hashpower","promo_code":"Promo code\/discounts","ranks":"Affiliate ranks","more_info":"More about affiliate program"},"CSG|general":{"how_to_start":"How to start mining","know_more":"I want to know more about","pricing":"Pricing","returns":"Expected returns","maintenance_fee":"Maintenance fee"},"CSG|general|know_more":{"sha256;bitcoin_mining":"Bitcoin Mining","equihash;zcash_mining":"Zcash Mining","ethash;ether_mining":"Ether Mining","x11;dash_mining":"Dash Mining","cryptonight;monero_mining":"Monero Mining","scrypt;litecoin_mining":"Litecoin Mining","partner_sites":"Partner Sites"}}'></div>
            <script type="text/javascript">
            $(document).ready(function() {
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

                for (var i = 0; i < currentSelectboxOrder; i += 1) {
                  console.log(allTopicsVals[i]);
                  if (allTopicsVals[i] !== '') {
                    compileTopics.push(allTopicsVals[i]);
                  }
                }

                return compileTopics.join('|');
              }

              var allTopics = getAllTopics();

              $('#datetimepickerCSC').hide();

              var datePicker = function() {
                if ($('#SupportTopic2').val() == 'missing' || $('#SupportTopic2').val() == 'blockchain_error') {

                  $('#datetimepickerCSC').hide();
                  $('#datetimepickerCSC').prop('required', false);
                  if ($('#datetimepickerCSC').data("date")) {
                    $('#datetimepickerCSC').data("DateTimePicker").clear();
                  }

                  // Hide third dropdown
                  $('#SupportTopic3').parent().parent().hide();
                  // Show datepicker
                  $('#datetimepickerCSC').show();

                  $('#datetimepickerCSC').prop('required', true);
                  $('#datetimepickerCSC').datetimepicker({
                    viewMode: 'days',
                    format: 'DD/MM/YYYY'
                  });

                  $('#datetimepickerCSC').on('dp.change', function(event) {
                    $('#SupportTopic3').selectpicker('val', 'date').change();
                  });

                } else {
                  if ($('#SupportTopic2').val() !== 'first') {
                    return
                  }
                  $('#datetimepickerCSC').hide();
                  $('#datetimepickerCSC').prop('required', false);
                  if ($('#datetimepickerCSC').data("date")) {
                    $('#datetimepickerCSC').data("DateTimePicker").clear();
                  }
                }
              };

              $('.cs-selection').on('change', function(e) {
                var currentElement = $(this);
                var nextElementOrder = parseInt(currentElement.attr('data-order'), 10);
                var nextElement = $("#SupportTopic" + ++nextElementOrder);
                var topicKey = compileTopicKey(currentElement.val(), currentElement.attr('data-order'));

                var nextElementOptionsHtml = '';
                if (typeof allTopics[topicKey] !== 'undefined') {
                  Object.keys(allTopics[topicKey]).forEach(function(key) {
                    nextElementOptionsHtml += "<option value=\"" + key + "\">" + allTopics[topicKey][key] + "</option>";
                  });
                } else {
                  var elementNAHtml = '<option class="bs-title-option" value="">N/A</option>';
                  nextElementOptionsHtml += elementNAHtml;
                  for (var zz = nextElementOrder; zz <= 5; zz += 1) {
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
                if (e.target.id == 'SupportTopic1') {
                  $('#datetimepickerCSC').hide();
                  $('#datetimepickerCSC').prop('required', false);
                  if ($('#datetimepickerCSC').data("date")) {
                    $('#datetimepickerCSC').data("DateTimePicker").clear();
                  }
                }
                if (e.target.id === "SupportTopic2") {
                  datePicker();
                }
              });
            });
            </script>
            <script>
            $(document).ready(function() {
              $('#SupportTopic1').on('change', function() {
                if ($('#SupportTopic1').val() === 'output') {
                  $('#CSCModal').modal('show');
                }
              });
            });
            </script>

            <script type="text/javascript">
            /* MODAL*/
            // Give modal backdrop an extra class to make it customizable
            $(".modal-csc").on('show.bs.modal', function(e) {
              setTimeout(function() {
                $('.modal-backdrop').addClass('backdrop-csc');
              });
            });
            /* END MODAL*/
            </script>



            <script>
            $(document).ready(function() {
              $("#PageDisplayForm").submit(function(e) {
                $("#btn-submit").attr("disabled", true);
                return true;
              });
            });
            </script>




        @endsection
