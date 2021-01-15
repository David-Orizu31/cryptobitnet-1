@extends('layouts.app')
@section('title', 'Welcome to Cryptobit Net')
@section('content')


<div id="gm-home-1">
            <div class="vidvid">
              <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" poster="img/landing/gm-home-sec-1-1920px.jpg">
                <source src="img/video-1.mp4" type="video/mp4">
                <source src="img/video-2.webm" type="video/webm">
                <source src="img/gm-home-sec-1.ogv" type="video/ogg">
              </video>
            </div>
            <div class="container">
                <p class="first-p">
                <span>Join over 10,000+ people with the world’s leading hashpower provider</span>
                       </p>
                  <div itemscope itemtype="http://schema.org/Service">
                  <meta itemprop="provider" content="CryptoBitNet"/>
                        <meta itemprop="url" content='https://www.cryptobitnet.com/'/>
                              <meta itemprop="description" content="CryptoBitNet is the largest and most trusted cloud Bitcoin mining provider in the world. We are dedicated to transparency, efficiency, and maximizing your profits.">
                  <meta itemprop="serviceType" content="Cryptocurrency and Bitcoin Cloud Mining">
                  <meta itemprop="name" content="CryptoBitNet - Bitcoin Mining">
                  <h1 itemprop="produces">Start Bitcoin mining today!</h1>
                  </div>
                  <p><span>It’s super simple - Your mining rigs are already set up and running.<br /> As soon as you’ve set up your account, you can start to mine your first coins using our Bitcoin cloud mining service!</span></p>



                     @guest
                            @if (Route::has('register'))
                            <a href="/register" title="Start Mining Now!"
                     class="btn btn-warning">Start Mining Now!</a>
                     @endif
                     @else

                     <a href="/dashboard/overview" title="Start Mining Now!"
                     class="btn btn-warning">Start Mining Now!</a>

                            @endguest
                  <!-- <a href="#gm-home-3" title="Learn more"
                     class="btn btn-success btn-learn-more">Learn more</a> -->
              </div>
              <style>
                @media (max-width: 480px) {
                   #gm-home-1 h1 {
                     font-size: 33px !important;
                     line-height: 1.2em;
                   }
                   #gm-home-1 p.first-p span {
                     font-size: 18px !important;
                   }
                   #gm-home-1 span {
                     font-size: 14px !important;
                   }
                   #gm-home-1 .btn {
                     font-size: 15px !important;
                   }

                }

                }

              </style>
              <!-- <div class="gm-home-1-dc">
                <svg class="gm-icon gm-icon-location"><use xlink:href="/img/Version3/sprite.svg#gm-icon-location"></use></svg>
                <span>One of our Mining Datacenters</span> Reykjavik, Iceland<a href="javascript:loopVideo();" class="iOSvideo" id="iOSvideo" aria-label="Start video on iOS devices">&nbsp;</a>
              </div>-->
              <!-- <img loading="lazy" src="img/image-rotate.jpg" alt="CryptoBitNet landing image" title="CryptoBitNet landing image" /> -->
            </div>


            <div id="gm-home-3-new">
                <div class="container">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="row"  data-aos="flip-left" data-aos-duration="2000">
                        <div class="col-sm-4">
                          <h3>
                            <span><svg id="gm-icon-mining" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 253.3 168.1"><style>.gm-icon-mining-st0{fill:#e8eef1}.gm-icon-mining-st1{fill:#fff}.gm-icon-mining-st2{fill:#9fd3f2;stroke:#faa934;stroke-width:2;stroke-miterlimit:10}.gm-icon-mining-st3{fill:#8bc9ed}.gm-icon-mining-st4{fill:#fbb147}.gm-icon-mining-st5{fill:#faa934}.gm-icon-mining-st6{fill:#104470}.gm-icon-mining-st7{fill:none;stroke:#8bc9ed;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10}.gm-icon-mining-st8{fill:#094b7c}.gm-icon-mining-st9{fill:none;stroke:#8bc9ed;stroke-width:2;stroke-miterlimit:10}.gm-icon-mining-st10{opacity:.6;fill:#9bbfd0;enable-background:new}.gm-icon-mining-st11{fill:#f2f2f3}.gm-icon-mining-st12{fill:#dbdcde}.gm-icon-mining-st13{fill:#fcba63}</style><ellipse class="gm-icon-mining-st0" cx="128.2" cy="98.9" rx="70.1" ry="67.4"/><path class="gm-icon-mining-st0" d="M78.1 145.1H35c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h43.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5zM85.6 98.9H44.1c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h41.6c4.7 0 8.5 3.8 8.5 8.5v6.1c-.1 4.7-3.9 8.5-8.6 8.5z"/><path class="gm-icon-mining-st1" d="M93.1 122H45c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h48.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5zM69.1 75.8H21c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h48.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5z"/><path class="gm-icon-mining-st0" d="M168.7 52.7h47.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-47.1c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5zM159.7 98.9h43.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-43.1c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5z"/><path class="gm-icon-mining-st1" d="M184.7 75.8h39.6c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-39.6c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5z"/><path class="gm-icon-mining-st0" d="M244.8 122h-15c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h15c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5zM16 75.8h-4C5.5 75.7.2 80.9 0 87.4.2 93.9 5.5 99 12 98.9h4c6.5.1 11.9-5.1 12-11.6-.1-6.4-5.5-11.6-12-11.5z"/><path class="gm-icon-mining-st1" d="M150.2 52.7h19c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-19c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5zM116.6 75.8h19c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-19c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5zM158.7 122h40.6c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-40.6c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5z"/><ellipse class="gm-icon-mining-st2" cx="237.9" cy="122.5" rx="2.5" ry="2.4"/><path class="gm-icon-mining-st3" d="M178.3 36l1.2 3.8 3.9 1.2-3.9 1.1-1.2 3.8-1.2-3.8-4-1.1 4-1.2z"/><path class="gm-icon-mining-st4" d="M122.2 158.2l1.2 3.8 4 1.1-4 1.2-1.2 3.8-1.2-3.8-3.9-1.2 3.9-1.1z"/><path class="gm-icon-mining-st5" d="M197.3 87l1.2 3.8 4 1.1-4 1.2-1.2 3.8-1.2-3.8-3.9-1.2 3.9-1.1z"/><path class="gm-icon-mining-st6" d="M189.1 125c-.6 0-1-.4-1-1v-3.8c0-.6.4-1 1-1s1 .4 1 1v3.8c0 .6-.5 1-1 1zM189.1 136.5c-.6 0-1-.4-1-1v-3.9c0-.6.4-1 1-1s1 .4 1 1v3.9c0 .5-.5 1-1 1zM197.1 128.8h-4c-.5.1-1.1-.2-1.2-.7-.1-.5.2-1.1.7-1.2h4.5c.5-.1 1.1.2 1.2.7s-.2 1.1-.7 1.2h-.5zM185.1 128.8h-4c-.5.1-1.1-.2-1.2-.7-.1-.5.2-1.1.7-1.2h4.5c.5-.1 1.1.2 1.2.7s-.2 1.1-.7 1.2h-.5z"/><ellipse class="gm-icon-mining-st6" cx="189.1" cy="127.8" rx="1" ry="1"/><path class="gm-icon-mining-st7" d="M86.9 29.7v3.8M86.9 41.2v3.9M94.9 37.4h-4M82.9 37.4h-4"/><ellipse class="gm-icon-mining-st3" cx="86.9" cy="37.4" rx="1" ry="1"/><path class="gm-icon-mining-st8" d="M164.5 153.1c.7 0 1.2-.5 1.2-1.2s-.5-1.2-1.2-1.2-1.2.5-1.2 1.2.6 1.2 1.2 1.2zM203.1 104.5v-.2c0-.3-.3-.6-.6-.6s-.6.3-.6.6v.2c0 .3.3.6.6.6.4 0 .6-.3.6-.6zM207.5 108.3c-.2-.1-.5 0-.6.2-.1.2-.1.4.1.5.4.5 1.1-.4.5-.7z"/><path class="gm-icon-mining-st5" d="M36.4 117c.9-.1 1.5-.8 1.5-1.7-.1-.8-.7-1.4-1.5-1.5-.9.1-1.5.8-1.5 1.7.1.8.7 1.4 1.5 1.5z"/><path class="gm-icon-mining-st8" d="M63.2 88.2c-.9-.4-1.8-.1-2.2.7-.2.4-.2.9 0 1.4v.1c.4.8 1.4 1 2.2.6.8-.4 1-1.4.6-2.2-.2-.2-.3-.4-.6-.6z"/><path class="gm-icon-mining-st3" d="M65.8 67.5c-.2.7-.6 1.4-1.3 1.8-.7.5-1.7.8-2.6.6-.9-.1-1.7-.6-2.3-1.3-.6-.7-.8-1.6-.7-2.5.1-.9.6-1.7 1.3-2.2.7-.6 1.7-.8 2.6-.7 1.9.2 3.2 1.9 3 3.7.1.4.1.5 0 .6zM61 66.3v.2c0 .4.1.8.3 1.1.2.3.6.5 1 .6.4.1.8-.1 1.1-.3.3-.2.5-.6.6-1 .1-.8-.5-1.5-1.3-1.6-.8-.2-1.5.3-1.7 1z"/><ellipse class="gm-icon-mining-st9" cx="201.2" cy="65.7" rx="2.5" ry="2.4"/><path class="gm-icon-mining-st7" d="M53.9 120.1v3.9M53.9 131.7v3.8M61.9 127.8h-4M49.9 127.8h-4"/><ellipse class="gm-icon-mining-st4" cx="53.9" cy="127.8" rx="1" ry="1"/><path class="gm-icon-mining-st6" d="M53.9 119.2c-.6 0-1 .4-1 1v1.8h2v-1.9c0-.5-.5-.9-1-.9z"/><circle class="gm-icon-mining-st2" cx="5" cy="50.2" r="2.6"/><path class="gm-icon-mining-st3" d="M67.9 145l-1.2-4.1-4.2-1.3 4.2-1.3 1.2-4.1 1.3 4.1 4.2 1.3-4.2 1.3z"/><path class="gm-icon-mining-st4" d="M127 10.9l-1.3-4.2-4.2-1.3 4.2-1.2 1.2-4.2 1.3 4.2 4.2 1.2-4.2 1.3z"/><path class="gm-icon-mining-st5" d="M47.8 89.1l-1.3-4.2-4.1-1.2 4.1-1.3 1.3-4.2 1.3 4.2 4.2 1.3-4.2 1.2z"/><path class="gm-icon-mining-st6" d="M56.5 47.4c.6 0 1 .4 1.1 1v4.3c.1.6-.4 1.1-1 1.2-.6.1-1.1-.4-1.2-1v-4.4c0-.6.4-1 .9-1 .1-.1.2-.1.2-.1zM56.5 34.8c.6 0 1.1.5 1.1 1.1V40c-.1.6-.6 1-1.2 1-.5 0-.9-.4-1-1v-4.2c0-.6.5-1 1.1-1zM48 43.2h4.2c.6.1 1 .6 1 1.2 0 .5-.4.9-1 1H48c-.6.1-1.1-.4-1.2-1-.1-.6.4-1.1 1-1.2h.2zM60.7 43.2h4.2c.6-.1 1.1.4 1.2 1s-.4 1.1-1 1.2h-4.4c-.6-.1-1-.6-1-1.2.1-.6.5-1 1-1z"/><circle class="gm-icon-mining-st6" cx="56.5" cy="44.3" r="1.1"/><path class="gm-icon-mining-st7" d="M168.5 136.6v-4.2M168.5 123.9v-4.2M160.1 128.2h4.2M172.7 128.2h4.2"/><circle class="gm-icon-mining-st3" cx="168.5" cy="128.2" r="1.1"/><path class="gm-icon-mining-st8" d="M82.3 19.1c.7 0 1.2-.5 1.2-1.2s-.5-1.2-1.2-1.2-1.2.5-1.2 1.2.6 1.2 1.2 1.2zM41.7 69.9v.1c0 .3.3.5.6.5s.5-.2.5-.5v-.2c0-.3-.3-.5-.6-.5-.3.1-.5.3-.5.6zM37.1 65.7c.2.1.3.1.4 0h.1c.2-.1.3-.4.2-.6-.1-.2-.4-.3-.6-.2-.2.1-.3.4-.2.6 0 .1 0 .1.1.2z"/><path class="gm-icon-mining-st5" d="M217.5 59.3c.9-.1 1.5-.8 1.5-1.7-.1-.8-.7-1.4-1.5-1.5-.9.1-1.5.8-1.5 1.7.1.8.8 1.5 1.5 1.5z"/><path class="gm-icon-mining-st8" d="M189.3 87.5l.1.1c.8.4 1.7.1 2.1-.6.3-.5.3-1 0-1.5v-.1c-.4-.8-1.4-1-2.2-.6s-1 1.4-.6 2.2c.2.1.4.3.6.5z"/><path class="gm-icon-mining-st3" d="M186.5 110.3c.2-.8.7-1.5 1.3-2 1.6-1.2 3.9-.9 5.2.7.6.8.9 1.8.7 2.7-.3 2-2.1 3.4-4.2 3.2s-3.4-2.1-3.2-4.2c.2-.1.2-.2.2-.4zm5.1 1.3v-.2c.1-.4-.1-.8-.3-1.2-.3-.3-.6-.6-1.1-.6-.4-.1-.8.1-1.2.3-.7.5-.8 1.5-.3 2.2.5.7 1.5.8 2.2.3.4-.1.6-.4.7-.8z"/><circle class="gm-icon-mining-st9" cx="43.7" cy="112.4" r="2.6"/><path class="gm-icon-mining-st7" d="M199.1 52.6v-4.3M199 39.9v-4.2M190.6 44.1h4.2M203.3 44.1h4.2"/><circle class="gm-icon-mining-st4" cx="199.1" cy="44.1" r="1.1"/><path class="gm-icon-mining-st6" d="M199.1 53.6c.6 0 1-.4 1.1-.9v-2.1H198v2c0 .6.5 1 1.1 1z"/><path class="gm-icon-mining-st10" d="M164.2 114.6h3.1c1.1 0 2.1.9 2.1 2.1v5.8c0 1.1-.9 2.1-2.1 2.1h-3.1c-1.1 0-2.1-.9-2.1-2.1v-5.8c0-1.2 1-2.1 2.1-2.1zM164.2 85.8h3.1c1.1 0 2.1.9 2.1 2.1v5.8c0 1.1-.9 2.1-2.1 2.1h-3.1c-1.1 0-2.1-.9-2.1-2.1v-5.8c0-1.2 1-2.1 2.1-2.1z"/><path class="gm-icon-mining-st10" d="M165.1 64.9h6.9c2.5 0 4.5 2 4.5 4.5V82c0 2.5-2 4.5-4.5 4.5h-6.9c-2.5 0-4.5-2-4.5-4.5V69.3c0-2.4 2-4.4 4.5-4.4zM165.1 94.2h6.9c2.5 0 4.5 2 4.5 4.5v12.7c0 2.5-2 4.5-4.5 4.5h-6.9c-2.5 0-4.5-2-4.5-4.5V98.7c0-2.5 2-4.5 4.5-4.5zM165.1 123.6h6.9c2.5 0 4.5 2 4.5 4.5v12.6c0 2.5-2 4.5-4.5 4.5h-6.9c-2.5 0-4.5-2-4.5-4.5V128c0-2.4 2-4.4 4.5-4.4z"/><path class="gm-icon-mining-st1" d="M86.9 95.7H165c1.6 0 2.9 1.3 2.9 2.9v12.9c0 1.6-1.3 2.9-2.9 2.9H86.9c-1.6 0-2.9-1.3-2.9-2.9V98.6c0-1.6 1.3-2.9 2.9-2.9zM87 66.4h78.1c1.6 0 2.9 1.3 2.9 2.9v12.9c0 1.6-1.3 2.9-2.9 2.9H87c-1.6 0-2.9-1.3-2.9-2.9V69.3c0-1.6 1.3-2.9 2.9-2.9z"/><path class="gm-icon-mining-st1" d="M95.1 84.9h62.3c1.6 0 2.9 1.3 2.9 2.9v34.6c0 1.6-1.3 2.9-2.9 2.9H95.1c-1.6 0-2.9-1.3-2.9-2.9V87.8c0-1.6 1.3-2.9 2.9-2.9z"/><path class="gm-icon-mining-st11" d="M154 95.5h10.8c1.6 0 2.9 1.3 2.9 2.9v12.2c0 1.6-1.3 2.9-2.9 2.9H154c-1.6 0-2.9-1.3-2.9-2.9V98.4c0-1.6 1.3-2.9 2.9-2.9zM153.5 65.4h10.8c1.6 0 2.9 1.3 2.9 2.9v14.1c0 1.6-1.3 2.9-2.9 2.9h-10.8c-1.6 0-2.9-1.3-2.9-2.9V68.3c0-1.6 1.3-2.9 2.9-2.9z"/><path class="gm-icon-mining-st1" d="M87 124.7h78.1c1.6 0 2.9 1.3 2.9 2.9v12.9c0 1.6-1.3 2.9-2.9 2.9H87c-1.6 0-2.9-1.3-2.9-2.9v-12.9c0-1.6 1.3-2.9 2.9-2.9z"/><path class="gm-icon-mining-st11" d="M153.8 125.6h10.8c1.6 0 2.9 1.3 2.9 2.9v12c0 1.6-1.3 2.9-2.9 2.9h-10.8c-1.6 0-2.9-1.3-2.9-2.9v-12c0-1.6 1.3-2.9 2.9-2.9z"/><path class="gm-icon-mining-st12" d="M166.4 86.5h-30.9v-3.1h30.9V68h-30.9v-3.1h30.9c1.7 0 3.1 1.4 3.1 3.1v15.4c-.1 1.7-1.4 3.1-3.1 3.1zM116.9 86.5H86.1c-1.7 0-3.1-1.4-3.1-3.1V68c0-1.7 1.4-3.1 3.1-3.1H117V68H86.1v15.4H117l-.1 3.1zM116.9 115.8H86.1c-1.7 0-3.1-1.4-3.1-3.1V97.3c0-1.7 1.4-3.1 3.1-3.1H117v3.1H86.1v15.4H117l-.1 3.1zM166.4 115.8h-30.9v-3.1h30.9V97.3h-30.9v-3.1h30.9c1.7 0 3.1 1.4 3.1 3.1v15.4c-.1 1.8-1.4 3.1-3.1 3.1z"/><path class="gm-icon-mining-st12" d="M116.9 97.3H90.7V83.4h26.2v3.1H93.8v7.7h23.1zM161.7 97.3h-26.2v-3.1h23.1v-7.7h-23.1v-3.1h26.2zM166.4 145.2H86.1c-1.7 0-3.1-1.4-3.1-3.1v-15.4c0-1.7 1.4-3.1 3.1-3.1h80.3c1.7 0 3.1 1.4 3.1 3.1v15.4c0 1.7-1.4 3.1-3.1 3.1zm-80.3-18.5v15.4h80.3v-15.4H86.1z"/><path class="gm-icon-mining-st12" d="M161.7 126.7h-71v-13.9h26.2v3H93.8v7.8h64.8v-7.8h-23.1v-3h26.2z"/><path class="gm-icon-mining-st13" d="M92.2 74.2h3.1v3.1h-3.1zM101.5 74.2h3.1v3.1h-3.1zM110.8 74.2h3.1v3.1h-3.1zM92.2 103.5h3.1v3.1h-3.1zM101.5 103.5h3.1v3.1h-3.1zM110.8 103.5h3.1v3.1h-3.1zM92.2 132.8h3.1v3.1h-3.1zM101.5 132.8h3.1v3.1h-3.1zM110.8 132.8h3.1v3.1h-3.1z"/><path d="M87.2 51.2c.7 1 1.5 2 2.4 2.8 0 .7 14.9-9.8 30.4-4.5 3.8 0-.4 4.7 3.4 4.7-.1 3.6-.4 10.5-.4 13.8s-.3 14.3-.4 17.6c-.1 3.9-.2 7.8-.3 11.8-.2 6.8-.3 13.6-.5 20.3v1c0 .9.7 1.6 1.5 1.6h6.4c.9 0 1.5-.7 1.5-1.6v-.9l-.3-20.3c0-3.9-.1-7.7-.2-11.6 0-3.2-.2-14.6-.2-17.8V54.3c1.1 0 .5-.1 1.5-.1 1-1.7-.1-3.6 1.8-4.5 3.3-1.5 9.5-1.1 15.3-.3.5-.2 16.9 4.5 16.9 4.1-20.8-15.1-35.8-11.7-35.8-11.7v-3c0-.5-.3-.8-.8-.8h-5c-.5 0-.8.4-.8.8v3c-10.5-2.5-36.4 9.4-36.4 9.4z" fill="#f1f1f1" stroke="#0f4470" stroke-width="3" stroke-miterlimit="10"/></svg></span>
                            Your hardware is already running            </h3>
                          <p>Don’t wrestle with rig assembly and hot, noisy miners at home. We have the fastest bitcoin mining hardware running for you already!</p>
                          <div class="clearfix"></div>
                          <a href="datacenters.html" class="btn btn-enigma-a" title="Our Datacenters">Our Datacenters</a>
                        </div>
                        <div class="col-sm-4">
                          <h3>
                            <span><svg id="gm-icon-cryptoc" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 253.3 163.1"><style>.gm-icon-cryptoc-st0{fill:#e8eef1}.gm-icon-cryptoc-st1{fill:#fff}.gm-icon-cryptoc-st2{fill:#9fd3f2;stroke:#faa934;stroke-width:2;stroke-miterlimit:10}.gm-icon-cryptoc-st3{fill:#8bc9ed}.gm-icon-cryptoc-st4{fill:#fbb147}.gm-icon-cryptoc-st5{fill:#faa934}.gm-icon-cryptoc-st6{fill:#104470}.gm-icon-cryptoc-st7{fill:none;stroke:#8bc9ed;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10}.gm-icon-cryptoc-st8{fill:#094b7c}.gm-icon-cryptoc-st9{fill:none;stroke:#8bc9ed;stroke-width:2;stroke-miterlimit:10}.gm-icon-cryptoc-st10{opacity:.6;fill:#9bbfd0;enable-background:new}.gm-icon-cryptoc-st12{fill:#0f4470}.gm-icon-cryptoc-st13{fill:#fcba63}</style><ellipse class="gm-icon-cryptoc-st0" cx="128.2" cy="93.9" rx="70.1" ry="67.4"/><path class="gm-icon-cryptoc-st0" d="M78.1 120.1H35c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h43.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5zM85.6 93.9H44.1c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h41.6c4.7 0 8.5 3.8 8.5 8.5v6.1c-.1 4.7-3.9 8.5-8.6 8.5z"/><path class="gm-icon-cryptoc-st1" d="M93.1 137.7H45c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h48.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5zM69.1 70.8H21c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h48.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5z"/><path class="gm-icon-cryptoc-st0" d="M168.7 47.7h47.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-47.1c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5zM159.7 93.9h43.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-43.1c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5z"/><path class="gm-icon-cryptoc-st1" d="M184.7 70.8h39.6c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-39.6c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5z"/><path class="gm-icon-cryptoc-st0" d="M244.8 117h-15c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h15c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5zM16 70.8h-4C5.5 70.7.2 75.9 0 82.4.2 88.9 5.5 94 12 93.9h4c6.5.1 11.9-5.1 12-11.6-.1-6.4-5.5-11.6-12-11.5z"/><path class="gm-icon-cryptoc-st1" d="M150.2 44.7h19c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-19c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5zM126.6 68.8h19c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-19c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5zM158.7 117h40.6c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-40.6c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5z"/><ellipse class="gm-icon-cryptoc-st2" cx="237.9" cy="117.5" rx="2.5" ry="2.4"/><path class="gm-icon-cryptoc-st3" d="M178.3 31l1.2 3.8 3.9 1.2-3.9 1.1-1.2 3.8-1.2-3.8-4-1.1 4-1.2z"/><path class="gm-icon-cryptoc-st4" d="M122.2 153.2l1.2 3.8 4 1.1-4 1.2-1.2 3.8-1.2-3.8-3.9-1.2 3.9-1.1z"/><path class="gm-icon-cryptoc-st5" d="M197.3 82l1.2 3.8 4 1.1-4 1.2-1.2 3.8-1.2-3.8-3.9-1.2 3.9-1.1z"/><path class="gm-icon-cryptoc-st6" d="M189.1 120c-.6 0-1-.4-1-1v-3.8c0-.6.4-1 1-1s1 .4 1 1v3.8c0 .6-.5 1-1 1zM189.1 131.5c-.6 0-1-.4-1-1v-3.8c0-.6.4-1 1-1s1 .4 1 1v3.8c0 .5-.5 1-1 1zM197.1 123.8h-4c-.5.1-1.1-.2-1.2-.7-.1-.5.2-1.1.7-1.2h4.5c.5-.1 1.1.2 1.2.7.1.5-.2 1.1-.7 1.2h-.5zM185.1 123.8h-4c-.5.1-1.1-.2-1.2-.7-.1-.5.2-1.1.7-1.2h4.5c.5-.1 1.1.2 1.2.7.1.5-.2 1.1-.7 1.2h-.5z"/><ellipse class="gm-icon-cryptoc-st6" cx="189.1" cy="122.8" rx="1" ry="1"/><path class="gm-icon-cryptoc-st7" d="M86.9 24.7v3.8M86.9 36.2v3.9M94.9 32.4h-4M82.9 32.4h-4"/><ellipse class="gm-icon-cryptoc-st3" cx="86.9" cy="32.4" rx="1" ry="1"/><path class="gm-icon-cryptoc-st8" d="M164.5 148.1c.7 0 1.2-.5 1.2-1.2s-.5-1.2-1.2-1.2-1.2.5-1.2 1.2.6 1.2 1.2 1.2zM203.1 99.5v-.2c0-.3-.3-.6-.6-.6s-.6.3-.6.6v.2c0 .3.3.6.6.6.4 0 .6-.3.6-.6zM207.5 103.3c-.2-.1-.5 0-.6.2-.1.2-.1.4.1.5.4.5 1.1-.4.5-.7z"/><path class="gm-icon-cryptoc-st5" d="M36.4 112c.9-.1 1.5-.8 1.5-1.7-.1-.8-.7-1.4-1.5-1.5-.9.1-1.5.8-1.5 1.7.1.8.7 1.4 1.5 1.5z"/><path class="gm-icon-cryptoc-st8" d="M63.2 83.2c-.9-.4-1.8-.1-2.2.7-.2.4-.2.9 0 1.4v.1c.4.8 1.4 1 2.2.6.8-.4 1-1.4.6-2.2-.2-.2-.3-.4-.6-.6z"/><path class="gm-icon-cryptoc-st3" d="M65.8 62.5c-.2.7-.6 1.4-1.3 1.8-.7.5-1.7.8-2.6.6-.9-.1-1.7-.6-2.3-1.3-.6-.7-.8-1.6-.7-2.5.1-.9.6-1.7 1.3-2.2.7-.6 1.7-.8 2.6-.7 1.9.2 3.2 1.9 3 3.7.1.4.1.5 0 .6zM61 61.3v.2c0 .4.1.8.3 1.1.2.3.6.5 1 .5.4.1.8-.1 1.1-.3.3-.2.5-.6.6-1 .1-.8-.5-1.5-1.3-1.6-.8-.1-1.5.4-1.7 1.1z"/><ellipse class="gm-icon-cryptoc-st9" cx="201.2" cy="60.7" rx="2.5" ry="2.4"/><path class="gm-icon-cryptoc-st7" d="M53.9 115.1v3.9M53.9 126.7v3.8M61.9 122.8h-4M49.9 122.8h-4"/><ellipse class="gm-icon-cryptoc-st4" cx="53.9" cy="122.8" rx="1" ry="1"/><path class="gm-icon-cryptoc-st6" d="M53.9 114.2c-.6 0-1 .4-1 1v1.8h2v-1.9c0-.5-.5-.9-1-.9z"/><circle class="gm-icon-cryptoc-st2" cx="6" cy="50.2" r="2.6"/><path class="gm-icon-cryptoc-st3" d="M68.9 145l-1.2-4.1-4.2-1.3 4.2-1.3 1.2-4.1 1.3 4.1 4.2 1.3-4.2 1.3z"/><path class="gm-icon-cryptoc-st4" d="M128 10.9l-1.3-4.2-4.2-1.3 4.2-1.2 1.2-4.2 1.3 4.2 4.2 1.2-4.2 1.3z"/><path class="gm-icon-cryptoc-st5" d="M48.8 89.1l-1.3-4.2-4.1-1.2 4.1-1.3 1.3-4.2 1.3 4.2 4.2 1.3-4.2 1.2z"/><path class="gm-icon-cryptoc-st6" d="M57.5 47.4c.6 0 1 .4 1.1 1v4.3c.1.6-.4 1.1-1 1.2-.6.1-1.1-.4-1.2-1v-4.4c0-.6.4-1 .9-1 .1-.1.2-.1.2-.1zM57.5 34.8c.6 0 1.1.5 1.1 1.1V40c-.1.6-.6 1-1.2 1-.5 0-.9-.4-1-1v-4.2c0-.6.5-1 1.1-1zM49 43.2h4.2c.6.1 1 .6 1 1.2 0 .5-.4.9-1 1H49c-.6.1-1.1-.4-1.2-1-.1-.6.4-1.1 1-1.2h.2zM61.7 43.2h4.2c.6-.1 1.1.4 1.2 1s-.4 1.1-1 1.2h-4.4c-.6-.1-1-.6-1-1.2.1-.6.5-1 1-1z"/><circle class="gm-icon-cryptoc-st6" cx="57.5" cy="44.3" r="1.1"/><path class="gm-icon-cryptoc-st7" d="M169.5 136.6v-4.2M169.5 123.9v-4.2M161.1 128.2h4.2M173.7 128.2h4.2"/><circle class="gm-icon-cryptoc-st3" cx="169.5" cy="128.2" r="1.1"/><path class="gm-icon-cryptoc-st8" d="M83.3 19.1c.7 0 1.2-.5 1.2-1.2s-.5-1.2-1.2-1.2-1.2.5-1.2 1.2.6 1.2 1.2 1.2zM42.7 69.9v.1c0 .3.3.5.6.5s.5-.2.5-.5v-.2c0-.3-.3-.5-.6-.5-.3.1-.5.3-.5.6zM38.1 65.7c.2.1.3.1.4 0h.1c.2-.1.3-.4.2-.6-.1-.2-.4-.3-.6-.2-.2.1-.3.4-.2.6 0 .1 0 .1.1.2z"/><path class="gm-icon-cryptoc-st5" d="M218.5 59.3c.9-.1 1.5-.8 1.5-1.7-.1-.8-.7-1.4-1.5-1.5-.9.1-1.5.8-1.5 1.7.1.8.8 1.5 1.5 1.5z"/><path class="gm-icon-cryptoc-st8" d="M190.3 87.5l.1.1c.8.4 1.7.1 2.1-.6.3-.5.3-1 0-1.5v-.1c-.4-.8-1.4-1-2.2-.6s-1 1.4-.6 2.2c.2.1.4.3.6.5z"/><path class="gm-icon-cryptoc-st3" d="M187.5 110.3c.2-.8.7-1.5 1.3-2 1.6-1.2 3.9-.9 5.2.7.6.8.9 1.8.7 2.7-.3 2-2.1 3.4-4.2 3.2s-3.4-2.1-3.2-4.2c.2-.1.2-.2.2-.4zm5.1 1.3v-.2c.1-.4-.1-.8-.3-1.2-.3-.3-.6-.6-1.1-.6-.4-.1-.8.1-1.2.3-.7.5-.8 1.5-.3 2.2.5.7 1.5.8 2.2.3.4-.1.6-.4.7-.8z"/><circle class="gm-icon-cryptoc-st9" cx="44.7" cy="112.4" r="2.6"/><path class="gm-icon-cryptoc-st7" d="M200.1 52.6v-4.3M200 39.9v-4.2M191.6 44.1h4.2M204.3 44.1h4.2"/><circle class="gm-icon-cryptoc-st4" cx="200.1" cy="44.1" r="1.1"/><path class="gm-icon-cryptoc-st6" d="M200.1 53.6c.6 0 1-.4 1.1-.9v-2.1H199v2c0 .6.5 1 1.1 1z"/><ellipse class="gm-icon-cryptoc-st10" cx="121.2" cy="135.4" rx="17.6" ry="5.6"/><ellipse class="gm-icon-cryptoc-st10" cx="159.7" cy="132.9" rx="23.5" ry="9.6"/><path class="gm-icon-cryptoc-st1" d="M148.4 85h14.8c6.1 0 11 4.9 11.1 11v31.3c0 3.7-3 6.7-6.7 6.7H144c-3.7 0-6.7-3-6.7-6.7V96.2c-.1-6.2 4.9-11.2 11.1-11.2z"/><path class="gm-icon-cryptoc-st1" d="M114.5 101.8h10.7c7.2 0 13.1 5.9 13.1 13.1v11.4c0 4.8-3.9 8.8-8.8 8.8h-19.6c-4.8 0-8.8-3.9-8.8-8.8v-11.2c.1-7.3 6-13.3 13.4-13.3z"/><path d="M159.7 85.5h8.3c3.3 0 6 2.7 6 6V133c0 .9-.7 1.6-1.6 1.6h-17.2c-.9 0-1.6-.7-1.6-1.6V91.7c-.1-3.4 2.7-6.2 6.1-6.2z" fill="#f2f2f3"/><path class="gm-icon-cryptoc-st12" d="M82.7 129.7c-9.9 0-19.8-2.7-19.8-7.9s10-8 19.8-8 19.8 2.7 19.8 8-9.9 7.9-19.8 7.9zm0-12.5c-10.2 0-16.4 3-16.4 4.6s6.2 4.6 16.4 4.6 16.4-3 16.4-4.6-6.2-4.6-16.4-4.6z"/><path class="gm-icon-cryptoc-st12" d="M82.7 137.5c-9.9 0-19.8-2.7-19.8-7.9v-7.8c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7v7.8c0 1.6 6.2 4.6 16.4 4.6s16.4-3 16.4-4.6v-7.8c.1-.9.9-1.6 1.8-1.6.8.1 1.5.7 1.6 1.6v7.8c.1 5.2-9.9 7.9-19.8 7.9z"/><path class="gm-icon-cryptoc-st12" d="M119.1 129.6c-9.8 0-19.8-2.7-19.8-8 .1-.9.9-1.6 1.8-1.6.8.1 1.5.7 1.6 1.6 0 1.6 6.2 4.6 16.4 4.6s16.4-3 16.4-4.6c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7 0 5.3-10 8-19.8 8z"/><path class="gm-icon-cryptoc-st12" d="M119.1 137.5c-9.8 0-19.8-2.7-19.8-8v-7.8c.1-.9.9-1.6 1.8-1.6.8.1 1.5.7 1.6 1.6v7.8c0 1.6 6.2 4.6 16.4 4.6s16.4-3 16.4-4.6v-7.8c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7v7.8c0 5.2-10 8-19.8 8z"/><path class="gm-icon-cryptoc-st12" d="M119.1 122c-9.8 0-19.8-2.7-19.8-8 .1-.9.9-1.6 1.8-1.6.8.1 1.5.7 1.6 1.6 0 1.6 6.2 4.6 16.4 4.5s16.4-3 16.4-4.6c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7 0 5.3-10 8.1-19.8 8.1z"/><path class="gm-icon-cryptoc-st12" d="M119.1 129.9c-9.8 0-19.8-2.7-19.8-7.9v-7.8c.1-.9.9-1.6 1.8-1.6.8.1 1.5.7 1.6 1.6v7.8c0 1.6 6.2 4.6 16.4 4.5s16.4-3 16.4-4.6V114c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7v7.8c0 5.3-10 8-19.8 8.1z"/><path class="gm-icon-cryptoc-st12" d="M119.1 114.4c-9.8 0-19.8-2.7-19.8-8s10-8 19.8-8 19.8 2.7 19.8 7.9-10 8-19.8 8.1zm0-12.6c-10.2 0-16.4 3-16.4 4.6s6.2 4.6 16.4 4.6 16.4-3 16.4-4.6-6.3-4.6-16.4-4.6z"/><path class="gm-icon-cryptoc-st12" d="M119.1 122.2c-9.8 0-19.8-2.7-19.8-7.9v-7.8c.1-.9.9-1.6 1.8-1.6.8.1 1.5.7 1.6 1.6v7.8c0 1.6 6.2 4.6 16.4 4.6s16.4-3 16.4-4.6v-7.8c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7v7.8c0 5.1-10 7.9-19.8 7.9zM155.4 129.6c-9.9 0-19.8-2.7-19.8-7.9 0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7 0 1.6 6.2 4.6 16.4 4.6s16.4-3 16.4-4.6c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7 0 5.1-9.9 7.9-19.8 7.9z"/><path class="gm-icon-cryptoc-st12" d="M155.4 137.4c-9.9 0-19.8-2.7-19.8-7.9v-7.8c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7v7.8c0 1.6 6.2 4.6 16.4 4.6s16.4-3 16.4-4.6v-7.8c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7v7.8c.1 5.2-9.9 7.9-19.8 7.9z"/><path class="gm-icon-cryptoc-st12" d="M155.4 122c-9.9 0-19.8-2.7-19.8-7.9 0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7 0 1.6 6.2 4.6 16.4 4.5s16.4-3 16.4-4.6c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7 0 5.2-9.9 8-19.8 8z"/><path class="gm-icon-cryptoc-st12" d="M155.4 129.8c-9.9 0-19.8-2.7-19.8-8V114c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7v7.8c0 1.6 6.2 4.6 16.4 4.5s16.4-3 16.4-4.6V114c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7v7.8c0 5.2-9.9 8-19.8 8z"/><path class="gm-icon-cryptoc-st12" d="M155.4 114.3c-9.9 0-19.8-2.7-19.8-7.9 0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7 0 1.6 6.2 4.6 16.4 4.6s16.4-3 16.4-4.6c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7 0 5.2-10 7.9-19.8 7.9z"/><path class="gm-icon-cryptoc-st12" d="M155.4 122.2c-9.9 0-19.8-2.7-19.8-8v-7.8c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7v7.8c0 1.6 6.2 4.6 16.4 4.6s16.4-3 16.4-4.6v-7.8c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7v7.8c0 5.2-9.9 7.9-19.8 8z"/><path class="gm-icon-cryptoc-st12" d="M155.4 106.6c-9.9 0-19.8-2.7-19.8-8 0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7 0 1.6 6.2 4.6 16.4 4.5s16.4-3 16.4-4.6c.1-.9.9-1.6 1.8-1.6.8.1 1.5.7 1.6 1.6 0 5.3-10 8-19.8 8.1z"/><path class="gm-icon-cryptoc-st12" d="M155.4 114.4c-9.9 0-19.8-2.7-19.8-8v-7.8c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7v7.8c0 1.6 6.2 4.6 16.4 4.6s16.4-3 16.4-4.6v-7.8c.1-.9.9-1.6 1.8-1.6.8.1 1.5.7 1.6 1.6v7.8c0 5.2-10 8-19.8 8z"/><path class="gm-icon-cryptoc-st12" d="M155.4 98.9c-9.9 0-19.8-2.7-19.8-7.9 0-3.5 4.7-6.3 12.5-7.5 2.4-.3 4.9-.5 7.3-.5.9 0 1.7.8 1.7 1.7 0 .9-.8 1.7-1.7 1.7-2.3 0-4.6.2-6.8.5-6.8 1-9.6 3.2-9.6 4.1 0 1.6 6.2 4.6 16.4 4.6s16.4-3 16.4-4.6c0-.9-2.8-3.1-9.6-4.1-.9-.1-1.6-1-1.4-1.9.1-.9 1-1.6 1.9-1.4 7.9 1.1 12.5 3.9 12.5 7.4 0 5.2-10 7.9-19.8 7.9z"/><path class="gm-icon-cryptoc-st12" d="M155.4 106.8c-9.9 0-19.8-2.7-19.8-7.9V91c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7v7.8c0 1.6 6.2 4.6 16.4 4.6s16.4-3 16.4-4.6V91c-.1-.9.6-1.8 1.6-1.8.9-.1 1.8.6 1.8 1.6v8.1c0 5.1-10 7.8-19.8 7.9z"/><path class="gm-icon-cryptoc-st13" d="M158.4 89.8c-.9 0-1.7-.8-1.7-1.7l-.1-33.8c0-.9.8-1.7 1.7-1.7.9 0 1.7.8 1.7 1.7l.1 33.8c0 .9-.7 1.7-1.7 1.7zM146.4 78.8h-.1c-6.9-.2-13.7-12.9-14.4-14.4-.3-.5-.3-1.1 0-1.6s.8-.8 1.4-.8c1.6-.1 16.1-.6 19.7 5.3.9 1.4 1.5 3.9-.5 7.4-2 3.4-4.4 4.1-6.1 4.1zm-10.2-13.5c2.7 4.6 7 10 10.1 10.1.4 0 1.7 0 3.1-2.5 1.4-2.5.8-3.6.5-3.9-1.5-2.6-8.3-3.6-13.7-3.7z"/><path class="gm-icon-cryptoc-st13" d="M158.4 79.8c-.3 0-.6-.1-.9-.2l-13-7.5c-.8-.5-1.1-1.5-.6-2.3.5-.8 1.5-1.1 2.3-.7l13 7.5c.8.5 1.1 1.5.6 2.3-.2.5-.8.8-1.4.9zM170.4 78.8c-1.7 0-4.1-.7-6-4.2-2-3.5-1.4-5.9-.5-7.4 3.6-5.9 18-5.4 19.7-5.4.6 0 1.1.3 1.4.8.3.5.3 1.1.1 1.6-.8 1.5-7.5 14.2-14.4 14.4l-.3.2zm-3.1-5.9c1.4 2.5 2.7 2.5 3.1 2.4 3.1-.1 7.4-5.5 10.1-10.1-5.4.1-12.2 1.1-13.8 3.8-.2.4-.8 1.5.6 3.9z"/><path class="gm-icon-cryptoc-st13" d="M158.4 79.8c-.9 0-1.7-.8-1.7-1.7 0-.6.3-1.2.8-1.5l13-7.5c.8-.4 1.9-.1 2.3.7.4.8.1 1.7-.6 2.2l-13 7.5c-.2.2-.5.3-.8.3zM158.1 62.8c-4 0-5.9-1.7-6.7-3.2-3.4-6.2 4.5-18.8 5.4-20.3.3-.5.9-.8 1.4-.8.6 0 1.1.3 1.4.8.9 1.4 8.8 13.7 5.5 20-.8 1.5-2.7 3.4-6.8 3.5h-.2zm.3-3.5V61v-1.7c3-.1 3.7-1.3 3.9-1.7 1.5-2.9-1.2-9.5-3.9-14.2-2.7 4.8-5.4 11.6-3.9 14.4.1.4.8 1.6 3.9 1.5z"/></svg></span>
                            Mine alternative<br /> cryptocurrencies            </h3>
                          <p>You can mine any cryptocurrency available in our catalogue! Switch your mining power on the fly for all the coins using our bitcoin mining website.</p>
                          <div class="clearfix"></div>
                          <a href="/customer-service" class="btn btn-enigma-a" title="Customer Service Center">Customer Service</a>
                        </div>
                        <div class="col-sm-4">
                          <h3>
                            <span><svg id="gm-icon-output" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 253.3 163.1"><style>.gm-icon-output-st0{fill:#e8eef1}.gm-icon-output-st1{fill:#fff}.gm-icon-output-st2{fill:#9fd3f2;stroke:#faa934;stroke-width:2;stroke-miterlimit:10}.gm-icon-output-st3{fill:#8bc9ed}.gm-icon-output-st4{fill:#fbb147}.gm-icon-output-st5{fill:#faa934}.gm-icon-output-st6{fill:#104470}.gm-icon-output-st7{fill:none;stroke:#8bc9ed;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10}.gm-icon-output-st8{fill:#094b7c}.gm-icon-output-st9{fill:none;stroke:#8bc9ed;stroke-width:2;stroke-miterlimit:10}.gm-icon-output-st10{opacity:.6;fill:#9bbfd0;enable-background:new}.gm-icon-output-st13{fill:#0f4470}</style><ellipse class="gm-icon-output-st0" cx="128.2" cy="93.9" rx="70.1" ry="67.4"/><path class="gm-icon-output-st0" d="M78.1 140.1H35c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h43.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5zM85.6 93.9H44.1c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h41.6c4.7 0 8.5 3.8 8.5 8.5v6.1c-.1 4.7-3.9 8.5-8.6 8.5z"/><path class="gm-icon-output-st1" d="M93.1 117H45c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h48.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5zM69.1 70.8H21c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h48.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5z"/><path class="gm-icon-output-st0" d="M168.7 47.7h47.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-47.1c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5zM159.7 93.9h43.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-43.1c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5z"/><path class="gm-icon-output-st1" d="M184.7 70.8h39.6c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-39.6c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5z"/><path class="gm-icon-output-st0" d="M244.8 117h-15c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h15c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5zM16 70.8h-4C5.5 70.7.2 75.9 0 82.4.2 88.9 5.5 94 12 93.9h4c6.5.1 11.9-5.1 12-11.6-.1-6.4-5.5-11.6-12-11.5z"/><path class="gm-icon-output-st1" d="M150.2 47.7h19c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-19c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5zM116.6 70.8h19c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-19c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5zM158.7 117h40.6c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-40.6c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5z"/><ellipse class="gm-icon-output-st2" cx="237.9" cy="117.5" rx="2.5" ry="2.4"/><path class="gm-icon-output-st3" d="M178.3 31l1.2 3.8 3.9 1.2-3.9 1.1-1.2 3.8-1.2-3.8-4-1.1 4-1.2z"/><path class="gm-icon-output-st4" d="M122.2 153.2l1.2 3.8 4 1.1-4 1.2-1.2 3.8-1.2-3.8-3.9-1.2 3.9-1.1z"/><path class="gm-icon-output-st5" d="M197.3 82l1.2 3.8 4 1.1-4 1.2-1.2 3.8-1.2-3.8-3.9-1.2 3.9-1.1z"/><path class="gm-icon-output-st6" d="M189.1 120c-.6 0-1-.4-1-1v-3.8c0-.6.4-1 1-1s1 .4 1 1v3.8c0 .6-.5 1-1 1zM189.1 131.5c-.6 0-1-.4-1-1v-3.8c0-.6.4-1 1-1s1 .4 1 1v3.8c0 .5-.5 1-1 1zM197.1 123.8h-4c-.5.1-1.1-.2-1.2-.7-.1-.5.2-1.1.7-1.2h4.5c.5-.1 1.1.2 1.2.7.1.5-.2 1.1-.7 1.2h-.5zM185.1 123.8h-4c-.5.1-1.1-.2-1.2-.7-.1-.5.2-1.1.7-1.2h4.5c.5-.1 1.1.2 1.2.7.1.5-.2 1.1-.7 1.2h-.5z"/><ellipse class="gm-icon-output-st6" cx="189.1" cy="122.8" rx="1" ry="1"/><path class="gm-icon-output-st7" d="M86.9 24.7v3.8M86.9 36.2v3.9M94.9 32.4h-4M82.9 32.4h-4"/><ellipse class="gm-icon-output-st3" cx="86.9" cy="32.4" rx="1" ry="1"/><path class="gm-icon-output-st8" d="M164.5 148.1c.7 0 1.2-.5 1.2-1.2s-.5-1.2-1.2-1.2-1.2.5-1.2 1.2.6 1.2 1.2 1.2zM203.1 99.5v-.2c0-.3-.3-.6-.6-.6s-.6.3-.6.6v.2c0 .3.3.6.6.6.4 0 .6-.3.6-.6zM207.5 103.3c-.2-.1-.5 0-.6.2-.1.2-.1.4.1.5.4.5 1.1-.4.5-.7z"/><path class="gm-icon-output-st5" d="M36.4 112c.9-.1 1.5-.8 1.5-1.7-.1-.8-.7-1.4-1.5-1.5-.9.1-1.5.8-1.5 1.7.1.8.7 1.4 1.5 1.5z"/><path class="gm-icon-output-st8" d="M63.2 83.2c-.9-.4-1.8-.1-2.2.7-.2.4-.2.9 0 1.4v.1c.4.8 1.4 1 2.2.6.8-.4 1-1.4.6-2.2-.2-.2-.3-.4-.6-.6z"/><path class="gm-icon-output-st3" d="M65.8 62.5c-.2.7-.6 1.4-1.3 1.8-.7.5-1.7.8-2.6.6-.9-.1-1.7-.6-2.3-1.3-.6-.7-.8-1.6-.7-2.5.1-.9.6-1.7 1.3-2.2.7-.6 1.7-.8 2.6-.7 1.9.2 3.2 1.9 3 3.7.1.4.1.5 0 .6zM61 61.3v.2c0 .4.1.8.3 1.1.2.3.6.5 1 .5.4.1.8-.1 1.1-.3.3-.2.5-.6.6-1 .1-.8-.5-1.5-1.3-1.6-.8-.1-1.5.4-1.7 1.1z"/><ellipse class="gm-icon-output-st9" cx="201.2" cy="60.7" rx="2.5" ry="2.4"/><path class="gm-icon-output-st7" d="M53.9 115.1v3.9M53.9 126.7v3.8M61.9 122.8h-4M49.9 122.8h-4"/><ellipse class="gm-icon-output-st4" cx="53.9" cy="122.8" rx="1" ry="1"/><path class="gm-icon-output-st6" d="M53.9 114.2c-.6 0-1 .4-1 1v1.8h2v-1.9c0-.5-.5-.9-1-.9z"/><circle class="gm-icon-output-st2" cx="6" cy="50.2" r="2.6"/><path class="gm-icon-output-st3" d="M68.9 145l-1.2-4.1-4.2-1.3 4.2-1.3 1.2-4.1 1.3 4.1 4.2 1.3-4.2 1.3z"/><path class="gm-icon-output-st4" d="M128 10.9l-1.3-4.2-4.2-1.3 4.2-1.2 1.2-4.2 1.3 4.2 4.2 1.2-4.2 1.3z"/><path class="gm-icon-output-st5" d="M48.8 89.1l-1.3-4.2-4.1-1.2 4.1-1.3 1.3-4.2 1.3 4.2 4.2 1.3-4.2 1.2z"/><path class="gm-icon-output-st6" d="M57.5 47.4c.6 0 1 .4 1.1 1v4.3c.1.6-.4 1.1-1 1.2-.6.1-1.1-.4-1.2-1v-4.4c0-.6.4-1 .9-1 .1-.1.2-.1.2-.1zM57.5 34.8c.6 0 1.1.5 1.1 1.1V40c-.1.6-.6 1-1.2 1-.5 0-.9-.4-1-1v-4.2c0-.6.5-1 1.1-1zM49 43.2h4.2c.6.1 1 .6 1 1.2 0 .5-.4.9-1 1H49c-.6.1-1.1-.4-1.2-1-.1-.6.4-1.1 1-1.2h.2zM61.7 43.2h4.2c.6-.1 1.1.4 1.2 1s-.4 1.1-1 1.2h-4.4c-.6-.1-1-.6-1-1.2.1-.6.5-1 1-1z"/><circle class="gm-icon-output-st6" cx="57.5" cy="44.3" r="1.1"/><path class="gm-icon-output-st7" d="M169.5 136.6v-4.2M169.5 123.9v-4.2M161.1 128.2h4.2M173.7 128.2h4.2"/><circle class="gm-icon-output-st3" cx="169.5" cy="128.2" r="1.1"/><path class="gm-icon-output-st8" d="M83.3 19.1c.7 0 1.2-.5 1.2-1.2s-.5-1.2-1.2-1.2-1.2.5-1.2 1.2.6 1.2 1.2 1.2zM42.7 69.9v.1c0 .3.3.5.6.5s.5-.2.5-.5v-.2c0-.3-.3-.5-.6-.5-.3.1-.5.3-.5.6zM38.1 65.7c.2.1.3.1.4 0h.1c.2-.1.3-.4.2-.6-.1-.2-.4-.3-.6-.2-.2.1-.3.4-.2.6 0 .1 0 .1.1.2z"/><path class="gm-icon-output-st5" d="M218.5 59.3c.9-.1 1.5-.8 1.5-1.7-.1-.8-.7-1.4-1.5-1.5-.9.1-1.5.8-1.5 1.7.1.8.8 1.5 1.5 1.5z"/><path class="gm-icon-output-st8" d="M190.3 87.5l.1.1c.8.4 1.7.1 2.1-.6.3-.5.3-1 0-1.5v-.1c-.4-.8-1.4-1-2.2-.6s-1 1.4-.6 2.2c.2.1.4.3.6.5z"/><path class="gm-icon-output-st3" d="M187.5 110.3c.2-.8.7-1.5 1.3-2 1.6-1.2 3.9-.9 5.2.7.6.8.9 1.8.7 2.7-.3 2-2.1 3.4-4.2 3.2s-3.4-2.1-3.2-4.2c.2-.1.2-.2.2-.4zm5.1 1.3v-.2c.1-.4-.1-.8-.3-1.2-.3-.3-.6-.6-1.1-.6-.4-.1-.8.1-1.2.3-.7.5-.8 1.5-.3 2.2.5.7 1.5.8 2.2.3.4-.1.6-.4.7-.8z"/><circle class="gm-icon-output-st9" cx="44.7" cy="112.4" r="2.6"/><path class="gm-icon-output-st7" d="M200.1 52.6v-4.3M200 39.9v-4.2M191.6 44.1h4.2M204.3 44.1h4.2"/><circle class="gm-icon-output-st4" cx="200.1" cy="44.1" r="1.1"/><path class="gm-icon-output-st6" d="M200.1 53.6c.6 0 1-.4 1.1-.9v-2.1H199v2c0 .6.5 1 1.1 1z"/><path class="gm-icon-output-st10" d="M120.9 56h40.8c3.4 0 6.2 2.8 6.2 6.2v6.6c0 3.4-2.8 6.2-6.2 6.2h-40.8c-3.4 0-6.2-2.8-6.2-6.2v-6.6c0-3.4 2.8-6.2 6.2-6.2z"/><path class="gm-icon-output-st10" d="M127.9 73.9h40.8c3.4 0 6.2 2.8 6.2 6.2v40.8c0 3.4-2.8 6.2-6.2 6.2h-40.8c-3.4 0-6.2-2.8-6.2-6.2V80.1c0-3.4 2.8-6.2 6.2-6.2z"/><path d="M95.6 57.3h59.6c2 0 3.6 1.6 3.6 3.6v19.8c0 6.6-5.4 12-12 12H95.6c-6.6 0-12-5.4-12-12V69.3c0-6.6 5.4-12 12-12z" fill="#dbdcdd" stroke="#0f4470" stroke-width="3"/><path d="M167.1 78.8v40.8c0 3.4-2.5 6.2-5.5 6.2H89.1c-3 0-5.5-2.8-5.5-6.2V78.8c0-3.4 2.5-6.2 5.5-6.2h72.6c3 0 5.4 2.8 5.4 6.2z" fill="#f2f2f3" stroke="#0f4470" stroke-width="3"/><path class="gm-icon-output-st1" d="M165.8 111.6H85V92.2c0-10.4.6-18.7 5.3-18.7h70.2c4.5 0 5.3 8.1 5.3 18.2v19.9z"/><path class="gm-icon-output-st13" d="M94.3 61.1h59.1v3.5H94.3zM94.3 66h59.1v3.5H94.3z"/><path d="M167.1 78.8v40.8c0 3.4-2.5 6.2-5.5 6.2H89.1c-3 0-5.5-2.8-5.5-6.2V78.8c0-3.4 2.5-6.2 5.5-6.2h72.6c3 0 5.4 2.8 5.4 6.2z" fill="none" stroke="#0f4470" stroke-width="3"/><path d="M153.9 93.2h14.8v13h-14.8c-3.1 0-5.6-2.5-5.6-5.6v-1.8c0-3.1 2.5-5.6 5.6-5.6z" fill="#fcba63"/><circle class="gm-icon-output-st13" cx="155.1" cy="99.6" r="2.8"/></svg></span>
                            Get your first<br /> mining output today            </h3>
                          <p>You will get periodic mining outputs to your designated wallet. Try our Bitcoin mining platform now!</p>
                          <div class="clearfix"></div>
                          <a href="/register" class="btn btn-enigma-a" title="Our packages">Our packages</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div id="gm-home-9">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-6 col-md-6 col-lg-6 gm-home-testimonials">
                            <h3>
                                <svg class="gm-icon gm-icon-star">
                                    <use xlink:href="img/sprite.svg#gm-icon-star"></use>
                                </svg>Testimonials</h3>

                            <div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="tsti"><img loading="lazy" src="img/testimonial-guy-1.jpg" alt="what cloud bitcoin mining can do for you" title="what cloud bitcoin mining can do for you"/></div>
                                        <p>CryptoBitNet is one of the leading cloudmining companies and a trustworthy partner of ours. It’s good to see that they are an honest cloudmining service which shows their farms openly to the public.</p>
                                        <div class="tstm">
                                            <ul class="about-social"></ul>
                                            <strong>Guy Corem</strong>, CEO Spondoolies-Tech<br/>
                                            <small>Leading Bitcoin Asic
                                                Manufacturing Company
                                            </small>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tsti"><img src="img/testimonial-2.jpg" loading="lazy"
                                                               alt="cloud bitcoin mining testimonial"
                                                               title="cloud bitcoin mining testimonial"/></div>
                                        <p>CryptoBitNet is one of our biggest clients and proven to be a reliable and trustworthy business partner. Their transparent mining sites and high quality software infrastructure together with our high end mining hardware result in a great and unique product and experience for everybody interested in mining!</p>
                                        <div class="tstm">
                                            <ul class="about-social"></ul>
                                            <strong>Terry Li</strong>, CEO Zeus<br/>
                                            <small>Leading Scrypt Asic Manufacturing
                                                Company
                                            </small>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tsti"><img src="img/testimonial-innosilicon.png" loading="lazy"
                                                               alt="bitcoin mining testimonial" title="bitcoin mining testimonial"/>
                                        </div>
                                        <p>As the world first 28nm BTC and LTC chip maker, Innosilicon selects Cryptobitnet as partner in cloud mining industry business for its integrity, excellent customer oriented service and great user interface design. CryptoBitNet is the best in class mining service that is supported by our technologically superior mining hardware. This unique synergy produces the best experience for those interested in mining and we look forward to having a long and prosperous relationship.</p>
                                        <div class="tstm">
                                            <ul class="about-social"></ul>
                                            <strong>Alex</strong>, VP of business development<br/>
                                            <small>from Innosilicon</small>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tsti"><img src="img/testimonial-logo-2.png" loading="lazy" alt="jing wei minereu testimonial" title="jing wei minereu testimonial"/></div>
                                        <p>MinerEU is very happy to have CryptoBitNet as our trustworthy partner.  We have already recommended CryptoBitNet to thousands of our existing customers who are happy and satisfied with their excellent services and products.</p>
                                        <div class="tstm">
                                            <ul class="about-social"></ul>
                                            <strong>Jing Wei</strong>, CEO of MinerEU<br/>
                                            <small>Official Distribution Partner of
                                                CryptoBitNet
                                            </small>
                                        </div>
                                    </div>

                                </div>
                                <a class="left carousel-control" href="#carousel-testimonials" role="button"
                                   data-slide="prev" aria-label="Previous testimonial"><svg class="gm-chevron-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 28" style="fill: #e69500 !important;"><path d="M18.297 4.703L10 13l8.297 8.297a.99.99 0 0 1 0 1.406l-2.594 2.594a.99.99 0 0 1-1.406 0L2.703 13.703a.99.99 0 0 1 0-1.406L14.297.703a.99.99 0 0 1 1.406 0l2.594 2.594a.99.99 0 0 1 0 1.406z"/></svg></a>
                                <a class="right carousel-control" href="#carousel-testimonials" role="button"
                                   data-slide="next" aria-label="Next testimonial"><svg class="gm-chevron-right" viewBox="0 0 19 28" style="fill: #e69500 !important;"><path d="M17.297 13.703L5.703 25.297a.99.99 0 0 1-1.406 0l-2.594-2.594a.99.99 0 0 1 0-1.406L10 13 1.703 4.703a.99.99 0 0 1 0-1.406L4.297.703a.99.99 0 0 1 1.406 0l11.594 11.594a.99.99 0 0 1 0 1.406z"/></svg></a>
                            </div>


                            <a href="/register" class="btn btn-enigma-a" title="Cryptocurrency Mining - Pricing Plans & Offers | CryptoBitNet">See our packages</a>
                        </div>


                        <div class="col-sm-6 col-md-6 col-lg-6 gm-home-twitter">
                            <h3><a href="#" target="_blank"
                                   title="Twitter feed" rel="noreferrer" style="color:#e69500;">
                                    <svg class="gm-icon gm-icon-twitter">
                                        <use xlink:href="img/sprite.svg#gm-icon-twitter"></use>
                                    </svg>Twitter feed</a></h3>
                            <div id="carousel-tweet" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner"></div>
                                <a class="left carousel-control" href="#carousel-tweet" aria-label="Previous tweet" role="button" data-slide="prev"><svg class="gm-chevron-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 28" style="fill: #e69500 !important;"><path d="M18.297 4.703L10 13l8.297 8.297a.99.99 0 0 1 0 1.406l-2.594 2.594a.99.99 0 0 1-1.406 0L2.703 13.703a.99.99 0 0 1 0-1.406L14.297.703a.99.99 0 0 1 1.406 0l2.594 2.594a.99.99 0 0 1 0 1.406z"/></svg></a>
                                <a class="right carousel-control" href="#carousel-tweet" aria-label="Next tweet" role="button" data-slide="next"><svg class="gm-chevron-right" viewBox="0 0 19 28" style="fill: #e69500 !important;"><path d="M17.297 13.703L5.703 25.297a.99.99 0 0 1-1.406 0l-2.594-2.594a.99.99 0 0 1 0-1.406L10 13 1.703 4.703a.99.99 0 0 1 0-1.406L4.297.703a.99.99 0 0 1 1.406 0l11.594 11.594a.99.99 0 0 1 0 1.406z"/></svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>









            <div id="gm-home-5">

                    <div class="row">
                      <div class="container">
                        <h3 class="text-center" id="about">About Us</h3>
                      </div>

                        <div class="pattern-box">
                          <div id="gm-aboutus-4">
                              <div id="who-are-we" class="container">
                                  <div class="row row-fix">

                                    <div class="col-md-8 col-md-push-3">
                                      <div class="identity-box">


                                        <div class="row">
                                          <div class="col-sm-12">
                                            <span>Identity</span>
                                            <h2>Who we are</h2>
                                          </div>
                                          <div class="col-xs-6">
                                            <p>The story of cryptobitnet started at the end of 2017. Our founders got to know each other by using the same platform for buying and selling Bitcoins. They were fascinated by the technology and wanted to build their own farm, only to realize all their friends wanted to participate as well.</p>
                                          </div>
                                          <div class="col-xs-6">
                                            <p>They came up with the idea of mining as a service and built the first mining farm in Eastern Europe. Since our founding, we have grown tremendously and a lot has happened, but one thing remains constant: We are all strong believers in the future of digital currencies and we love being part of this growing community.</p>
                                                            </div>
                                        </div>

                                                        <b class="btn btn-blue-1 btn-yotpo">★&nbsp;Reviews from our users</b>

                                      </div>
                                    </div>





                                    <div class="col-md-3 col-md-pull-8 history-container">
                                      <div class="history-box">

                                        <h2>History</h2>



                                          <div class="panel-group" id="accordion" style="margin-top: 100px !important;">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                  2017</a>
                                                </h4>
                                              </div>
                                              <div id="collapse1" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                  <section>
                                                      <p style="font-size: 12px !important;">CNN’s “Quest Means Business” visits us in Iceland<br><span class="timestamp"><b>October</b></span></p>

                                                  </section>
                                                  <section>
                                                      <p style="font-size: 12px !important;">We reach the milestone of 10,000 customers!<br><span class="timestamp"><b>December</b></span></p>

                                                  </section>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                                 2018</a>
                                                </h4>
                                              </div>
                                              <div id="collapse2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                  <section>
                                                      <p style="font-size: 12px !important;">Our first facility in Sweden starts running<br><span class="timestamp"><b>January</b></span></p>

                                                  </section>
                                                  <section>
                                                      <p style="font-size: 12px !important;">Our staged protest “Bankers Against Bitcoin” goes viral<br><span class="timestamp"><b>May</b></span></p>

                                                  </section>
                                                   <section>
                                                       <p style="font-size: 12px !important;">We win “Mining Initiative of the Year Award 2018” with our Radiant Technology<br><span class="timestamp"><b>November</b></span></p>

                                                   </section>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                                  2019</a>
                                                </h4>
                                              </div>
                                              <div id="collapse3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                  <section>
                                                      <p style="font-size: 12px !important;">Cryptobitnet is founded<br><span class="timestamp"><b>December</b></span></p>

                                                  </section>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                                  2020</a>
                                                </h4>
                                              </div>
                                              <div id="collapse4" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                  <section>
                                                      <p style="font-size: 12px !important;">Our website was created<br><span class="timestamp"><b>January</b></span></p>

                                                  </section>
                                                  <section>
                                                      <p style="font-size: 12px !important;">Our customer base reached 100,000<br><span class="timestamp"><b>January</b></span></p>

                                                  </section>
                                                  <section>
                                                      <p style="font-size: 12px !important;">Our first facility In Iceland<br><span class="timestamp"><b>February</b></span></p>

                                                  </section>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                      </div>
                                    </div>

                                  </div>
                              </div>
                          </div>
                          </div>

                          <div class="pattern-box pattern-box-2">
                            <div id="gm-aboutus-3">
                              <div class="container">
                                <div class="row">
                                  <div class="col-md-10 col-md-offset-1">
                                    <div class="gma3c">
                                    <div class="row">
                                      <div class="col-xs-6 col-xs-offset-3 col-sm-12 col-sm-offset-0">
                                        <div>
                                          <span class="reveal"><svg id="gm-icon-servicing" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 253.3 163.1"><style>.gm-icon-servicing-st0{fill:#fff;stroke:#fcba63;stroke-width:2}.gm-icon-servicing-st1{fill:#e8eef1}.gm-icon-servicing-st2{fill:#fff}.gm-icon-servicing-st3{fill:#9fd3f2;stroke:#faa934;stroke-width:2;stroke-miterlimit:10}.gm-icon-servicing-st4{fill:#8bc9ed}.gm-icon-servicing-st5{fill:#fbb147}.gm-icon-servicing-st6{fill:#faa934}.gm-icon-servicing-st7{fill:#104470}.gm-icon-servicing-st8{fill:none;stroke:#8bc9ed;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10}.gm-icon-servicing-st9{fill:#094b7c}.gm-icon-servicing-st10{fill:none;stroke:#8bc9ed;stroke-width:2;stroke-miterlimit:10}.gm-icon-servicing-st11{opacity:.6;fill:#9bbfd0;enable-background:new}</style><symbol id="World" viewBox="-37.6 -37.7 75.3 75.5"><path class="gm-icon-servicing-st0" d="M-28.4 0h-8.2c0 5.3 1.2 10.6 3.4 15.4 2.3-.2 4.6-.4 7-.6C-27.7 10-28.4 5-28.4 0zM-26.2 14.9c-2.4.2-4.7.4-7 .6 2.5 5.5 6.4 10.2 11.2 13.8 1.1-.2 2.1-.3 3.2-.4-3.4-4.2-5.9-8.9-7.4-14zM-12.8-34.4c-3.3 1.2-6.4 2.9-9.2 5.1 1.1.1 2.1.3 3.2.4 1.8-2.1 3.8-3.9 6-5.5z"/><path class="gm-icon-servicing-st0" d="M-18.8 28.8c-1.1.1-2.2.3-3.2.4 2.8 2.1 5.9 3.8 9.2 5.1-2.2-1.5-4.2-3.4-6-5.5zM-26.2-14.9c-2.4-.2-4.7-.4-7-.6-2.3 4.8-3.4 10.1-3.4 15.4h8.2c0-5 .7-10 2.2-14.8z"/><path class="gm-icon-servicing-st0" d="M-18.8-28.9c-1.1-.1-2.2-.3-3.2-.4-4.8 3.6-8.7 8.4-11.2 13.8 2.3.2 4.6.4 7 .6 1.5-5.1 4-9.9 7.4-14zM26.2-14.9c2.4-.2 4.7-.4 7-.6C30.7-21 26.8-25.7 22-29.3c-1.1.1-2.1.3-3.2.4 3.4 4.1 5.9 8.9 7.4 14zM12.8 34.3c3.3-1.2 6.4-2.9 9.2-5.1-1.1-.2-2.1-.3-3.2-.4-1.8 2.1-3.8 4-6 5.5z"/><path class="gm-icon-servicing-st0" d="M18.8 28.8c1.1.1 2.2.3 3.2.4 4.8-3.6 8.7-8.4 11.2-13.8-2.3-.2-4.6-.4-7-.6-1.5 5.2-4 9.9-7.4 14z"/><path class="gm-icon-servicing-st0" d="M28.4 0c0 5-.7 10.1-2.2 14.9 2.4.2 4.7.4 7 .6 2.3-4.8 3.4-10.1 3.4-15.5h-8.2zM28.4 0h8.2c0-5.3-1.2-10.6-3.4-15.4-2.3.2-4.6.4-7 .6 1.5 4.7 2.2 9.7 2.2 14.8zM18.8-28.9c1.1-.1 2.2-.3 3.2-.4-2.8-2.1-5.9-3.8-9.2-5.1 2.2 1.6 4.2 3.4 6 5.5zM4.9-36.3c2.7.4 5.3 1 7.8 2M-12.8-34.4c2.5-.9 5.2-1.6 7.8-2M12.8 34.3c-2.5 1-5.2 1.6-7.8 2M-4.9 36.3c-2.7-.4-5.3-1-7.8-2M-15 0h-13.4c0 5 .7 10.1 2.2 14.9 4-.3 8.1-.5 12.3-.7C-14.7 9.5-15 4.7-15 0z"/><path class="gm-icon-servicing-st0" d="M-26.2 14.9c1.5 5.1 4.1 9.9 7.5 14 2.8-.3 5.6-.6 8.5-.8-1.8-4.4-3-9.1-3.7-13.8-4.3.1-8.3.3-12.3.6zM14 14.3c4.2.2 8.3.4 12.3.7 1.5-4.8 2.2-9.8 2.2-14.9H15c0 4.7-.3 9.4-1 14.2zM-18.8-28.9c2.8.3 5.6.6 8.5.8 1.2-3.1 3-5.9 5.3-8.2-2.7.4-5.3 1-7.8 2-2.2 1.5-4.2 3.3-6 5.4zM26.2-14.9c-1.5-5.1-4.1-9.9-7.4-14-2.8.3-5.6.6-8.5.8 1.8 4.5 3 9.1 3.7 13.9 4.1-.2 8.2-.4 12.2-.7zM-14-14.2c-4.2-.1-8.3-.4-12.3-.6C-27.8-10-28.5-5-28.5.1H-15c0-4.9.3-9.6 1-14.3z"/><path class="gm-icon-servicing-st0" d="M-10.3-28.1c-2.9-.2-5.8-.4-8.5-.8-3.4 4.1-5.9 8.9-7.4 14 4 .3 8.1.5 12.3.6.6-4.7 1.9-9.3 3.6-13.8zM10.3 28c2.9.2 5.8.4 8.5.8 3.4-4.1 5.9-8.9 7.4-14-4-.3-8.1-.5-12.3-.7-.6 4.8-1.9 9.5-3.6 13.9zM10.3-28.1c2.9-.2 5.8-.4 8.5-.8-1.7-2.1-3.8-3.9-6-5.5-2.5-.9-5.2-1.6-7.8-2 2.3 2.4 4.1 5.2 5.3 8.3zM-10.3 28c-2.9.2-5.8.4-8.5.8 1.7 2.1 3.8 3.9 6 5.5 2.5 1 5.2 1.6 7.8 2-2.3-2.3-4.1-5.1-5.3-8.3zM14-14.2c.7 4.7 1 9.4 1 14.2h13.4c0-5-.7-10.1-2.2-14.9-4 .3-8.1.5-12.2.7z"/><path class="gm-icon-servicing-st0" d="M18.8 28.8c-2.8-.3-5.6-.6-8.5-.8-1.2 3.1-3 5.9-5.3 8.2 2.7-.4 5.3-1 7.8-2 2.2-1.5 4.2-3.3 6-5.4zM-4.9-36.3c1.6-.2 3.3-.3 4.9-.3M0-36.7c1.7 0 3.3.1 4.9.3M0 36.6c-1.7 0-3.3-.1-4.9-.3M4.9 36.3c-1.6.2-3.3.3-4.9.3M-15 0c0 4.8.3 9.6 1.1 14.3 4.5-.2 9.1-.3 13.9-.3V0h-15zM0 13.9c4.8 0 9.4.1 14 .3.7-4.7 1-9.5 1-14.2H0v13.9zM0 0h15c0-4.8-.3-9.5-1-14.2-4.6.1-9.2.2-14 .2V0z"/><path class="gm-icon-servicing-st0" d="M0 13.9v13.8c3.5 0 6.9.1 10.3.3 1.8-4.4 3-9.1 3.7-13.8-4.6-.2-9.2-.3-14-.3zM0-14c-4.8 0-9.4-.1-14-.3-.7 4.7-1.1 9.5-1.1 14.2h15L0-14zM0-14c4.8 0 9.4-.1 14-.3-.7-4.7-1.9-9.4-3.7-13.9-3.4.3-6.8.4-10.3.4V-14z"/><path class="gm-icon-servicing-st0" d="M0 27.7v8.9c1.7 0 3.3-.1 4.9-.3 2.3-2.3 4.2-5.1 5.3-8.2-3.3-.3-6.7-.4-10.2-.4zM0 13.9c-4.8 0-9.4.1-14 .3.7 4.7 1.9 9.4 3.7 13.8 3.3-.2 6.8-.3 10.3-.3V13.9z"/><path class="gm-icon-servicing-st0" d="M-10.3 28c1.2 3.1 3 5.9 5.3 8.2 1.6.2 3.3.3 4.9.3v-8.9c-3.4.1-6.8.2-10.2.4zM0-14v-13.8c-3.5 0-6.9-.1-10.2-.3-1.8 4.5-3 9.1-3.7 13.9 4.5.1 9.1.2 13.9.2z"/><path class="gm-icon-servicing-st0" d="M0-27.7v-8.9c-1.7 0-3.3.1-4.9.3-2.3 2.3-4.2 5.1-5.3 8.2 3.3.2 6.7.3 10.2.4zM10.3-28.1c-1.2-3.1-3-5.9-5.3-8.2-1.6-.2-3.3-.3-4.9-.3v8.9c3.4 0 6.8-.2 10.2-.4z"/></symbol><g id="Layer_22"><ellipse class="gm-icon-servicing-st1" cx="128.2" cy="93.9" rx="70.1" ry="67.4"/><path class="gm-icon-servicing-st1" d="M78.1 120.1H35c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h43.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5zM85.6 93.9H44.1c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h41.6c4.7 0 8.5 3.8 8.5 8.5v6.1c-.1 4.7-3.9 8.5-8.6 8.5z"/><path class="gm-icon-servicing-st2" d="M93.1 137.7H45c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h48.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5zM69.1 70.8H21c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h48.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5z"/><path class="gm-icon-servicing-st1" d="M168.7 47.7h47.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-47.1c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5zM159.7 93.9h43.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-43.1c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5z"/><path class="gm-icon-servicing-st2" d="M184.7 70.8h39.6c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-39.6c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5z"/><path class="gm-icon-servicing-st1" d="M244.8 117h-15c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h15c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5zM16 70.8h-4C5.5 70.7.2 75.9 0 82.4.2 88.9 5.5 94 12 93.9h4c6.5.1 11.9-5.1 12-11.6-.1-6.4-5.5-11.6-12-11.5z"/><path class="gm-icon-servicing-st2" d="M150.2 44.7h19c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-19c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5zM126.6 68.8h19c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-19c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5zM158.7 117h40.6c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-40.6c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5z"/><ellipse class="gm-icon-servicing-st3" cx="237.9" cy="117.5" rx="2.5" ry="2.4"/><path class="gm-icon-servicing-st4" d="M178.3 31l1.2 3.8 3.9 1.2-3.9 1.1-1.2 3.8-1.2-3.8-4-1.1 4-1.2z"/><path class="gm-icon-servicing-st5" d="M122.2 153.2l1.2 3.8 4 1.1-4 1.2-1.2 3.8-1.2-3.8-3.9-1.2 3.9-1.1z"/><path class="gm-icon-servicing-st6" d="M197.3 82l1.2 3.8 4 1.1-4 1.2-1.2 3.8-1.2-3.8-3.9-1.2 3.9-1.1z"/><path class="gm-icon-servicing-st7" d="M189.1 120c-.6 0-1-.4-1-1v-3.8c0-.6.4-1 1-1s1 .4 1 1v3.8c0 .6-.5 1-1 1zM189.1 131.5c-.6 0-1-.4-1-1v-3.8c0-.6.4-1 1-1s1 .4 1 1v3.8c0 .5-.5 1-1 1zM197.1 123.8h-4c-.5.1-1.1-.2-1.2-.7-.1-.5.2-1.1.7-1.2h4.5c.5-.1 1.1.2 1.2.7.1.5-.2 1.1-.7 1.2h-.5zM185.1 123.8h-4c-.5.1-1.1-.2-1.2-.7-.1-.5.2-1.1.7-1.2h4.5c.5-.1 1.1.2 1.2.7.1.5-.2 1.1-.7 1.2h-.5z"/><ellipse class="gm-icon-servicing-st7" cx="189.1" cy="122.8" rx="1" ry="1"/><path class="gm-icon-servicing-st8" d="M86.9 24.7v3.8M86.9 36.2v3.9M94.9 32.4h-4M82.9 32.4h-4"/><ellipse class="gm-icon-servicing-st4" cx="86.9" cy="32.4" rx="1" ry="1"/><path class="gm-icon-servicing-st9" d="M164.5 148.1c.7 0 1.2-.5 1.2-1.2s-.5-1.2-1.2-1.2-1.2.5-1.2 1.2.6 1.2 1.2 1.2zM203.1 99.5v-.2c0-.3-.3-.6-.6-.6s-.6.3-.6.6v.2c0 .3.3.6.6.6.4 0 .6-.3.6-.6zM207.5 103.3c-.2-.1-.5 0-.6.2-.1.2-.1.4.1.5.4.5 1.1-.4.5-.7z"/><path class="gm-icon-servicing-st6" d="M36.4 112c.9-.1 1.5-.8 1.5-1.7-.1-.8-.7-1.4-1.5-1.5-.9.1-1.5.8-1.5 1.7.1.8.7 1.4 1.5 1.5z"/><path class="gm-icon-servicing-st9" d="M63.2 83.2c-.9-.4-1.8-.1-2.2.7-.2.4-.2.9 0 1.4v.1c.4.8 1.4 1 2.2.6.8-.4 1-1.4.6-2.2-.2-.2-.3-.4-.6-.6z"/><path class="gm-icon-servicing-st4" d="M65.8 62.5c-.2.7-.6 1.4-1.3 1.8-.7.5-1.7.8-2.6.6-.9-.1-1.7-.6-2.3-1.3-.6-.7-.8-1.6-.7-2.5.1-.9.6-1.7 1.3-2.2.7-.6 1.7-.8 2.6-.7 1.9.2 3.2 1.9 3 3.7.1.4.1.5 0 .6zM61 61.3v.2c0 .4.1.8.3 1.1.2.3.6.5 1 .5.4.1.8-.1 1.1-.3.3-.2.5-.6.6-1 .1-.8-.5-1.5-1.3-1.6-.8-.1-1.5.4-1.7 1.1z"/><ellipse class="gm-icon-servicing-st10" cx="201.2" cy="60.7" rx="2.5" ry="2.4"/><path class="gm-icon-servicing-st8" d="M53.9 115.1v3.9M53.9 126.7v3.8M61.9 122.8h-4M49.9 122.8h-4"/><ellipse class="gm-icon-servicing-st5" cx="53.9" cy="122.8" rx="1" ry="1"/><path class="gm-icon-servicing-st7" d="M53.9 114.2c-.6 0-1 .4-1 1v1.8h2v-1.9c0-.5-.5-.9-1-.9z"/><circle class="gm-icon-servicing-st3" cx="6" cy="50.2" r="2.6"/><path class="gm-icon-servicing-st4" d="M68.9 145l-1.2-4.1-4.2-1.3 4.2-1.3 1.2-4.1 1.3 4.1 4.2 1.3-4.2 1.3z"/><path class="gm-icon-servicing-st5" d="M128 10.9l-1.3-4.2-4.2-1.3 4.2-1.2 1.2-4.2 1.3 4.2 4.2 1.2-4.2 1.3z"/><path class="gm-icon-servicing-st6" d="M48.8 89.1l-1.3-4.2-4.1-1.2 4.1-1.3 1.3-4.2 1.3 4.2 4.2 1.3-4.2 1.2z"/><path class="gm-icon-servicing-st7" d="M57.5 47.4c.6 0 1 .4 1.1 1v4.3c.1.6-.4 1.1-1 1.2-.6.1-1.1-.4-1.2-1v-4.4c0-.6.4-1 .9-1 .1-.1.2-.1.2-.1zM57.5 34.8c.6 0 1.1.5 1.1 1.1V40c-.1.6-.6 1-1.2 1-.5 0-.9-.4-1-1v-4.2c0-.6.5-1 1.1-1zM49 43.2h4.2c.6.1 1 .6 1 1.2 0 .5-.4.9-1 1H49c-.6.1-1.1-.4-1.2-1-.1-.6.4-1.1 1-1.2h.2zM61.7 43.2h4.2c.6-.1 1.1.4 1.2 1s-.4 1.1-1 1.2h-4.4c-.6-.1-1-.6-1-1.2.1-.6.5-1 1-1z"/><circle class="gm-icon-servicing-st7" cx="57.5" cy="44.3" r="1.1"/><path class="gm-icon-servicing-st8" d="M169.5 136.6v-4.2M169.5 123.9v-4.2M161.1 128.2h4.2M173.7 128.2h4.2"/><circle class="gm-icon-servicing-st4" cx="169.5" cy="128.2" r="1.1"/><path class="gm-icon-servicing-st9" d="M83.3 19.1c.7 0 1.2-.5 1.2-1.2s-.5-1.2-1.2-1.2-1.2.5-1.2 1.2.6 1.2 1.2 1.2zM42.7 69.9v.1c0 .3.3.5.6.5s.5-.2.5-.5v-.2c0-.3-.3-.5-.6-.5-.3.1-.5.3-.5.6zM38.1 65.7c.2.1.3.1.4 0h.1c.2-.1.3-.4.2-.6-.1-.2-.4-.3-.6-.2-.2.1-.3.4-.2.6 0 .1 0 .1.1.2z"/><path class="gm-icon-servicing-st6" d="M218.5 59.3c.9-.1 1.5-.8 1.5-1.7-.1-.8-.7-1.4-1.5-1.5-.9.1-1.5.8-1.5 1.7.1.8.8 1.5 1.5 1.5z"/><path class="gm-icon-servicing-st9" d="M190.3 87.5l.1.1c.8.4 1.7.1 2.1-.6.3-.5.3-1 0-1.5v-.1c-.4-.8-1.4-1-2.2-.6s-1 1.4-.6 2.2c.2.1.4.3.6.5z"/><path class="gm-icon-servicing-st4" d="M187.5 110.3c.2-.8.7-1.5 1.3-2 1.6-1.2 3.9-.9 5.2.7.6.8.9 1.8.7 2.7-.3 2-2.1 3.4-4.2 3.2s-3.4-2.1-3.2-4.2c.2-.1.2-.2.2-.4zm5.1 1.3v-.2c.1-.4-.1-.8-.3-1.2-.3-.3-.6-.6-1.1-.6-.4-.1-.8.1-1.2.3-.7.5-.8 1.5-.3 2.2.5.7 1.5.8 2.2.3.4-.1.6-.4.7-.8z"/><circle class="gm-icon-servicing-st10" cx="44.7" cy="112.4" r="2.6"/><path class="gm-icon-servicing-st8" d="M200.1 52.6v-4.3M200 39.9v-4.2M191.6 44.1h4.2M204.3 44.1h4.2"/><circle class="gm-icon-servicing-st5" cx="200.1" cy="44.1" r="1.1"/><path class="gm-icon-servicing-st7" d="M200.1 53.6c.6 0 1-.4 1.1-.9v-2.1H199v2c0 .6.5 1 1.1 1z"/><circle class="gm-icon-servicing-st11" cx="146.8" cy="79.5" r="34.5"/><path class="gm-icon-servicing-st11" d="M96 137.1c-3-2.3-3-11 0-15.1 3.2-4.3 20.4-12 20.4-12h13.2s17.6 7.3 20.9 11.7c3.1 4.2 3.1 13.1 0 15.4-10.8 8.3-43.7 8.3-54.5 0z"/><use xlink:href="#World" width="75.3" height="75.5" x="-37.6" y="-37.7" transform="matrix(.93 0 0 .92 140.686 79.087)" overflow="visible"/><linearGradient id="gm-icon-servicing-SVGID_1_" gradientUnits="userSpaceOnUse" x1="86.75" y1="39.843" x2="145.836" y2="39.843" gradientTransform="matrix(1 0 0 -1 0 166)"><stop offset=".67" stop-color="#fff"/><stop offset=".68" stop-color="#f2f2f3"/></linearGradient><path d="M89 136.6c-3-2.3-3-11 0-15.1 3.2-4.3 20.4-12 20.4-12h13.2s17.6 7.3 20.9 11.7c3.1 4.2 3.1 13.1 0 15.4-10.8 8.3-43.7 8.3-54.5 0z" fill="url(#gm-icon-servicing-SVGID_1_)" stroke="#0f4470" stroke-width="3"/><linearGradient id="gm-icon-servicing-SVGID_2_" gradientUnits="userSpaceOnUse" x1="106.94" y1="62.02" x2="125.52" y2="62.02" gradientTransform="matrix(1 0 0 -1 0 166)"><stop offset=".67" stop-color="#fff"/><stop offset=".68" stop-color="#f2f2f3"/></linearGradient><path d="M114.5 90.2h3.5c4.2 0 7.5 3.4 7.5 7.5v12.4c0 4.2-3.4 7.5-7.5 7.5h-3.5c-4.2 0-7.5-3.4-7.5-7.5V97.8c-.1-4.2 3.3-7.6 7.5-7.6z" fill="url(#gm-icon-servicing-SVGID_2_)" stroke="#0f4470" stroke-width="3"/><linearGradient id="gm-icon-servicing-SVGID_3_" gradientUnits="userSpaceOnUse" x1="94.65" y1="76.39" x2="138.62" y2="76.39" gradientTransform="matrix(1 0 0 -1 0 166)"><stop offset=".67" stop-color="#fff"/><stop offset=".68" stop-color="#f2f2f3"/></linearGradient><path d="M126.3 107h-20c-4.1 0-7.3-3.3-7.3-7.4l-4.3-20c0-4.1 7.6-7.4 11.7-7.4h20c4 0 12.3 3.3 12.3 7.4l-4.9 20c0 4.1-3.4 7.4-7.5 7.4z" fill="url(#gm-icon-servicing-SVGID_3_)" stroke="#0f4470" stroke-width="3"/><path d="M101.9 84l.1 2.2c-4.7 0-7.8-4.5-7.9-9.2v-3.3c0-4.7 3.8-8.5 8.5-8.6l23.7-.7c5.6.8 12.2 2.8 13.2 10.7l-.9 6.8c-.8 4.7-39-15.2-36.7 2.1z" fill="#e6e6e5" stroke="#0f4470" stroke-width="3"/><path d="M101.8 83.9v2.2c-4.7 0-7.8-4.6-7.8-9.2v-3.3c0-4.7 3.8-8.6 8.5-8.6l14.1-.3 5.3-.1 4.2-.1c5.6.9-10.2 10.5-19.9 12.5-3 .7-4.9 2.7-4.4 6.9z" fill="#f2f2f2" stroke="#0f4470" stroke-width="3"/></g></svg></span>
                                          <strong class="reveal">Servicing over 10,000 customers from 100+ countries</strong>
                                        </div>
                                      </div>

                                      <!-- <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-0">
                                        <div>
                                          <span class="reveal"><svg id="gm-icon-coins" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 253.3 145.9"><style>.gm-icon-coins-st0{fill:#e8eef1}.gm-icon-coins-st1{fill:#fff}.gm-icon-coins-st2{fill:#9fd3f2;stroke:#faa934;stroke-width:2;stroke-miterlimit:10}.gm-icon-coins-st3{fill:#8bc9ed}.gm-icon-coins-st4{fill:#fbb147}.gm-icon-coins-st5{fill:#faa934}.gm-icon-coins-st6{fill:#104470}.gm-icon-coins-st7{fill:none;stroke:#8bc9ed;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10}.gm-icon-coins-st8{fill:#094b7c}.gm-icon-coins-st9{fill:none;stroke:#8bc9ed;stroke-width:2;stroke-miterlimit:10}.gm-icon-coins-st11{fill:none}.gm-icon-coins-st12{fill:#9bbfd0}.gm-icon-coins-st13{fill:none;stroke:#0f4470;stroke-width:3}</style><g id="Layer_22"><ellipse class="gm-icon-coins-st0" cx="128.2" cy="76.7" rx="70.1" ry="67.3"/><path class="gm-icon-coins-st0" d="M78.1 122.8H35c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h43.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5zM85.6 76.7H44.1c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h41.6c4.7 0 8.5 3.8 8.5 8.5v6.1c-.1 4.7-3.9 8.5-8.6 8.5z"/><path class="gm-icon-coins-st1" d="M93.1 99.8H45c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h48.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5zM69.1 53.6H21c-4.7 0-8.5-3.8-8.5-8.5V39c0-4.7 3.8-8.5 8.5-8.5h48.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5z"/><path class="gm-icon-coins-st0" d="M168.7 30.5h47.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-47.1c-4.7 0-8.5-3.8-8.5-8.5V39c0-4.7 3.8-8.5 8.5-8.5zM159.7 76.7h43.1c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-43.1c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5z"/><path class="gm-icon-coins-st1" d="M184.7 53.6h39.6c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-39.6c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5z"/><path class="gm-icon-coins-st0" d="M244.8 99.8h-15c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5h15c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5zM16 53.6h-4c-6.5-.1-11.8 5-12 11.5.2 6.5 5.5 11.6 12 11.5h4c6.5.1 11.9-5 12-11.5-.1-6.5-5.5-11.6-12-11.5z"/><path class="gm-icon-coins-st1" d="M150.2 30.5h19c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-19c-4.7 0-8.5-3.8-8.5-8.5V39c0-4.7 3.8-8.5 8.5-8.5zM116.6 53.6h19c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-19c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5zM158.7 99.8h40.6c4.7 0 8.5 3.8 8.5 8.5v6.1c0 4.7-3.8 8.5-8.5 8.5h-40.6c-4.7 0-8.5-3.8-8.5-8.5v-6.1c0-4.7 3.8-8.5 8.5-8.5z"/><ellipse class="gm-icon-coins-st2" cx="237.9" cy="100.2" rx="2.5" ry="2.4"/><path class="gm-icon-coins-st3" d="M178.3 13.8l1.2 3.7 3.9 1.2-3.9 1.2-1.2 3.8-1.2-3.8-4-1.2 4-1.2z"/><path class="gm-icon-coins-st4" d="M122.2 136l1.2 3.8 4 1.1-4 1.2-1.2 3.8-1.2-3.8-3.9-1.2 3.9-1.1z"/><path class="gm-icon-coins-st5" d="M197.3 64.8l1.2 3.7 4 1.2-4 1.2-1.2 3.8-1.2-3.8-3.9-1.2 3.9-1.2z"/><path class="gm-icon-coins-st6" d="M189.1 102.7c-.6 0-1-.4-1-1v-3.8c0-.6.4-1 1-1s1 .4 1 1v3.8c-.1.6-.5 1-1 1zM189.1 114.2c-.6 0-1-.4-1-1v-3.8c0-.6.4-1 1-1s1 .4 1 1v3.8c0 .6-.5 1-1 1zM197.1 106.6h-4c-.5.2-1.1-.1-1.2-.7-.2-.5.1-1.1.7-1.2.2-.1.4-.1.6 0h4c.5-.2 1.1.1 1.2.7.2.5-.1 1.1-.7 1.2h-.6zM185.1 106.6h-4c-.5.2-1.1-.1-1.2-.7-.2-.5.1-1.1.7-1.2.2-.1.4-.1.6 0h4c.5-.2 1.1.1 1.2.7.2.5-.1 1.1-.7 1.2h-.6z"/><ellipse class="gm-icon-coins-st6" cx="189.1" cy="105.6" rx="1" ry="1"/><path class="gm-icon-coins-st7" d="M86.9 7.5v3.8M86.9 19v3.9M94.9 15.1h-4M82.9 15.1h-4"/><ellipse class="gm-icon-coins-st3" cx="86.9" cy="15.1" rx="1" ry="1"/><path class="gm-icon-coins-st8" d="M164.5 130.8c.7 0 1.2-.5 1.2-1.2s-.5-1.2-1.2-1.2-1.2.5-1.2 1.2.6 1.2 1.2 1.2zM203.1 82.3v-.2c0-.3-.3-.6-.6-.6s-.6.3-.6.6v.2c0 .3.3.6.6.6.4-.1.6-.3.6-.6zM207.5 86.1c-.2-.1-.5-.1-.6.2-.1.2-.1.4.1.6.4.4 1.1-.5.5-.8z"/><path class="gm-icon-coins-st5" d="M36.4 94.8c.9 0 1.6-.7 1.6-1.6 0-.9-.7-1.6-1.6-1.6s-1.6.7-1.6 1.6c0 .9.7 1.6 1.6 1.6z"/><path class="gm-icon-coins-st8" d="M63.2 66c-.9-.4-1.8-.1-2.2.7-.2.4-.2.9 0 1.4v.1c.4.8 1.4 1 2.2.6.8-.4 1-1.4.6-2.2-.1-.3-.3-.5-.6-.6z"/><path class="gm-icon-coins-st3" d="M65.8 45.3c-.2.7-.6 1.4-1.3 1.8-1.5 1.1-3.7.9-4.9-.6-.6-.7-.8-1.6-.6-2.5.1-.9.6-1.7 1.3-2.2.7-.5 1.7-.8 2.6-.7 1.9.2 3.2 1.9 3 3.7v.1c0 .1 0 .3-.1.4zM61 44.1v.2c0 .4.1.8.3 1.1.2.3.6.5 1 .5.4.1.8 0 1.1-.3.3-.2.5-.6.6-1 .1-.8-.5-1.5-1.3-1.6-.8-.1-1.5.4-1.7 1.1z"/><ellipse class="gm-icon-coins-st9" cx="201.2" cy="43.5" rx="2.5" ry="2.4"/><path class="gm-icon-coins-st7" d="M53.9 97.9v3.9M53.9 109.4v3.9M61.9 105.6h-4M49.9 105.6h-4"/><ellipse class="gm-icon-coins-st4" cx="53.9" cy="105.6" rx="1" ry="1"/><path class="gm-icon-coins-st6" d="M53.9 96.9c-.6 0-1 .4-1 1v1.9h2v-1.9c0-.5-.5-1-1-1z"/><g opacity=".6"><path class="gm-icon-coins-st11" d="M133.1 37.7v14.5"/><path class="gm-icon-coins-st12" d="M144.6 33.7l-11.5 4.2-12.2-4.2v13.2l12.2 5.3 11.5-5.3V33.7l-11.8-4.8-12.5 4.4"/><path class="gm-icon-coins-st11" d="M99.3 59.6v14.5"/><path class="gm-icon-coins-st12" d="M110.9 55.6l-11.6 4.2-12.2-4.2v13.2l12.2 5.3 11.6-5.3V55.6L99 50.8l-12.5 4.4"/><path class="gm-icon-coins-st11" d="M166.7 59v14.6"/><path class="gm-icon-coins-st12" d="M178.2 55l-11.5 4.2-12.2-4.2v13.2l12.2 5.4 11.5-5.4V55l-11.8-4.8-12.5 4.4"/><path class="gm-icon-coins-st11" d="M133.1 76.4V91"/><path class="gm-icon-coins-st12" d="M144.6 72.4l-11.5 4.3-12.2-4.3v13.3l12.2 5.3 11.5-5.3V72.4l-11.8-4.7-12.5 4.3"/><path class="gm-icon-coins-st11" d="M133.1 113.9v14.6"/><path class="gm-icon-coins-st12" d="M144.6 109.9l-11.5 4.3-12.2-4.3V123.2l12.2 5.3 11.5-5.3v-13.3l-11.8-4.7-12.5 4.3"/><path class="gm-icon-coins-st11" d="M99.3 94.6v14.6"/><path class="gm-icon-coins-st12" d="M110.9 90.6l-11.6 4.2-12.2-4.2v13.2l12.2 5.4 11.6-5.4V90.6L99 85.8l-12.5 4.4"/><path class="gm-icon-coins-st11" d="M166.7 94.6v14.6"/><path class="gm-icon-coins-st12" d="M178.2 90.6l-11.5 4.2-12.2-4.2v13.2l12.2 5.4 11.5-5.4V90.6l-11.8-4.8-12.5 4.4"/></g><path class="gm-icon-coins-st13" d="M127.2 38.9v14.6"/><linearGradient id="gm-icon-coins-SVGID_1_" gradientUnits="userSpaceOnUse" x1="114.42" y1="106.2" x2="138.77" y2="106.2" gradientTransform="matrix(1 0 0 -1 0 148)"><stop offset=".48" stop-color="#fff"/><stop offset=".49" stop-color="#f2f2f3"/></linearGradient><path fill="url(#gm-icon-coins-SVGID_1_)" stroke="#0f4470" stroke-width="3" d="M138.8 34.9l-11.6 4.3-12.2-4.3V48.2l12.2 5.3 11.6-5.3V34.9l-11.9-4.8-12.5 4.4"/><path class="gm-icon-coins-st13" d="M93.4 60.8v14.5"/><linearGradient id="gm-icon-coins-SVGID_2_" gradientUnits="userSpaceOnUse" x1="80.64" y1="84.305" x2="104.99" y2="84.305" gradientTransform="matrix(1 0 0 -1 0 148)"><stop offset=".48" stop-color="#fff"/><stop offset=".49" stop-color="#f2f2f3"/></linearGradient><path fill="url(#gm-icon-coins-SVGID_2_)" stroke="#0f4470" stroke-width="3" d="M105 56.8L93.4 61l-12.2-4.2V70.1l12.2 5.3 11.6-5.3V56.8L93.1 52l-12.5 4.4"/><path class="gm-icon-coins-st13" d="M160.8 60.2v14.6"/><linearGradient id="gm-icon-coins-SVGID_3_" gradientUnits="userSpaceOnUse" x1="148.03" y1="84.89" x2="172.38" y2="84.89" gradientTransform="matrix(1 0 0 -1 0 148)"><stop offset=".48" stop-color="#fff"/><stop offset=".49" stop-color="#f2f2f3"/></linearGradient><path fill="url(#gm-icon-coins-SVGID_3_)" stroke="#0f4470" stroke-width="3" d="M172.4 56.2l-11.6 4.3-12.2-4.3V69.5l12.2 5.3 11.6-5.3V56.2l-11.9-4.7-12.5 4.3"/><path class="gm-icon-coins-st13" d="M127.2 77.7v14.5"/><path fill="#fcba63" stroke="#0f4470" stroke-width="3" d="M138.8 73.7l-11.6 4.2-12.2-4.2v13.2l12.2 5.3 11.6-5.3V73.7l-11.9-4.8-12.5 4.3"/><path class="gm-icon-coins-st13" d="M127.2 115.1v14.6"/><linearGradient id="gm-icon-coins-SVGID_4_" gradientUnits="userSpaceOnUse" x1="114.42" y1="29.96" x2="138.77" y2="29.96" gradientTransform="matrix(1 0 0 -1 0 148)"><stop offset=".48" stop-color="#fff"/><stop offset=".49" stop-color="#f2f2f3"/></linearGradient><path fill="url(#gm-icon-coins-SVGID_4_)" stroke="#0f4470" stroke-width="3" d="M138.8 111.2l-11.6 4.2-12.2-4.2v13.2l12.2 5.3 11.6-5.3V111.2l-11.9-4.8-12.5 4.3"/><path class="gm-icon-coins-st13" d="M93.4 95.8v14.6"/><linearGradient id="gm-icon-coins-SVGID_5_" gradientUnits="userSpaceOnUse" x1="80.64" y1="49.295" x2="104.99" y2="49.295" gradientTransform="matrix(1 0 0 -1 0 148)"><stop offset=".48" stop-color="#fff"/><stop offset=".49" stop-color="#f2f2f3"/></linearGradient><path fill="url(#gm-icon-coins-SVGID_5_)" stroke="#0f4470" stroke-width="3" d="M105 91.8l-11.6 4.3-12.2-4.3V105.1l12.2 5.3 11.6-5.3V91.8L93.1 87l-12.5 4.4"/><path class="gm-icon-coins-st13" d="M160.8 95.8v14.6"/><linearGradient id="gm-icon-coins-SVGID_6_" gradientUnits="userSpaceOnUse" x1="148.03" y1="49.295" x2="172.38" y2="49.295" gradientTransform="matrix(1 0 0 -1 0 148)"><stop offset=".48" stop-color="#fff"/><stop offset=".49" stop-color="#f2f2f3"/></linearGradient><path fill="url(#gm-icon-coins-SVGID_6_)" stroke="#0f4470" stroke-width="3" d="M172.4 91.8l-11.6 4.3-12.2-4.3V105.1l12.2 5.3 11.6-5.3V91.8L160.5 87 148 91.4"/><path class="gm-icon-coins-st13" d="M105 56.8l10-8.6M148 55.8l-9.2-7.6M160.8 74.8v12.9M93.4 75.7v12M115 111.2l-10-6.1M138.8 110.4l9.8-5.3M127.2 53.5v15.4M127.2 92.2v14.2"/><circle class="gm-icon-coins-st2" cx="11.9" cy="50.2" r="2.6"/><path class="gm-icon-coins-st3" d="M74.8 145l-1.3-4.1-4.1-1.3 4.1-1.3 1.3-4.1 1.3 4.1 4.1 1.3-4.1 1.3z"/><path class="gm-icon-coins-st4" d="M133.8 10.9l-1.2-4.2-4.2-1.3 4.2-1.2 1.2-4.2 1.3 4.2 4.2 1.2-4.2 1.3z"/><path class="gm-icon-coins-st5" d="M54.7 89.1l-1.3-4.2-4.1-1.2 4.1-1.3 1.3-4.2 1.3 4.2 4.1 1.3-4.1 1.2z"/><path class="gm-icon-coins-st6" d="M63.4 47.4c.6 0 1 .4 1.1 1v4.3c.1.6-.4 1.1-1 1.2-.6.1-1.1-.4-1.2-1v-4.4c0-.6.4-1 .9-1 .1-.1.1-.1.2-.1zM63.4 34.8c.6 0 1.1.5 1.1 1.1V40c-.1.6-.6 1-1.2 1-.5 0-.9-.4-1-1v-4.2c0-.6.5-1 1.1-1zM54.9 43.2h4.2c.6-.1 1.1.4 1.2 1 .1.6-.4 1.1-1 1.2h-4.4c-.6-.1-1-.6-1-1.2.1-.5.5-.9 1-1zM67.6 43.2h4.2c.6-.1 1.1.4 1.2 1s-.4 1.1-1 1.2h-4.4c-.6.1-1.1-.4-1.2-1s.4-1.1 1-1.2h.2z"/><circle class="gm-icon-coins-st6" cx="63.4" cy="44.3" r="1.1"/><path class="gm-icon-coins-st7" d="M175.4 136.6v-4.2M175.4 123.9v-4.2M166.9 128.2h4.3M179.6 128.2h4.2"/><circle class="gm-icon-coins-st3" cx="175.4" cy="128.2" r="1.1"/><path class="gm-icon-coins-st8" d="M89.2 19.1c.7 0 1.2-.5 1.2-1.2s-.5-1.2-1.2-1.2-1.2.5-1.2 1.2.5 1.2 1.2 1.2zM48.6 69.9v.1c0 .3.3.5.6.5s.5-.2.5-.5v-.2c0-.3-.3-.5-.6-.5-.3.1-.5.3-.5.6zM44 65.7c.2.1.3.1.4 0h.1c.2-.1.3-.4.2-.6-.1-.2-.4-.3-.6-.2-.2.1-.3.4-.2.6 0 .1 0 .1.1.2z"/><path class="gm-icon-coins-st5" d="M224.4 59.3c.9-.1 1.5-.8 1.5-1.7-.1-.8-.7-1.4-1.5-1.5-.9.1-1.5.8-1.5 1.7.1.8.7 1.5 1.5 1.5z"/><path class="gm-icon-coins-st8" d="M196.2 87.5l.1.1c.8.4 1.7.1 2.1-.6.3-.5.3-1 0-1.5l-.1-.1c-.4-.8-1.4-1-2.2-.6s-1 1.4-.6 2.2c.3.1.5.3.7.5z"/><path class="gm-icon-coins-st3" d="M193.4 110.3c.2-.8.7-1.5 1.3-2 1.6-1.2 3.9-.9 5.2.7.6.8.9 1.8.7 2.7-.3 2-2.2 3.4-4.2 3.1-1.9-.3-3.3-2.1-3.1-4.1 0-.1.1-.2.1-.4zm5.1 1.3v-.2c.1-.4-.1-.8-.3-1.2-.5-.7-1.5-.8-2.2-.3-.7.5-.8 1.5-.3 2.2.5.7 1.5.8 2.2.3.3-.1.5-.4.6-.8z"/><circle class="gm-icon-coins-st9" cx="50.6" cy="112.4" r="2.6"/><path class="gm-icon-coins-st7" d="M205.9 52.6v-4.3M205.9 39.9v-4.2M197.5 44.1h4.2M210.1 44.1h4.3"/><circle class="gm-icon-coins-st4" cx="205.9" cy="44.1" r="1.1"/><path class="gm-icon-coins-st6" d="M205.9 53.6c.6 0 1.1-.5 1.1-1v-2h-2.1v2c0 .5.4 1 1 1z"/></g></svg></span>
                                          <strong class="reveal">Offering 10+ minable cryptocurrencies through 6 major mining algorithms</strong>
                                        </div>
                                      </div>

                                      <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-0">
                                        <div>
                                          <span class="reveal"><svg id="gm-icon-transactions" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 254.1 157.6"><style>.gm-icon-transactions-st1{fill:#0f4470}.gm-icon-transactions-st2{fill:#9fd3f2;stroke:#faa934;stroke-width:2;stroke-miterlimit:10}.gm-icon-transactions-st3{fill:#8bc9ed}.gm-icon-transactions-st4{fill:#fbb147}.gm-icon-transactions-st5{fill:#faa934}.gm-icon-transactions-st6{fill:#104470}.gm-icon-transactions-st7{fill:none;stroke:#8bc9ed;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10}.gm-icon-transactions-st8{fill:#094b7c}.gm-icon-transactions-st9{fill:none;stroke:#8bc9ed;stroke-width:2;stroke-miterlimit:10}.gm-icon-transactions-st10{fill:#e8eef1}.gm-icon-transactions-st11{fill:#fff}.gm-icon-transactions-st14{fill:#fcba63}.gm-icon-transactions-st16{fill:#fff;stroke:#0f4470;stroke-width:3}</style><symbol id="Arrow_26" viewBox="-33.4 -13.1 66.7 26.3"><path fill="none" d="M-33.4-13.1h66.7v26.3h-66.7z"/><path class="gm-icon-transactions-st1" d="M-27.8 6.1h38.3v5.1l13.2-9.9-13.2-9.9v5.1h-38.3z"/></symbol><g id="Layer_22"><circle class="gm-icon-transactions-st2" cx="11.1" cy="50.2" r="2.6"/><path class="gm-icon-transactions-st3" d="M74 145l-1.2-4.1-4.2-1.3 4.2-1.3 1.2-4.1 1.3 4.1 4.2 1.3-4.2 1.3z"/><path class="gm-icon-transactions-st4" d="M133.1 10.9l-1.3-4.2-4.2-1.3 4.2-1.2 1.3-4.2 1.2 4.2 4.2 1.2-4.2 1.3z"/><path class="gm-icon-transactions-st5" d="M53.9 89.1l-1.3-4.2-4.1-1.2 4.1-1.3 1.3-4.2 1.3 4.2 4.2 1.3-4.2 1.2z"/><path class="gm-icon-transactions-st6" d="M62.6 47.4c.6 0 1 .4 1 1v4.3c.1.6-.4 1.1-1 1.2-.6.1-1.1-.4-1.2-1v-4.4c.1-.6.6-1.1 1.2-1.1zM62.6 34.8c.6 0 1.1.5 1.1 1V40c-.1.6-.6 1-1.2 1-.5 0-.9-.4-1-1v-4.2c0-.6.5-1 1.1-1zM54.1 43.2h4.2c.6-.1 1.1.4 1.2 1 .1.6-.4 1.1-1 1.2h-4.4c-.6-.1-1-.6-1-1.2.1-.5.5-.9 1-1zM66.8 43.2H71c.6.1 1 .6 1 1.2 0 .5-.4.9-1 1h-4.2c-.6.1-1.1-.4-1.2-1s.4-1.1 1-1.2h.2z"/><circle class="gm-icon-transactions-st6" cx="62.6" cy="44.3" r="1.1"/><path class="gm-icon-transactions-st7" d="M174.6 136.6v-4.2M174.6 123.9v-4.2M166.2 128.2h4.2M178.8 128.2h4.3"/><circle class="gm-icon-transactions-st3" cx="174.6" cy="128.2" r="1.1"/><path class="gm-icon-transactions-st8" d="M88.4 19.1c.7 0 1.2-.5 1.2-1.2s-.5-1.2-1.2-1.2-1.2.5-1.2 1.2.6 1.2 1.2 1.2zM47.8 69.9v.1c0 .3.3.6.6.6s.6-.3.6-.6v-.2c0-.3-.3-.6-.6-.6-.4.1-.6.3-.6.7zM43.2 65.7c.2.1.3.1.4 0h.1c.2-.1.3-.4.2-.6s-.4-.3-.6-.2c-.3.1-.4.4-.3.6l.2.2z"/><path class="gm-icon-transactions-st5" d="M223.6 59.3c.9-.1 1.5-.8 1.5-1.7-.1-.8-.7-1.4-1.5-1.5-.9.1-1.5.8-1.5 1.7.1.8.8 1.5 1.5 1.5z"/><path class="gm-icon-transactions-st8" d="M195.4 87.5l.1.1c.8.4 1.7.1 2.1-.6.3-.5.3-1 0-1.5l-.1-.1c-.4-.8-1.4-1-2.2-.6s-1 1.4-.6 2.2c.3.1.5.3.7.5z"/><path class="gm-icon-transactions-st3" d="M192.6 110.3c.2-.8.7-1.5 1.3-2 1.6-1.2 3.9-.9 5.2.7.6.8.8 1.7.7 2.7-.3 2-2.2 3.4-4.2 3.1-1.9-.3-3.3-2.1-3.1-4.1.1-.1.1-.2.1-.4zm5.1 1.3v-.2c.1-.4-.1-.8-.3-1.2-.5-.7-1.5-.8-2.2-.3-.3.3-.5.6-.6 1-.1.9.5 1.7 1.4 1.7.8.3 1.5-.2 1.7-1z"/><circle class="gm-icon-transactions-st9" cx="49.8" cy="112.4" r="2.6"/><path class="gm-icon-transactions-st7" d="M205.1 52.6v-4.3M205.1 39.9v-4.2M196.7 44.1h4.2M209.4 44.1h4.2"/><circle class="gm-icon-transactions-st4" cx="205.1" cy="44.1" r="1.1"/><path class="gm-icon-transactions-st6" d="M205.1 53.6c.6 0 1.1-.5 1.1-1v-2h-2.1v2c0 .6.4 1 .9 1.1l.1-.1z"/><circle class="gm-icon-transactions-st10" cx="128.6" cy="85.3" r="70.3"/><path class="gm-icon-transactions-st10" d="M78.4 133.6H35.1c-4.7 0-8.5-3.8-8.5-8.5V118c0-4.7 3.8-8.5 8.5-8.5h43.3c4.7 0 8.5 3.8 8.5 8.5v7.1c0 4.7-3.8 8.5-8.5 8.5zM85.9 85.3H44.2c-4.7 0-8.5-3.8-8.5-8.5v-7.1c0-4.7 3.8-8.5 8.5-8.5H86c4.7 0 8.5 3.8 8.5 8.5v7.1c-.1 4.7-3.9 8.5-8.6 8.5z"/><path class="gm-icon-transactions-st11" d="M93.4 109.5H45.2c-4.7 0-8.5-3.8-8.5-8.5v-7.1c0-4.7 3.8-8.5 8.5-8.5h48.3c4.7 0 8.5 3.8 8.5 8.5v7.1c-.1 4.6-3.9 8.5-8.6 8.5zM69.4 61.2H21.1c-4.7 0-8.5-3.8-8.5-8.5v-7.1c0-4.7 3.8-8.5 8.5-8.5h48.3c4.7 0 8.5 3.8 8.5 8.5v7.1c-.1 4.7-3.9 8.5-8.5 8.5z"/><path class="gm-icon-transactions-st10" d="M169.2 37.1h47.3c4.7 0 8.5 3.8 8.5 8.5v7.1c0 4.7-3.8 8.5-8.5 8.5h-47.3c-4.7 0-8.5-3.8-8.5-8.5v-7.1c0-4.7 3.8-8.5 8.5-8.5zM160.2 85.3h43.3c4.7 0 8.5 3.8 8.5 8.5v7.1c0 4.7-3.8 8.5-8.5 8.5h-43.3c-4.7 0-8.5-3.8-8.5-8.5v-7.1c0-4.6 3.8-8.5 8.5-8.5z"/><path class="gm-icon-transactions-st11" d="M185.3 61.2H225c4.7 0 8.5 3.8 8.5 8.5v7.1c0 4.7-3.8 8.5-8.5 8.5h-39.8c-4.7 0-8.5-3.8-8.5-8.5v-7.1c.1-4.7 3.9-8.5 8.6-8.5z"/><path class="gm-icon-transactions-st10" d="M245.6 109.5h-15.1c-4.7 0-8.5-3.8-8.5-8.5v-7.1c0-4.7 3.8-8.5 8.5-8.5h15.1c4.7 0 8.5 3.8 8.5 8.5v7.1c0 4.6-3.8 8.5-8.5 8.5zM12.1 61.2h4c6.7 0 12.1 5.4 12.1 12 0 6.7-5.4 12.1-12.1 12.1h-4C5.4 85.4 0 80 0 73.3s5.4-12.1 12.1-12.1z"/><path class="gm-icon-transactions-st11" d="M150.6 37.1h19.2c4.7 0 8.5 3.8 8.5 8.5v7.1c0 4.7-3.8 8.5-8.5 8.5h-19.2c-4.7 0-8.5-3.8-8.5-8.5v-7.1c0-4.7 3.8-8.5 8.5-8.5zM117 61.2h19.2c4.7 0 8.5 3.8 8.5 8.5v7.1c0 4.7-3.8 8.5-8.5 8.5H117c-4.7 0-8.5-3.8-8.5-8.5v-7.1c0-4.7 3.8-8.5 8.5-8.5zM159.2 109.4H200c4.7 0 8.5 3.8 8.5 8.5v7.1c0 4.7-3.8 8.5-8.5 8.5h-40.8c-4.7 0-8.5-3.8-8.5-8.5v-7.1c0-4.6 3.8-8.5 8.5-8.5z"/><circle class="gm-icon-transactions-st2" cx="238.6" cy="109.9" r="2.5"/><path class="gm-icon-transactions-st3" d="M178.9 19.7l1.2 3.9 3.9 1.3-3.9 1.2-1.2 3.9-1.3-3.9-3.9-1.2 3.9-1.3z"/><path class="gm-icon-transactions-st4" d="M122.6 147.2l1.2 4 4 1.2-4 1.2-1.2 4-1.2-4-4-1.2 4-1.2z"/><path class="gm-icon-transactions-st5" d="M197.9 72.9l1.3 4 3.9 1.2-3.9 1.2-1.3 3.9-1.2-3.9-3.9-1.2 3.9-1.2z"/><path class="gm-icon-transactions-st6" d="M189.7 112.5c-.6 0-1-.4-1-1v-4c0-.6.4-1 1-1s1 .4 1 1v4c0 .6-.5 1-1 1zM189.7 124.6c-.6 0-1-.4-1-1v-4c0-.6.4-1 1-1s1 .4 1 1v4c0 .5-.5 1-1 1zM197.7 116.5h-4c-.6 0-1-.4-1-1s.4-1 1-1h4c.6 0 1 .4 1 1s-.5 1-1 1zM185.6 116.5h-4c-.6 0-1-.4-1-1s.4-1 1-1h4c.6 0 1 .4 1 1s-.4 1-1 1z"/><circle class="gm-icon-transactions-st6" cx="189.7" cy="115.5" r="1"/><path class="gm-icon-transactions-st7" d="M87.2 13.1v4M87.2 25.1v4.1M95.2 21.1h-4M83.2 21.1h-4"/><circle class="gm-icon-transactions-st3" cx="87.2" cy="21.1" r="1"/><path class="gm-icon-transactions-st8" d="M165.1 141.8c.7 0 1.2-.5 1.2-1.2s-.5-1.2-1.2-1.2-1.2.5-1.2 1.2.5 1.2 1.2 1.2zM203.8 91.2V91c0-.3-.3-.6-.6-.6s-.6.3-.6.6v.2c0 .3.3.6.6.6.3-.1.6-.3.6-.6zM208.1 95.2c-.2-.1-.3-.1-.4 0h-.1c-.2.1-.3.4-.2.6s.4.3.6.2.3-.4.2-.6c.1-.2 0-.2-.1-.2z"/><path class="gm-icon-transactions-st5" d="M36.5 104.2c.9-.1 1.5-.8 1.5-1.7-.1-.8-.7-1.4-1.5-1.5-.9.1-1.5.8-1.5 1.7.1.8.7 1.4 1.5 1.5z"/><path class="gm-icon-transactions-st8" d="M63.4 74.3c-.9-.5-1.8-.2-2.2.6-.3.5-.3 1 0 1.5v.1c.4.8 1.4 1 2.2.6.8-.4 1-1.4.6-2.2-.2-.3-.4-.5-.6-.6z"/><path class="gm-icon-transactions-st3" d="M66 52.6c-.2.8-.6 1.4-1.3 1.9-1.5 1.2-3.7.9-4.9-.6-.6-.7-.8-1.7-.7-2.6.3-1.9 2-3.3 4-3 1.9.3 3.3 2 3 4 0 0-.1.2-.1.3zm-4.9-1.3v.2c-.1.8.4 1.6 1.2 1.7.4.1.8 0 1.1-.3.7-.5.8-1.4.3-2.1-.5-.7-1.4-.8-2.1-.3-.1.2-.3.5-.5.8z"/><circle class="gm-icon-transactions-st9" cx="201.9" cy="50.7" r="2.5"/><path class="gm-icon-transactions-st7" d="M54.1 107.5v4M54.1 119.6v4M62.1 115.5h-4M50 115.5h-4"/><circle class="gm-icon-transactions-st4" cx="54.1" cy="115.5" r="1"/><path class="gm-icon-transactions-st6" d="M54.1 106.5c-.6 0-1 .4-1 1v1.9h2v-1.9c0-.5-.5-1-1-1z"/><path d="M136.7 55.9l.5.1c6.7 1.3 12.7 5.2 16.5 10.9 7.9 11.5 4.9 27.2-6.6 35.1-.2.1-.3.2-.5.3-11.9 7.8-27.9 4.6-35.9-7.2-5.4-7.9-5.9-18.3-1.2-26.6l2.8 1.5c-4.1 7.3-3.7 16.4 1 23.3 3.4 5 8.6 8.4 14.5 9.6 5.9 1.2 12 0 17-3.3 10.2-6.7 13.1-20.4 6.4-30.6-.1-.1-.2-.2-.2-.4-6-8.7-17.1-12.2-27-8.6l-1.2-3c4.5-1.5 9.3-1.9 13.9-1.1z" opacity=".6" fill="#9bbfd0"/><use xlink:href="#Arrow_26" width="66.7" height="26.3" x="-33.4" y="-13.1" transform="matrix(.68 0 0 .67 146.325 59.014)" overflow="visible"/><use xlink:href="#Arrow_26" width="66.7" height="26.3" x="-33.4" y="-13.1" transform="matrix(-.67 0 0 .67 113.309 102.524)" overflow="visible"/><linearGradient id="gm-icon-transactions-SVGID_1_" gradientUnits="userSpaceOnUse" x1="104.875" y1="79.145" x2="153.495" y2="79.145" gradientTransform="matrix(1 0 0 -1 0 160)"><stop offset=".67" stop-color="#fff"/><stop offset=".68" stop-color="#f2f2f3"/></linearGradient><path d="M128.7 105.2c-13.4-.3-24.1-11.4-23.8-24.8s11.4-24.1 24.8-23.8 24.1 11.4 23.8 24.8c-.3 13.4-11.4 24-24.8 23.8z" fill="url(#gm-icon-transactions-SVGID_1_)" stroke="#0f4470" stroke-width="3"/><path class="gm-icon-transactions-st1" d="M142.7 58.8l.4.3c12 7.7 15.5 23.8 7.7 35.8s-23.8 15.5-35.8 7.7-15.5-23.8-7.7-35.8c1.5-2.3 3.2-4.3 5.3-6l2 2.5c-1.8 1.5-3.4 3.3-4.7 5.3-6.8 10.5-3.7 24.6 6.9 31.3s24.6 3.7 31.3-6.9 3.7-24.6-6.9-31.3c-3.6-2.3-7.7-3.5-12-3.6v-3.2c4.9.1 9.5 1.4 13.5 3.9z"/><path class="gm-icon-transactions-st1" d="M122.6 55.8l.8 3.1c-1.7.5-3.4 1.1-5 2l-1.5-2.9c1.8-1 3.7-1.7 5.7-2.2z"/><path class="gm-icon-transactions-st14" d="M129.2 65.6h2.9v5.1h-2.9zM124.5 65.6h2.9v5.1h-2.9zM126.1 80.1h5.7c3.9-.1 7.2 2.9 7.4 6.9.1 3.9-2.9 7.2-6.9 7.4h-11.4v-3.7h10.9c1.9.1 3.5-1.4 3.6-3.3.1-1.9-1.4-3.5-3.3-3.6H126"/><path class="gm-icon-transactions-st14" d="M121.5 69.2h3.2V94H121V69.2l.2-.1h10.4c4.1.1 7.2 3.6 7.1 7.6-.1 3.9-3.2 6.9-7.1 7.1h-8.1V80h8.1c2-.1 3.5-1.8 3.4-3.7-.1-1.8-1.5-3.3-3.4-3.4h-10.5M129.2 92.8h2.9v5.1h-2.9z"/><path class="gm-icon-transactions-st14" d="M124.5 92.8h2.9v5.1h-2.9z"/><path d="M88.2 52.7c-18.3 21.8-15.5 54.2 6.3 72.5s54.2 15.5 72.5-6.3c16.1-19.1 16.1-47 .1-66.1" fill="none" stroke="#0f4470" stroke-width="3"/><path class="gm-icon-transactions-st16" d="M166.5 52.9s-11.9-1.4-5.4-17.3c0 0 15.9 8.3 5.4 17.3zM144.1 132.9s-8.7-7.8 5.7-14.7c0 0 7.9 14.8-5.7 14.7zM176.3 75.7s-9.7 6.5-12.8-9.2c-.1 0 16.2-4 12.8 9.2zM163.7 120.8s-11.7-.6-4.7-15c0-.1 15.4 6.5 4.7 15zM175.2 102.3s-10.6 5-11.3-11c0 0 16.7-1.5 11.3 11zM173.3 62.5s-6.3-9.8 9.4-12.6c.1-.1 3.7 16.3-9.4 12.6zM179.2 95.6s-5.6-10.3 10.3-11.9c0-.1 2.5 16.5-10.3 11.9z"/><path class="gm-icon-transactions-st16" d="M167.6 118.9s2.4-11.5 15.6-2.4c0-.1-8.8 14.2-15.6 2.4zM143.9 136.2s5.6-10.3 15.6 2.2c0 0-12.5 11-15.6-2.2zM88.2 52.9s11.9-1.4 5.5-17.3c0 0-16 8.4-5.5 17.3zM110.4 133s8.8-7.8-5.7-14.7c0 0-7.9 14.8 5.7 14.7zM78.4 75.7s9.7 6.5 12.8-9.2c0 .1-16.2-3.9-12.8 9.2zM90.8 120.8s11.7-.6 4.8-15c0 0-15.4 6.5-4.8 15zM79.4 102.3s10.6 5 11.3-11c0 .1-16.6-1.5-11.3 11zM81.3 62.5s6.3-9.8-9.4-12.6c0-.1-3.7 16.3 9.4 12.6zM75.4 95.6s5.6-10.3-10.3-12c0 0-2.5 16.6 10.3 12z"/><path class="gm-icon-transactions-st16" d="M86.9 118.9s-2.3-11.5-15.6-2.4c.1-.1 8.9 14.2 15.6 2.4zM110.6 136.3s-5.5-10.3-15.6 2.1c0 0 12.5 11.1 15.6-2.1z"/></g></svg></span>
                                          <strong class="reveal">Conducted over 100 million transactions since our founding in 2013</strong>
                                        </div>
                                      </div> -->
                                    </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </div>

                            <div id="gm-aboutus-2"  data-aos="flip-right" data-aos-duration="1500">
                              <div class="container">
                                <div class="row">
                                  <div class="col-md-10 col-md-offset-1">
                                    <span>Vision & Mission</span>
                                    <h2>Making mining accessible to everyone</h2>
                                    <div class="row">
                                      <div class="col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2">
                                        <p>Cryptobitnet is one of the leading hashpower providers in the world, offering cryptocurrency mining capacities in every range - for newcomers, interested home miners, as well as large scale investors. Our mission is to make acquiring cryptocurrencies easy and fast for everyone.</p>
                                      </div>
                                      <div class="col-sm-5 col-md-4">
                                        <p>We provide a multi-algorithm, multi-coin cloud mining service using the latest technology - without any pool fees. The ultimate goal of our existence is to make cryptocurrency mining an easy, smart and rewarding experience for all. Our services already attracted more than 10,000 people - We’d be happy to serve you as well!</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="gm-aboutus-5" style="background-image: url(img/about-us-5.jpg);background-position:50% 0;background-repeat: no-repeat;">
                              <div class="container">
                                <div class="row">
                                  <div class="col-lg-8 col-lg-offset-2">
                                    <span>Hashpower Locations</span>
                                    <h2>Our mining farms</h2>
                                    <p style="color: white;">Disclaimer: The displayed datacenters represent only a fraction of the mining operations we own. Since security and customer protection are our highest priorities, not all data centers are shown. Nevertheless, we are able to take footage and set up live feeds at low-risk locations and we do so without disclosing sensitive information or critical intellectual property.</p>
                                  </div>
                                </div>
                              </div>

                              <picture class="background-image">
                                <!--[if IE 9]><video style="display: none;"><![endif]-->
                                <source srcset="img/about-us-5.jpg">
                                <!--[if IE 9]></video><![endif]-->
                                <img src="img/about-us-5.jpg" alt="The World’s Leading Hashpower Provider" title="The World’s Leading Hashpower Provider" />
                              </picture>
                            </div>

                            <div class="container">
                              <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                  <div class="map-box">

                                    <div class="enigma-box">
                                      <div id="enigma-panorama"></div>
                                      <i class="gm-icon-close show-enigma show-map-info"></i>
                                    </div>
                                    <div class="thor-box">
                                      <div id="thor-panorama"></div>
                                      <i class="gm-icon-close show-thor show-map-info"></i>
                                    </div>

                                    <div class="map-info">
                                      <div class="map-location">
                                        <h3>Iceland<i class="gm-icon-map-marker"></i></h3>
                                        <ul>
                                          <li><b>Farm name:</b> Enigma</li>
                                          <li><b>Established:</b> 2014</li>
                                          <li><b>Resources:</b> Geothermal energy</li>
                                          <li><b class="show-enigma show-map-info">Look around 360०</b></li>
                                         </ul>
                                      </div>
                                      <div class="map-location">
                                        <h3>Sweden<i class="gm-icon-map-marker"></i></h3>
                                        <ul>
                                          <li><b>Farm name:</b> Thor</li>
                                          <li><b>Established:</b> 2018</li>
                                          <li><b>Resources:</b> Geology</li>
                                          <li><b class="show-thor show-map-info">Look around 360०</b></li>
                                         </ul>
                                      </div>
                                      <i class="gm-icon-close show-map-info"></i>
                                    </div>

                                    <picture class="map show-map-info">
                                      <!--[if IE 9]><video style="display: none;"><![endif]-->
                                      <source media="(max-width: 479px)" srcset="img/about-us-map@480px.jpg">
                                      <source media="(max-width: 767px)" srcset="img/about-us-map@768px.jpg">
                                      <source media="(max-width: 1200px)" srcset="img/about-us-map@1200px.jpg">
                                      <source media="(max-width: 1679px)" srcset="img/about-us-map@1680px.jpg">
                                      <source media="(min-width: 1680px)" srcset="img/about-us-map.jpg">
                                      <!--[if IE 9]></video><![endif]-->
                                      <img src="img/about-us-map.jpg" alt="Datacenters map" title="Datacenters map" />
                                    </picture>

                                  </div>
                                </div>
                              </div>
                            </div>





                                </div>

            </div>


             <div id="gm-home-5">
                <div class="container">
                    <div class="row">
                        <h3 class="text-center" id="mining">WHY MINING</h3>
                        <div id="what-is-mining" class="gm-why-mining-2"
  style="background-image:url(/img/Version3/why-mining/gm-why-mining-2.jpg);background-position:50% 100%;background-repeat: no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-md-1 col-lg-2">

        <div class="main-slide-indicator">
          <div><b>1</b> <span></span></div>
          <div><b>2</b> <span></span></div>
          <div><b>3</b> <span></span></div>
          <div><b>4</b> <span></span></div>

        </div>
      </div>

      <div class="col-md-11 col-lg-10">
        <div class="main-slide">
          <div>
            <div class="slide-text">
              <h1>Why is mining<br /> so important?</h1>
              <strong>Cryptocurrency networks need computational power to run securely. There world’s most powerful blockchains are supported by millions of computers around the world.</strong>
              <p>
                Unlike paper money, Bitcoin and other cryptocurrencies are produced mathematically and held digitally. The people who voluntarily offer their computing power  to secure these cryptocurrency networks are called Miners.

Cryptocurrencies don’t have a central government or other so called 'middlemen' that decide about the future of the system. They are in fact digital, borderless democracies in which miners vote with their computing power to reach order and consensus.</p>
            </div>
            <div class="slide-infographic">
              <div class="slide-stats">
                200.000
                <span>Avg. Daily Bitcoin Transactions</span>
              </div>
              <img class="photo" src="img/slide-1-1.jpg"
                alt="Why is mining so important?"
                title="Why is mining so important?" />
              <img class="infograph-1" src="img/slide-1-2.png"
                alt="Why is mining so important?"
                title="Why is mining so important?" />
            </div>
            <div clear="clearfix"></div>
          </div>

          <!-- <div>
            <div class="slide-text">
              <h1>Why is mining<br /> so important?</h1>
              <strong>Cryptocurrency networks need computational power to run securely.                The world’s most powerful blockchains are supported by millions of computers around the world.</strong>
              <p>
                Unlike paper money, Bitcoin and other cryptocurrencies are produced mathematically and held digitally.                The people who voluntarily offer their computing power to secure these cryptocurrency networks are called miners.                Cryptocurrencies don’t have a central government or other so-called ‘middlemen’ that decide about the future of the system.                –
                They are in fact digital, borderless democracies in which miners vote with their computing power to reach order and consensus.              </p>
            </div>
            <div class="slide-infographic">
              <div class="slide-stats">
                307.760
                <span>Avg. Daily Bitcoin Transactions</span>
              </div>
              <img class="photo" src="img/slide-1-1.jpg"
                alt="Why is mining so important?"
                title="Why is mining so important?" />
              <img class="infograph-1" src="img/slide-1-2.png"
                alt="Why is mining so important?"
                title="Why is mining so important?" />
            </div>
            <div clear="clearfix"></div>
          </div> -->

          <div>
            <div class="slide-text">
              <h1>How is Bitcoin kept secure?</h1>
              <strong>The only way to not  create money out of thin air or corrupt it, is to burn real energy. This is called Proof- of- work.</strong>
              <p>
                Today, Bitcoin is the most secured computer network on the planet and its practically impossible to break it! The reason for that is Hash power, The umbrella term used for  the computing power that miners provide to the Bitcoin network and similar cryptocurrency networks, Due to the rapid growth of the ecosystem, mining operations today are mostly running specialized high performance computer that function most efficiently set up  in large data centers. </p>
            </div>
            <div class="slide-infographic">
              <div class="slide-stats">
                >43.000
                <span>Current hashrate in Ehash/s</span>
              </div>
              <img class="photo" src="img/slide-2-1.jpg"
                alt="What’s the incentive for miners?"
                title="What’s the incentive for miners?" />
              <img class="infograph-2" src="img/slide-2-2.png"
                alt="What’s the incentive for miners?"
                title="What’s the incentive for miners?" />
            </div>
            <div clear="clearfix"></div>
          </div>

          <div>
            <div class="slide-text">
              <h1>What’s the incentive for miners?</h1>
              <strong>It all comes  down to trust: Miners keep the Blockchains trustworthy and are rewarded for their efforts.</strong>
              <p>
                As miners, we are processing and verifying the transactions of the cryptocurrency ecosystems and keeping their public transaction history (=blockchain) maintained and secured. For this, The mining community is rewarded with the networks’ transaction fees and newly created coins. It’s a win-win situation: when you start mining with us, You are getting your share of this reward. </p>
            </div>
            <div class="slide-infographic">
              <div class="slide-stats">
                1.800
                <span>of Bitcoins mined per day</span>
              </div>
              <img class="photo" src="img/slide-3-1.jpg"
                alt="How is Bitcoin kept secure?"
                title="How is Bitcoin kept secure?" />
              <img class="infograph-3" src="img/slide-3-2.png"
                alt="How is Bitcoin kept secure?"
                title="How is Bitcoin kept secure?" />
            </div>
            <div clear="clearfix"></div>
          </div>

          <div>
            <div class="slide-text">
              <h1>The big vision of cryptocurrency.</h1>
              <strong>The future will be decentralized.</strong>
              <p>
                To keep the integrity ( and values!) of all Cryptocurrency ecosystems intact, miners keep the networks safe and its authority decentralized by keeping each other constantly in check. This allows both a healthy growth and a fair distribution of currency units of all crypto- citizens! </p>
              <!-- <a href="#" class="btn btn-enigma-a"
                title="How we are streamlining this process!">How we are streamlining this process!</a> -->
            </div>
            <div class="slide-infographic">
              <div class="slide-stats">
                >3 Years                <span>Current 24/7 runtime of the bitcoin network</span>
              </div>
              <img class="photo" src="img/slide-4-1.jpg"
                title="The big vision of Cryptocurrency" />
              <img class="infograph-4" src="img/slide-4-2.png"
                alt="The big vision of Cryptocurrency"
                title="The big vision of Cryptocurrency" />
            </div>
            <div clear="clearfix"></div>
          </div>



         </div>
        </div>

      </div>
    </div>
  </div>




</div>
  </div>



                </div>

                <div id="why-us" class="gm-why-mining-3"
                style="background-image:url(img/why-mining-bg.jpg);background-position:50% 0;background-repeat: no-repeat;">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <h1 data-aos="fade-down" data-aos-duration="1000">Why CryptoBitNet?</h1>
                      <h2 data-aos="fade-down" data-aos-duration="1300">We are making mining accessible to everyone.</h2>
                      <div class="clearfix"></div>
                      <p style="color: white !important;" data-aos="fade-down" data-aos-duration="1500">We are uniting all key aspects of running and efficient cryptocurrency mining operation. From building highly efficient data centers to providing a streamlined mining system for  our users.</p>
                    </div>
                    <div class="col-md-12 col-lg-10 col-lg-offset-1">
                      <div class="row">
                        <div class="col-sm-4">
                          <div>
                            <h3>We make mining competitive.</h3>
                            <p>
                              To mine competitively today, You need to invest significant resources, A little bit of your time and effort into your setup. Our team has built  the most efficient mining system to do the job for you. This way you can fully focus on keeping track of your investment and remain competitive with your mining rewards.</p>
                            <a href="datacenters.html" title="See our Radiant Tech"
                              class="btn btn-why-a">See our Radiant Tech</a>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div>
                            <h3>Contributing to the ecosystem.</h3>
                            <p>
                              Besides being the portal for interesting mining data, we are also actively contributing to the cryptocurrency ecosystem, from launching awareness campaigns to releasing open-source mining software.</p>
                            <a title="See our Contributions"
                              class="btn btn-why-a" target="_blank" rel="noreferrer">See our Contributions</a>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div>
                            <h3>Multi-algorithm support.</h3>
                            <p>
                              We are building mining data center around the world that are able to support mining algorithms for different cryptocurrencies.</p>
                            <a href="/register" title="See our Packages"
                              class="btn btn-why-a">See our Packages</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



                <div id="features" class="gm-why-mining-4">
                  <div class="container">
                    <div class="row">
                      <h1>Features</h1>

                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="row">
                          <div class="col-xs-6 col-sm-6" data-aos="fade-down" data-aos-duration="1200">
                            <div>
                              <span class="reveal reveal-650"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 253.31 163.11"
                                  id="gm-icon-output">
                                  <defs>
                                    <style>
                                    .gm-icon-output-cls-1 {
                                      fill: #e8eef1
                                    }

                                    .gm-icon-output-cls-2 {
                                      fill: #fff
                                    }

                                    .gm-icon-output-cls-3 {
                                      fill: #9fd3f2;
                                      stroke: #faa934
                                    }

                                    .gm-icon-output-cls-10,
                                    .gm-icon-output-cls-3,
                                    .gm-icon-output-cls-8 {
                                      stroke-miterlimit: 10
                                    }

                                    .gm-icon-output-cls-3,
                                    .gm-icon-output-cls-8 {
                                      stroke-width: 2px
                                    }

                                    .gm-icon-output-cls-4 {
                                      fill: #8bc9ed
                                    }

                                    .gm-icon-output-cls-5 {
                                      fill: #fbb147
                                    }

                                    .gm-icon-output-cls-6 {
                                      fill: #faa934
                                    }

                                    .gm-icon-output-cls-7 {
                                      fill: #104470
                                    }

                                    .gm-icon-output-cls-10,
                                    .gm-icon-output-cls-8 {
                                      fill: none;
                                      stroke: #8bc9ed
                                    }

                                    .gm-icon-output-cls-8 {
                                      stroke-linecap: round
                                    }

                                    .gm-icon-output-cls-9 {
                                      fill: #094b7c
                                    }

                                    .gm-icon-output-cls-10 {
                                      stroke-width: 2px
                                    }

                                    .gm-icon-output-cls-11 {
                                      fill: #9bbfd0;
                                      opacity: .6
                                    }

                                    .gm-icon-output-cls-14 {
                                      fill: #0f4470
                                    }
                                    </style>
                                  </defs>
                                  <ellipse class="gm-icon-output-cls-1" cx="128.16" cy="93.91" rx="70.09" ry="67.35" />
                                  <rect class="gm-icon-output-cls-1" x="26.53" y="117" width="60.07" height="23.09" rx="8.5"
                                    transform="rotate(180 56.57 128.55)" />
                                  <rect class="gm-icon-output-cls-1" x="35.54" y="70.82" width="58.57" height="23.09" rx="8.5"
                                    transform="rotate(-180 64.83 82.36)" />
                                  <rect class="gm-icon-output-cls-2" x="36.54" y="93.91" width="65.08" height="23.09" rx="8.5"
                                    transform="rotate(180 69.085 105.455)" />
                                  <rect class="gm-icon-output-cls-2" x="12.52" y="47.72" width="65.08" height="23.09" rx="8.5"
                                    transform="rotate(-180 45.055 59.27)" />
                                  <rect class="gm-icon-output-cls-1" x="160.19" y="47.72" width="64.08" height="23.09" rx="8.5" />
                                  <rect class="gm-icon-output-cls-1" x="151.18" y="93.91" width="60.07" height="23.09" rx="8.5" />
                                  <rect class="gm-icon-output-cls-2" x="176.21" y="70.82" width="56.57" height="23.09" rx="8.5" />
                                  <rect class="gm-icon-output-cls-1" x="221.27" y="93.91" width="32.04" height="23.09" rx="8.5"
                                    transform="rotate(180 237.29 105.455)" />
                                  <path class="gm-icon-output-cls-1"
                                    d="M16 70.82h-4A11.82 11.82 0 0 0 0 82.36a11.83 11.83 0 0 0 12 11.55h4a11.82 11.82 0 0 0 12-11.55 11.81 11.81 0 0 0-12-11.54z" />
                                  <rect class="gm-icon-output-cls-2" x="141.67" y="47.72" width="36.04" height="23.09" rx="8.5" />
                                  <rect class="gm-icon-output-cls-2" x="108.13" y="70.82" width="36.04" height="23.09" rx="8.5" />
                                  <rect class="gm-icon-output-cls-2" x="150.18" y="117" width="57.57" height="23.09" rx="8.5" />
                                  <ellipse class="gm-icon-output-cls-3" cx="237.88" cy="117.46" rx="2.5" ry="2.4" />
                                  <path class="gm-icon-output-cls-4"
                                    d="M178.29 31l1.21 3.78 3.95 1.17-3.95 1.17-1.21 3.79-1.22-3.79-3.94-1.17 3.94-1.17 1.22-3.78z" />
                                  <path class="gm-icon-output-cls-5"
                                    d="M122.22 153.19l1.22 3.79 3.94 1.17-3.94 1.17-1.22 3.78-1.22-3.78-3.94-1.17 3.94-1.17 1.22-3.79z" />
                                  <path class="gm-icon-output-cls-6"
                                    d="M197.31 81.99l1.22 3.79 3.94 1.17-3.94 1.16-1.22 3.79-1.21-3.79-3.94-1.16 3.94-1.17 1.21-3.79z" />
                                  <path class="gm-icon-output-cls-7"
                                    d="M189.06 120a1 1 0 0 1-1-1v-3.85a1 1 0 0 1 2 0V119a1 1 0 0 1-1 1zM189.06 131.49a1 1 0 0 1-1-1v-3.85a1 1 0 0 1 2 0v3.85a1 1 0 0 1-1 1zM197.07 123.8h-4a1 1 0 1 1 0-1.93h4a1 1 0 1 1 0 1.93zM185.06 123.8h-4a1 1 0 1 1 0-1.93h4a1 1 0 1 1 0 1.93z" />
                                  <ellipse class="gm-icon-output-cls-7" cx="189.06" cy="122.83" rx="1" ry=".96" />
                                  <path class="gm-icon-output-cls-8"
                                    d="M86.94 24.7v3.84M86.94 36.23v3.85M94.94 32.39h-4M82.94 32.39h-4.01" />
                                  <ellipse class="gm-icon-output-cls-4" cx="86.94" cy="32.39" rx="1" ry=".96" />
                                  <path class="gm-icon-output-cls-9"
                                    d="M164.53 148.05a1.22 1.22 0 0 0 0-2.44 1.22 1.22 0 0 0 0 2.44zM203.14 99.52v-.16a.56.56 0 0 0-1.12 0v.16a.56.56 0 0 0 1.12 0zM207.49 103.29a.47.47 0 0 0-.57.73c.49.49 1.17-.4.57-.73z" />
                                  <path class="gm-icon-output-cls-6" d="M36.38 112a1.6 1.6 0 0 0 0-3.19 1.6 1.6 0 0 0 0 3.19z" />
                                  <path class="gm-icon-output-cls-9"
                                    d="M63.21 83.23h-.1A1.57 1.57 0 0 0 61 85.31l.05.1a1.59 1.59 0 1 0 2.18-2.18z" />
                                  <path class="gm-icon-output-cls-4"
                                    d="M65.82 62.53a3.32 3.32 0 0 1-1.26 1.83A3.55 3.55 0 0 1 62 65a3.48 3.48 0 0 1-2.32-1.28 3.27 3.27 0 0 1-.68-2.47A3.34 3.34 0 0 1 60.3 59a3.56 3.56 0 0 1 2.59-.67 3.39 3.39 0 0 1 3 3.78 2.83 2.83 0 0 1-.07.42zM61 61.33a1 1 0 0 0 0 .17 1.44 1.44 0 0 0 .3 1.07 1.52 1.52 0 0 0 1 .55 1.5 1.5 0 0 0 1.11-.29 1.4 1.4 0 0 0 .58-.95 1.45 1.45 0 0 0-1.29-1.62 1.49 1.49 0 0 0-1.7 1.07z" />
                                  <ellipse class="gm-icon-output-cls-10" cx="201.21" cy="60.74" rx="2.5" ry="2.4" />
                                  <path class="gm-icon-output-cls-8"
                                    d="M53.9 115.14v3.85M53.9 126.68v3.85M61.9 122.83h-4M49.9 122.83h-4.01" />
                                  <ellipse class="gm-icon-output-cls-5" cx="53.9" cy="122.83" rx="1" ry=".96" />
                                  <path class="gm-icon-output-cls-7" d="M53.9 114.18a1 1 0 0 0-1 1V117h2v-1.86a1 1 0 0 0-1-.96z" />
                                  <circle class="gm-icon-output-cls-3" cx="6" cy="50.2" r="2.64" />
                                  <path class="gm-icon-output-cls-4"
                                    d="M68.94 145.04l-1.28-4.16-4.16-1.27 4.15-1.29 1.28-4.16 1.29 4.16 4.16 1.28-4.16 1.28-1.28 4.16z" />
                                  <path class="gm-icon-output-cls-5"
                                    d="M127.96 10.88l-1.29-4.16-4.15-1.28 4.15-1.28L127.95 0l1.29 4.16 4.15 1.27-4.15 1.29-1.28 4.16z" />
                                  <path class="gm-icon-output-cls-6"
                                    d="M48.83 89.09l-1.29-4.15-4.16-1.28 4.16-1.29 1.28-4.16 1.28 4.16 4.16 1.28-4.15 1.28-1.28 4.16z" />
                                  <path class="gm-icon-output-cls-7"
                                    d="M57.49 47.43a1.05 1.05 0 0 1 1.06 1v4.27a1.06 1.06 0 1 1-2.11 0v-4.22a1 1 0 0 1 1.05-1.05zM57.48 34.76a1.06 1.06 0 0 1 1.06 1.06V40a1.06 1.06 0 0 1-2.11 0v-4.18a1.05 1.05 0 0 1 1.05-1.06zM49.05 43.21h4.22a1.06 1.06 0 0 1 0 2.11h-4.22a1.06 1.06 0 1 1 0-2.11zM61.71 43.2h4.22a1.06 1.06 0 1 1 0 2.11h-4.22a1.06 1.06 0 0 1 0-2.11z" />
                                  <circle class="gm-icon-output-cls-7" cx="57.49" cy="44.26" r="1.06" />
                                  <path class="gm-icon-output-cls-8"
                                    d="M169.52 136.61l-.01-4.22M169.51 123.94l-.01-4.22M161.07 128.17h4.22M173.73 128.16h4.22" />
                                  <circle class="gm-icon-output-cls-4" cx="169.51" cy="128.17" r="1.06" />
                                  <path class="gm-icon-output-cls-9"
                                    d="M83.34 19.12a1.22 1.22 0 0 0 0-2.44 1.22 1.22 0 0 0 0 2.44zM42.69 69.86V70a.57.57 0 0 0 1.13 0v-.17a.57.57 0 0 0-1.13 0zM38.09 65.69h.07a.29.29 0 0 0 .33 0h.07a.47.47 0 1 0-.47 0z" />
                                  <path class="gm-icon-output-cls-6" d="M218.54 59.33a1.6 1.6 0 0 0 0-3.19 1.6 1.6 0 0 0 0 3.19z" />
                                  <path class="gm-icon-output-cls-9"
                                    d="M190.31 87.47l.1.06a1.57 1.57 0 0 0 2.13-2.13v-.11a1.59 1.59 0 1 0-2.18 2.18z" />
                                  <path class="gm-icon-output-cls-4"
                                    d="M187.53 110.33a3.61 3.61 0 0 1 1.33-2 3.69 3.69 0 0 1 5.91 3.41 3.69 3.69 0 0 1-7.32-1 3.39 3.39 0 0 1 .08-.41zm5.11 1.31a1.06 1.06 0 0 0 0-.19 1.6 1.6 0 0 0-.32-1.17 1.55 1.55 0 0 0-1.05-.6 1.6 1.6 0 0 0-1.17.31 1.59 1.59 0 1 0 2.5 1.65z" />
                                  <circle class="gm-icon-output-cls-10" cx="44.73" cy="112.42" r="2.64" />
                                  <path class="gm-icon-output-cls-8"
                                    d="M200.06 52.58l-.01-4.23M200.04 39.91v-4.22M191.61 44.14h4.22M204.27 44.13h4.22" />
                                  <circle class="gm-icon-output-cls-5" cx="200.05" cy="44.13" r="1.06" />
                                  <path class="gm-icon-output-cls-7"
                                    d="M200.06 53.63a1 1 0 0 0 1.05-1.05v-2H199v2a1.05 1.05 0 0 0 1.06 1.05z" />
                                  <rect class="gm-icon-output-cls-11" x="114.69" y="56.02" width="53.24" height="18.98" rx="6.21" />
                                  <rect class="gm-icon-output-cls-11" x="121.67" y="73.9" width="53.24" height="53.24" rx="6.21" />
                                  <path
                                    d="M95.58 57.31h59.61a3.6 3.6 0 0 1 3.6 3.6v19.77a12 12 0 0 1-12 12H95.58a12 12 0 0 1-12-12V69.31a12 12 0 0 1 12-12z"
                                    stroke="#0f4470" stroke-width="3" fill="#dbdcdd" />
                                  <path
                                    d="M167.14 78.78v40.83c0 3.43-2.46 6.21-5.5 6.21H89.08c-3 0-5.5-2.78-5.5-6.21V78.78c0-3.42 2.46-6.2 5.5-6.2h72.56c3.04 0 5.5 2.78 5.5 6.2z"
                                    fill="#f2f2f3" stroke="#0f4470" stroke-width="3" />
                                  <path class="gm-icon-output-cls-2"
                                    d="M165.82 111.61H85V92.23c0-10.36.6-18.65 5.32-18.65h70.18c4.52 0 5.27 8.06 5.31 18.22.01.37.01 19.81.01 19.81z" />
                                  <path class="gm-icon-output-cls-14"
                                    d="M94.35 61.08h59.14v3.47H94.35zM94.35 66.01h59.14v3.47H94.35z" />
                                  <path
                                    d="M167.14 78.78v40.83c0 3.43-2.46 6.21-5.5 6.21H89.08c-3 0-5.5-2.78-5.5-6.21V78.78c0-3.42 2.46-6.2 5.5-6.2h72.56c3.04 0 5.5 2.78 5.5 6.2z"
                                    stroke="#0f4470" stroke-width="3" fill="none" />
                                  <path d="M153.87 93.16h14.81v13h-14.81a5.58 5.58 0 0 1-5.58-5.58v-1.84a5.58 5.58 0 0 1 5.58-5.58z"
                                    fill="#fcba63" />
                                  <circle class="gm-icon-output-cls-14" cx="155.06" cy="99.62" r="2.79" />
                                </svg></span>
                              <h2 class="reveal reveal-650">Daily Mining Outputs</h2>
                              <p class="reveal reveal-650">
                                Your mining outputs will be added to your account daily and automatically</p>
                            </div>
                          </div>

                                    <div class="col-xs-6 col-sm-6" data-aos="fade-left" data-aos-duration="1400">
                                      <div>
                                        <span class="reveal reveal-650"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 253.31 168.11"
                                            id="gm-icon-mining">
                                            <defs>
                                              <style>
                                              .gm-icon-mining-cls-1 {
                                                fill: #e8eef1
                                              }

                                              .gm-icon-mining-cls-2 {
                                                fill: #fff
                                              }

                                              .gm-icon-mining-cls-3 {
                                                fill: #9fd3f2;
                                                stroke: #faa934
                                              }

                                              .gm-icon-mining-cls-10,
                                              .gm-icon-mining-cls-3,
                                              .gm-icon-mining-cls-8 {
                                                stroke-miterlimit: 10
                                              }

                                              .gm-icon-mining-cls-3,
                                              .gm-icon-mining-cls-8 {
                                                stroke-width: 2px
                                              }

                                              .gm-icon-mining-cls-4 {
                                                fill: #8bc9ed
                                              }

                                              .gm-icon-mining-cls-5 {
                                                fill: #fbb147
                                              }

                                              .gm-icon-mining-cls-6 {
                                                fill: #faa934
                                              }

                                              .gm-icon-mining-cls-7 {
                                                fill: #104470
                                              }

                                              .gm-icon-mining-cls-10,
                                              .gm-icon-mining-cls-8 {
                                                fill: none;
                                                stroke: #8bc9ed
                                              }

                                              .gm-icon-mining-cls-8 {
                                                stroke-linecap: round
                                              }

                                              .gm-icon-mining-cls-9 {
                                                fill: #094b7c
                                              }

                                              .gm-icon-mining-cls-10 {
                                                stroke-width: 2px
                                              }

                                              .gm-icon-mining-cls-11 {
                                                fill: #9bbfd0;
                                                opacity: .6
                                              }

                                              .gm-icon-mining-cls-12 {
                                                fill: #f2f2f3
                                              }

                                              .gm-icon-mining-cls-13 {
                                                fill: #dbdcde
                                              }

                                              .gm-icon-mining-cls-14 {
                                                fill: #fcba63
                                              }
                                              </style>
                                            </defs>
                                            <ellipse class="gm-icon-mining-cls-1" cx="128.16" cy="98.91" rx="70.09" ry="67.35" />
                                            <rect class="gm-icon-mining-cls-1" x="26.53" y="122" width="60.07" height="23.09" rx="8.5"
                                              transform="rotate(180 56.57 133.55)" />
                                            <rect class="gm-icon-mining-cls-1" x="35.54" y="75.82" width="58.57" height="23.09" rx="8.5"
                                              transform="rotate(-180 64.83 87.36)" />
                                            <rect class="gm-icon-mining-cls-2" x="36.54" y="98.91" width="65.08" height="23.09" rx="8.5"
                                              transform="rotate(180 69.085 110.455)" />
                                            <rect class="gm-icon-mining-cls-2" x="12.52" y="52.72" width="65.08" height="23.09" rx="8.5"
                                              transform="rotate(-180 45.055 64.27)" />
                                            <rect class="gm-icon-mining-cls-1" x="160.19" y="52.72" width="64.08" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-mining-cls-1" x="151.18" y="98.91" width="60.07" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-mining-cls-2" x="176.21" y="75.82" width="56.57" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-mining-cls-1" x="221.27" y="98.91" width="32.04" height="23.09" rx="8.5"
                                              transform="rotate(180 237.29 110.455)" />
                                            <path class="gm-icon-mining-cls-1"
                                              d="M16 75.82h-4A11.82 11.82 0 0 0 0 87.36a11.83 11.83 0 0 0 12 11.55h4a11.82 11.82 0 0 0 12-11.55 11.81 11.81 0 0 0-12-11.54z" />
                                            <rect class="gm-icon-mining-cls-2" x="141.67" y="52.72" width="36.04" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-mining-cls-2" x="108.13" y="75.82" width="36.04" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-mining-cls-2" x="150.18" y="122" width="57.57" height="23.09" rx="8.5" />
                                            <ellipse class="gm-icon-mining-cls-3" cx="237.88" cy="122.46" rx="2.5" ry="2.4" />
                                            <path class="gm-icon-mining-cls-4"
                                              d="M178.29 35.99l1.21 3.79 3.95 1.17-3.95 1.17-1.21 3.79-1.22-3.79-3.94-1.17 3.94-1.17 1.22-3.79z" />
                                            <path class="gm-icon-mining-cls-5"
                                              d="M122.22 158.19l1.22 3.79 3.94 1.17-3.94 1.17-1.22 3.78-1.22-3.78-3.94-1.17 3.94-1.17 1.22-3.79z" />
                                            <path class="gm-icon-mining-cls-6"
                                              d="M197.31 86.99l1.22 3.79 3.94 1.17-3.94 1.16-1.22 3.79-1.21-3.79-3.94-1.16 3.94-1.17 1.21-3.79z" />
                                            <path class="gm-icon-mining-cls-7"
                                              d="M189.06 125a1 1 0 0 1-1-1v-3.85a1 1 0 0 1 2 0V124a1 1 0 0 1-1 1zM189.06 136.49a1 1 0 0 1-1-1v-3.85a1 1 0 0 1 2 0v3.85a1 1 0 0 1-1 1zM197.07 128.8h-4a1 1 0 1 1 0-1.93h4a1 1 0 1 1 0 1.93zM185.06 128.8h-4a1 1 0 1 1 0-1.93h4a1 1 0 1 1 0 1.93z" />
                                            <ellipse class="gm-icon-mining-cls-7" cx="189.06" cy="127.83" rx="1" ry=".96" />
                                            <path class="gm-icon-mining-cls-8"
                                              d="M86.94 29.7v3.84M86.94 41.23v3.85M94.94 37.39h-4M82.94 37.39h-4.01" />
                                            <ellipse class="gm-icon-mining-cls-4" cx="86.94" cy="37.39" rx="1" ry=".96" />
                                            <path class="gm-icon-mining-cls-9"
                                              d="M164.53 153.05a1.22 1.22 0 0 0 0-2.44 1.22 1.22 0 0 0 0 2.44zM203.14 104.52v-.16a.56.56 0 0 0-1.12 0v.16a.56.56 0 0 0 1.12 0zM207.49 108.29a.47.47 0 0 0-.57.73c.49.49 1.17-.4.57-.73z" />
                                            <path class="gm-icon-mining-cls-6" d="M36.38 117a1.6 1.6 0 0 0 0-3.19 1.6 1.6 0 0 0 0 3.19z" />
                                            <path class="gm-icon-mining-cls-9"
                                              d="M63.21 88.23h-.1A1.57 1.57 0 0 0 61 90.31l.05.1a1.59 1.59 0 1 0 2.18-2.18z" />
                                            <path class="gm-icon-mining-cls-4"
                                              d="M65.82 67.53a3.32 3.32 0 0 1-1.26 1.83A3.55 3.55 0 0 1 62 70a3.48 3.48 0 0 1-2.32-1.28 3.27 3.27 0 0 1-.68-2.47A3.34 3.34 0 0 1 60.3 64a3.56 3.56 0 0 1 2.59-.67 3.39 3.39 0 0 1 3 3.78 2.83 2.83 0 0 1-.07.42zM61 66.33a1 1 0 0 0 0 .17 1.44 1.44 0 0 0 .3 1.07 1.52 1.52 0 0 0 1 .55 1.5 1.5 0 0 0 1.11-.29 1.4 1.4 0 0 0 .58-1 1.45 1.45 0 0 0-1.29-1.62 1.49 1.49 0 0 0-1.7 1.12z" />
                                            <ellipse class="gm-icon-mining-cls-10" cx="201.21" cy="65.74" rx="2.5" ry="2.4" />
                                            <path class="gm-icon-mining-cls-8"
                                              d="M53.9 120.14v3.85M53.9 131.68v3.85M61.9 127.83h-4M49.9 127.83h-4.01" />
                                            <ellipse class="gm-icon-mining-cls-5" cx="53.9" cy="127.83" rx="1" ry=".96" />
                                            <path class="gm-icon-mining-cls-7" d="M53.9 119.18a1 1 0 0 0-1 1V122h2v-1.86a1 1 0 0 0-1-.96z" />
                                            <circle class="gm-icon-mining-cls-3" cx="5" cy="50.2" r="2.64" />
                                            <path class="gm-icon-mining-cls-4"
                                              d="M67.94 145.04l-1.28-4.16-4.16-1.27 4.15-1.29 1.28-4.16 1.29 4.16 4.16 1.28-4.16 1.28-1.28 4.16z" />
                                            <path class="gm-icon-mining-cls-5"
                                              d="M126.96 10.88l-1.29-4.16-4.15-1.28 4.15-1.28L126.95 0l1.29 4.16 4.15 1.27-4.15 1.29-1.28 4.16z" />
                                            <path class="gm-icon-mining-cls-6"
                                              d="M47.83 89.09l-1.29-4.15-4.16-1.28 4.16-1.29 1.28-4.16 1.28 4.16 4.16 1.28-4.15 1.28-1.28 4.16z" />
                                            <path class="gm-icon-mining-cls-7"
                                              d="M56.49 47.43a1.05 1.05 0 0 1 1.06 1v4.27a1.06 1.06 0 1 1-2.11 0v-4.22a1 1 0 0 1 1.05-1.05zM56.48 34.76a1.06 1.06 0 0 1 1.06 1.06V40a1.06 1.06 0 0 1-2.11 0v-4.18a1.05 1.05 0 0 1 1.05-1.06zM48.05 43.21h4.22a1.06 1.06 0 0 1 0 2.11h-4.22a1.06 1.06 0 1 1 0-2.11zM60.71 43.2h4.22a1.06 1.06 0 1 1 0 2.11h-4.22a1.06 1.06 0 0 1 0-2.11z" />
                                            <circle class="gm-icon-mining-cls-7" cx="56.49" cy="44.26" r="1.06" />
                                            <path class="gm-icon-mining-cls-8"
                                              d="M168.52 136.61l-.01-4.22M168.51 123.94l-.01-4.22M160.07 128.17h4.22M172.73 128.16h4.22" />
                                            <circle class="gm-icon-mining-cls-4" cx="168.51" cy="128.17" r="1.06" />
                                            <path class="gm-icon-mining-cls-9"
                                              d="M82.34 19.12a1.22 1.22 0 0 0 0-2.44 1.22 1.22 0 0 0 0 2.44zM41.69 69.86V70a.57.57 0 0 0 1.13 0v-.17a.57.57 0 0 0-1.13 0zM37.09 65.69h.07a.29.29 0 0 0 .33 0h.07a.47.47 0 1 0-.47 0z" />
                                            <path class="gm-icon-mining-cls-6" d="M217.54 59.33a1.6 1.6 0 0 0 0-3.19 1.6 1.6 0 0 0 0 3.19z" />
                                            <path class="gm-icon-mining-cls-9"
                                              d="M189.31 87.47l.1.06a1.57 1.57 0 0 0 2.13-2.13v-.11a1.59 1.59 0 1 0-2.18 2.18z" />
                                            <path class="gm-icon-mining-cls-4"
                                              d="M186.53 110.33a3.61 3.61 0 0 1 1.33-2 3.69 3.69 0 0 1 5.91 3.41 3.69 3.69 0 0 1-7.32-1 3.39 3.39 0 0 1 .08-.41zm5.11 1.31a1.06 1.06 0 0 0 0-.19 1.6 1.6 0 0 0-.32-1.17 1.55 1.55 0 0 0-1.05-.6 1.6 1.6 0 0 0-1.17.31 1.59 1.59 0 1 0 2.5 1.65z" />
                                            <circle class="gm-icon-mining-cls-10" cx="43.73" cy="112.42" r="2.64" />
                                            <path class="gm-icon-mining-cls-8"
                                              d="M199.06 52.58l-.01-4.23M199.04 39.91v-4.22M190.61 44.14h4.22M203.27 44.13h4.22" />
                                            <circle class="gm-icon-mining-cls-5" cx="199.05" cy="44.13" r="1.06" />
                                            <path class="gm-icon-mining-cls-7"
                                              d="M199.06 53.63a1 1 0 0 0 1.05-1.05v-2H198v2a1.05 1.05 0 0 0 1.06 1.05z" />
                                            <rect class="gm-icon-mining-cls-11" x="162.13" y="114.58" width="7.22" height="9.93" rx="2.06" />
                                            <rect class="gm-icon-mining-cls-11" x="162.13" y="85.77" width="7.22" height="9.93" rx="2.06" />
                                            <rect class="gm-icon-mining-cls-11" x="160.63" y="64.89" width="15.8" height="21.57" rx="4.46" />
                                            <rect class="gm-icon-mining-cls-11" x="160.63" y="94.23" width="15.8" height="21.57" rx="4.46" />
                                            <rect class="gm-icon-mining-cls-11" x="160.63" y="123.57" width="15.8" height="21.57" rx="4.46" />
                                            <rect class="gm-icon-mining-cls-2" x="83.97" y="95.7" width="83.92" height="18.68" rx="2.9" />
                                            <rect class="gm-icon-mining-cls-2" x="84.14" y="66.36" width="83.92" height="18.68" rx="2.9" />
                                            <rect class="gm-icon-mining-cls-2" x="92.23" y="84.89" width="68.13" height="40.44" rx="2.9" />
                                            <rect class="gm-icon-mining-cls-12" x="151.12" y="95.54" width="16.55" height="18.01" rx="2.9" />
                                            <rect class="gm-icon-mining-cls-12" x="150.58" y="65.45" width="16.55" height="19.9" rx="2.9" />
                                            <rect class="gm-icon-mining-cls-2" x="84.14" y="124.72" width="83.92" height="18.68" rx="2.9" />
                                            <rect class="gm-icon-mining-cls-12" x="150.86" y="125.62" width="16.55" height="17.78" rx="2.9" />
                                            <path class="gm-icon-mining-cls-13"
                                              d="M166.35 86.51h-30.88v-3.09h30.88V68h-30.88v-3.11h30.88a3.1 3.1 0 0 1 3.09 3.11v15.42a3.1 3.1 0 0 1-3.09 3.09zM116.94 86.51H86.06A3.09 3.09 0 0 1 83 83.42V68a3.09 3.09 0 0 1 3.09-3.09h30.88V68H86.06v15.42h30.88zM116.94 115.85H86.06a3.09 3.09 0 0 1-3.06-3.09V97.32a3.09 3.09 0 0 1 3.09-3.09h30.88v3.09H86.06v15.44h30.88zM166.35 115.85h-30.88v-3.09h30.88V97.32h-30.88v-3.09h30.88a3.09 3.09 0 0 1 3.09 3.09v15.44a3.1 3.1 0 0 1-3.09 3.09z" />
                                            <path class="gm-icon-mining-cls-13"
                                              d="M116.94 97.32H90.69v-13.9h26.25v3.09H93.78v7.72h23.16v3.09zM161.72 97.32h-26.25v-3.09h23.16v-7.72h-23.16v-3.09h26.25v13.9zM166.35 145.18H86.06A3.08 3.08 0 0 1 83 142.1v-15.44a3.09 3.09 0 0 1 3.09-3.09h80.29a3.09 3.09 0 0 1 3.09 3.09v15.44a3.09 3.09 0 0 1-3.12 3.08zm-80.29-18.52v15.44h80.29v-15.44z" />
                                            <path class="gm-icon-mining-cls-13"
                                              d="M161.72 126.66H90.69v-13.9h26.25v3.09H93.78v7.72h64.85v-7.72h-23.16v-3.09h26.25v13.9z" />
                                            <path class="gm-icon-mining-cls-14"
                                              d="M92.23 74.16h3.09v3.09h-3.09zM101.5 74.16h3.09v3.09h-3.09zM110.76 74.16h3.09v3.09h-3.09zM92.23 103.49h3.09v3.09h-3.09zM101.5 103.49h3.09v3.09h-3.09zM110.76 103.49h3.09v3.09h-3.09zM92.23 132.83h3.09v3.09h-3.09zM101.5 132.83h3.09v3.09h-3.09zM110.76 132.83h3.09v3.09h-3.09z" />
                                            <path
                                              d="M87.17 51.19A16.66 16.66 0 0 0 89.58 54c0 .66 14.94-9.8 30.45-4.5 3.75 0-.39 4.65 3.36 4.67-.08 3.63-.37 10.53-.44 13.75s-.34 14.33-.42 17.59l-.28 11.76q-.24 10.17-.49 20.35v1a1.58 1.58 0 0 0 1.52 1.61h6.4a1.59 1.59 0 0 0 1.53-1.6v-.95q-.15-10.17-.29-20.35c0-3.87-.11-7.73-.16-11.6 0-3.2-.21-14.56-.25-17.76s0-10.2 0-13.84c1.08 0 .46-.14 1.54-.14 1-1.66-.15-3.58 1.84-4.47 3.34-1.49 9.46-1.14 15.34-.27.51-.23 16.91 4.47 16.86 4.07-20.82-15.07-35.84-11.65-35.84-11.65v-3a.83.83 0 0 0-.79-.85h-5a.83.83 0 0 0-.8.84v3c-10.52-2.33-36.49 9.53-36.49 9.53z"
                                              fill="#f1f1f1" stroke="#0f4470" stroke-width="3" stroke-miterlimit="10" />
                                          </svg></span>
                                        <h2 class="reveal reveal-650">State of the Art Mining Technology</h2>
                                        <p class="reveal reveal-650">
                                          For every blockchain algorithm that we offer, we’re providing some of the highest performing mining systems that exist              </p>
                                      </div>
                                    </div>
                                    <!--<div class="col-xs-6 col-sm-4">
                                     <div>
                                        <span class="reveal reveal-992"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 253.31 163.11"
                                            id="gm-icon-portfolio">
                                            <defs>
                                              <style>
                                              .gm-icon-portfolio-cls-1 {
                                                fill: #e8eef1
                                              }

                                              .gm-icon-portfolio-cls-2 {
                                                fill: #fff
                                              }

                                              .gm-icon-portfolio-cls-3 {
                                                fill: #9fd3f2;
                                                stroke: #faa934
                                              }

                                              .gm-icon-portfolio-cls-10,
                                              .gm-icon-portfolio-cls-3,
                                              .gm-icon-portfolio-cls-8 {
                                                stroke-miterlimit: 10
                                              }

                                              .gm-icon-portfolio-cls-3,
                                              .gm-icon-portfolio-cls-8 {
                                                stroke-width: 2px
                                              }

                                              .gm-icon-portfolio-cls-4 {
                                                fill: #8bc9ed
                                              }

                                              .gm-icon-portfolio-cls-5 {
                                                fill: #fbb147
                                              }

                                              .gm-icon-portfolio-cls-6 {
                                                fill: #faa934
                                              }

                                              .gm-icon-portfolio-cls-7 {
                                                fill: #104470
                                              }

                                              .gm-icon-portfolio-cls-10,
                                              .gm-icon-portfolio-cls-8 {
                                                fill: none;
                                                stroke: #8bc9ed
                                              }

                                              .gm-icon-portfolio-cls-8 {
                                                stroke-linecap: round
                                              }

                                              .gm-icon-portfolio-cls-9 {
                                                fill: #094b7c
                                              }

                                              .gm-icon-portfolio-cls-10 {
                                                stroke-width: 2px
                                              }

                                              .gm-icon-portfolio-cls-11 {
                                                fill: #9bbfd0;
                                                opacity: .6
                                              }

                                              .gm-icon-portfolio-cls-13 {
                                                fill: #0f4470
                                              }

                                              .gm-icon-portfolio-cls-14 {
                                                fill: #fcba63
                                              }
                                              </style>
                                            </defs>
                                            <ellipse class="gm-icon-portfolio-cls-1" cx="128.16" cy="93.91" rx="70.09" ry="67.35" />
                                            <rect class="gm-icon-portfolio-cls-1" x="26.53" y="97" width="60.07" height="23.09" rx="8.5"
                                              transform="rotate(180 56.57 108.55)" />
                                            <rect class="gm-icon-portfolio-cls-1" x="35.54" y="70.82" width="58.57" height="23.09" rx="8.5"
                                              transform="rotate(-180 64.83 82.36)" />
                                            <rect class="gm-icon-portfolio-cls-2" x="36.54" y="114.65" width="65.08" height="23.09" rx="8.5"
                                              transform="rotate(180 69.085 126.195)" />
                                            <rect class="gm-icon-portfolio-cls-2" x="12.52" y="47.72" width="65.08" height="23.09" rx="8.5"
                                              transform="rotate(-180 45.055 59.27)" />
                                            <rect class="gm-icon-portfolio-cls-1" x="160.19" y="47.72" width="64.08" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-portfolio-cls-1" x="151.18" y="93.91" width="60.07" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-portfolio-cls-2" x="176.21" y="70.82" width="56.57" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-portfolio-cls-1" x="221.27" y="93.91" width="32.04" height="23.09" rx="8.5"
                                              transform="rotate(180 237.29 105.455)" />
                                            <path class="gm-icon-portfolio-cls-1"
                                              d="M16 70.82h-4A11.82 11.82 0 0 0 0 82.36a11.83 11.83 0 0 0 12 11.55h4a11.82 11.82 0 0 0 12-11.55 11.81 11.81 0 0 0-12-11.54z" />
                                            <rect class="gm-icon-portfolio-cls-2" x="141.67" y="44.72" width="36.04" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-portfolio-cls-2" x="118.13" y="68.82" width="36.04" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-portfolio-cls-2" x="150.18" y="117" width="57.57" height="23.09" rx="8.5" />
                                            <ellipse class="gm-icon-portfolio-cls-3" cx="237.88" cy="117.46" rx="2.5" ry="2.4" />
                                            <path class="gm-icon-portfolio-cls-4"
                                              d="M178.29 31l1.21 3.78 3.95 1.17-3.95 1.17-1.21 3.79-1.22-3.79-3.94-1.17 3.94-1.17 1.22-3.78z" />
                                            <path class="gm-icon-portfolio-cls-5"
                                              d="M122.22 153.19l1.22 3.79 3.94 1.17-3.94 1.17-1.22 3.78-1.22-3.78-3.94-1.17 3.94-1.17 1.22-3.79z" />
                                            <path class="gm-icon-portfolio-cls-6"
                                              d="M197.31 81.99l1.22 3.79 3.94 1.17-3.94 1.16-1.22 3.79-1.21-3.79-3.94-1.16 3.94-1.17 1.21-3.79z" />
                                            <path class="gm-icon-portfolio-cls-7"
                                              d="M189.06 120a1 1 0 0 1-1-1v-3.85a1 1 0 0 1 2 0V119a1 1 0 0 1-1 1zM189.06 131.49a1 1 0 0 1-1-1v-3.85a1 1 0 0 1 2 0v3.85a1 1 0 0 1-1 1zM197.07 123.8h-4a1 1 0 1 1 0-1.93h4a1 1 0 1 1 0 1.93zM185.06 123.8h-4a1 1 0 1 1 0-1.93h4a1 1 0 1 1 0 1.93z" />
                                            <ellipse class="gm-icon-portfolio-cls-7" cx="189.06" cy="122.83" rx="1" ry=".96" />
                                            <path class="gm-icon-portfolio-cls-8"
                                              d="M86.94 24.7v3.84M86.94 36.23v3.85M94.94 32.39h-4M82.94 32.39h-4.01" />
                                            <ellipse class="gm-icon-portfolio-cls-4" cx="86.94" cy="32.39" rx="1" ry=".96" />
                                            <path class="gm-icon-portfolio-cls-9"
                                              d="M164.53 148.05a1.22 1.22 0 0 0 0-2.44 1.22 1.22 0 0 0 0 2.44zM203.14 99.52v-.16a.56.56 0 0 0-1.12 0v.16a.56.56 0 0 0 1.12 0zM207.49 103.29a.47.47 0 0 0-.57.73c.49.49 1.17-.4.57-.73z" />
                                            <path class="gm-icon-portfolio-cls-6" d="M36.38 112a1.6 1.6 0 0 0 0-3.19 1.6 1.6 0 0 0 0 3.19z" />
                                            <path class="gm-icon-portfolio-cls-9"
                                              d="M63.21 83.23h-.1A1.57 1.57 0 0 0 61 85.31l.05.1a1.59 1.59 0 1 0 2.18-2.18z" />
                                            <path class="gm-icon-portfolio-cls-4"
                                              d="M65.82 62.53a3.32 3.32 0 0 1-1.26 1.83A3.55 3.55 0 0 1 62 65a3.48 3.48 0 0 1-2.32-1.28 3.27 3.27 0 0 1-.68-2.47A3.34 3.34 0 0 1 60.3 59a3.56 3.56 0 0 1 2.59-.67 3.39 3.39 0 0 1 3 3.78 2.83 2.83 0 0 1-.07.42zM61 61.33a1 1 0 0 0 0 .17 1.44 1.44 0 0 0 .3 1.07 1.52 1.52 0 0 0 1 .55 1.5 1.5 0 0 0 1.11-.29 1.4 1.4 0 0 0 .58-.95 1.45 1.45 0 0 0-1.29-1.62 1.49 1.49 0 0 0-1.7 1.07z" />
                                            <ellipse class="gm-icon-portfolio-cls-10" cx="201.21" cy="60.74" rx="2.5" ry="2.4" />
                                            <path class="gm-icon-portfolio-cls-8"
                                              d="M53.9 115.14v3.85M53.9 126.68v3.85M61.9 122.83h-4M49.9 122.83h-4.01" />
                                            <ellipse class="gm-icon-portfolio-cls-5" cx="53.9" cy="122.83" rx="1" ry=".96" />
                                            <path class="gm-icon-portfolio-cls-7" d="M53.9 114.18a1 1 0 0 0-1 1V117h2v-1.86a1 1 0 0 0-1-.96z" />
                                            <circle class="gm-icon-portfolio-cls-3" cx="6" cy="50.2" r="2.64" />
                                            <path class="gm-icon-portfolio-cls-4"
                                              d="M68.94 145.04l-1.28-4.16-4.16-1.27 4.15-1.29 1.28-4.16 1.29 4.16 4.16 1.28-4.16 1.28-1.28 4.16z" />
                                            <path class="gm-icon-portfolio-cls-5"
                                              d="M127.96 10.88l-1.29-4.16-4.15-1.28 4.15-1.28L127.95 0l1.29 4.16 4.15 1.27-4.15 1.29-1.28 4.16z" />
                                            <path class="gm-icon-portfolio-cls-6"
                                              d="M48.83 89.09l-1.29-4.15-4.16-1.28 4.16-1.29 1.28-4.16 1.28 4.16 4.16 1.28-4.15 1.28-1.28 4.16z" />
                                            <path class="gm-icon-portfolio-cls-7"
                                              d="M57.49 47.43a1.05 1.05 0 0 1 1.06 1v4.27a1.06 1.06 0 1 1-2.11 0v-4.22a1 1 0 0 1 1.05-1.05zM57.48 34.76a1.06 1.06 0 0 1 1.06 1.06V40a1.06 1.06 0 0 1-2.11 0v-4.18a1.05 1.05 0 0 1 1.05-1.06zM49.05 43.21h4.22a1.06 1.06 0 0 1 0 2.11h-4.22a1.06 1.06 0 1 1 0-2.11zM61.71 43.2h4.22a1.06 1.06 0 1 1 0 2.11h-4.22a1.06 1.06 0 0 1 0-2.11z" />
                                            <circle class="gm-icon-portfolio-cls-7" cx="57.49" cy="44.26" r="1.06" />
                                            <path class="gm-icon-portfolio-cls-8"
                                              d="M169.52 136.61l-.01-4.22M169.51 123.94l-.01-4.22M161.07 128.17h4.22M173.73 128.16h4.22" />
                                            <circle class="gm-icon-portfolio-cls-4" cx="169.51" cy="128.17" r="1.06" />
                                            <path class="gm-icon-portfolio-cls-9"
                                              d="M83.34 19.12a1.22 1.22 0 0 0 0-2.44 1.22 1.22 0 0 0 0 2.44zM42.69 69.86V70a.57.57 0 0 0 1.13 0v-.17a.57.57 0 0 0-1.13 0zM38.09 65.69h.07a.29.29 0 0 0 .33 0h.07a.47.47 0 1 0-.47 0z" />
                                            <path class="gm-icon-portfolio-cls-6" d="M218.54 59.33a1.6 1.6 0 0 0 0-3.19 1.6 1.6 0 0 0 0 3.19z" />
                                            <path class="gm-icon-portfolio-cls-9"
                                              d="M190.31 87.47l.1.06a1.57 1.57 0 0 0 2.13-2.13v-.11a1.59 1.59 0 1 0-2.18 2.18z" />
                                            <path class="gm-icon-portfolio-cls-4"
                                              d="M187.53 110.33a3.61 3.61 0 0 1 1.33-2 3.69 3.69 0 0 1 5.91 3.41 3.69 3.69 0 0 1-7.32-1 3.39 3.39 0 0 1 .08-.41zm5.11 1.31a1.06 1.06 0 0 0 0-.19 1.6 1.6 0 0 0-.32-1.17 1.55 1.55 0 0 0-1.05-.6 1.6 1.6 0 0 0-1.17.31 1.59 1.59 0 1 0 2.5 1.65z" />
                                            <circle class="gm-icon-portfolio-cls-10" cx="44.73" cy="112.42" r="2.64" />
                                            <path class="gm-icon-portfolio-cls-8"
                                              d="M200.06 52.58l-.01-4.23M200.04 39.91v-4.22M191.61 44.14h4.22M204.27 44.13h4.22" />
                                            <circle class="gm-icon-portfolio-cls-5" cx="200.05" cy="44.13" r="1.06" />
                                            <path class="gm-icon-portfolio-cls-7"
                                              d="M200.06 53.63a1 1 0 0 0 1.05-1.05v-2H199v2a1.05 1.05 0 0 0 1.06 1.05z" />
                                            <ellipse class="gm-icon-portfolio-cls-11" cx="121.17" cy="135.36" rx="17.56" ry="5.61" />
                                            <ellipse class="gm-icon-portfolio-cls-11" cx="159.73" cy="132.94" rx="23.54" ry="9.55" />
                                            <path class="gm-icon-portfolio-cls-2"
                                              d="M148.42 85h14.79a11.06 11.06 0 0 1 11.05 11v31.33a6.73 6.73 0 0 1-6.73 6.73h-23.64a6.73 6.73 0 0 1-6.73-6.73V96.22A11.26 11.26 0 0 1 148.42 85z" />
                                            <path class="gm-icon-portfolio-cls-2"
                                              d="M114.46 101.82h10.74a13.08 13.08 0 0 1 13.08 13.08v11.43a8.75 8.75 0 0 1-8.75 8.75h-19.6a8.75 8.75 0 0 1-8.75-8.75V115.1a13.28 13.28 0 0 1 13.28-13.28z" />
                                            <path
                                              d="M159.7 85.53h8.3a6 6 0 0 1 6 6V133a1.65 1.65 0 0 1-1.65 1.65h-17.17a1.65 1.65 0 0 1-1.65-1.65V91.71a6.18 6.18 0 0 1 6.17-6.18z"
                                              fill="#f2f2f3" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M82.73 129.7c-9.86 0-19.84-2.71-19.84-7.95s10-8 19.82-8 19.83 2.72 19.84 8-9.97 7.94-19.82 7.95zm0-12.54c-10.19 0-16.42 3-16.42 4.59s6.24 4.56 16.43 4.55 16.43-3 16.42-4.59-6.26-4.56-16.45-4.55z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M82.74 137.54c-9.86 0-19.84-2.71-19.84-7.95v-7.84a1.7 1.7 0 0 1 3.4 0v7.84c0 1.61 6.24 4.56 16.43 4.55s16.43-3 16.42-4.6v-7.83a1.71 1.71 0 0 1 3.41 0v7.84c.01 5.22-9.97 7.98-19.82 7.99z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M119.07 129.65c-9.85 0-19.83-2.71-19.84-8a1.71 1.71 0 0 1 3.41 0c0 1.61 6.24 4.56 16.43 4.55s16.42-3 16.42-4.59a1.7 1.7 0 1 1 3.4 0c.01 5.28-9.96 8.03-19.82 8.04z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M119.08 137.49c-9.85 0-19.83-2.71-19.84-8v-7.79a1.71 1.71 0 0 1 3.41 0v7.84c0 1.61 6.24 4.56 16.43 4.55s16.42-3 16.42-4.6v-7.83a1.7 1.7 0 1 1 3.4 0v7.84c.01 5.23-9.96 7.98-19.82 7.99z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M119.06 122c-9.85 0-19.83-2.71-19.84-8a1.71 1.71 0 0 1 3.41 0c0 1.61 6.24 4.56 16.43 4.54s16.42-3 16.42-4.59a1.7 1.7 0 1 1 3.4 0c.01 5.29-9.96 8.05-19.82 8.05z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M119.07 129.85c-9.85 0-19.83-2.71-19.84-7.95v-7.84a1.71 1.71 0 0 1 3.41 0v7.84c0 1.61 6.24 4.56 16.43 4.54s16.42-3 16.42-4.59V114a1.7 1.7 0 1 1 3.4 0v7.84c.01 5.24-9.96 7.99-19.82 8.01z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M119.05 114.37c-9.85 0-19.83-2.72-19.84-8s10-8 19.82-8 19.84 2.71 19.84 7.94-9.96 8.04-19.82 8.06zm0-12.55c-10.2 0-16.43 3-16.42 4.59s6.24 4.56 16.43 4.55 16.42-3 16.42-4.59-6.25-4.56-16.48-4.55z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M119.06 122.2c-9.85 0-19.83-2.71-19.84-7.94v-7.84a1.71 1.71 0 0 1 3.41 0v7.84c0 1.61 6.24 4.56 16.43 4.55s16.42-3 16.42-4.59v-7.84a1.7 1.7 0 1 1 3.4 0v7.84c.01 5.22-9.96 7.97-19.82 7.98zM155.42 129.6c-9.85 0-19.84-2.71-19.84-7.94a1.7 1.7 0 1 1 3.4 0c0 1.61 6.24 4.56 16.44 4.55s16.42-3 16.42-4.59a1.7 1.7 0 1 1 3.4 0c.01 5.22-9.96 7.97-19.82 7.98z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M155.43 137.44c-9.85 0-19.83-2.71-19.84-7.95v-7.83a1.7 1.7 0 1 1 3.4 0v7.84c0 1.61 6.25 4.56 16.44 4.55s16.42-3 16.42-4.59v-7.84a1.7 1.7 0 1 1 3.4 0v7.84c.01 5.22-9.96 7.97-19.82 7.98z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M155.41 122c-9.86 0-19.84-2.71-19.84-7.95a1.7 1.7 0 1 1 3.4 0c0 1.61 6.24 4.56 16.44 4.54s16.42-3 16.42-4.59a1.7 1.7 0 0 1 3.4 0c.01 5.19-9.97 8-19.82 8z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M155.42 129.8c-9.85 0-19.83-2.71-19.84-8V114a1.7 1.7 0 1 1 3.4 0v7.84c0 1.61 6.24 4.56 16.44 4.54s16.42-3 16.42-4.59V114a1.7 1.7 0 0 1 3.4 0v7.84c.01 5.16-9.96 7.94-19.82 7.96z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M155.4 114.32c-9.86 0-19.84-2.72-19.84-7.95a1.7 1.7 0 1 1 3.4 0c0 1.62 6.24 4.57 16.43 4.55s16.43-3 16.43-4.59a1.7 1.7 0 1 1 3.4 0c.01 5.22-9.97 7.97-19.82 7.99z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M155.41 122.16c-9.86 0-19.84-2.72-19.84-8v-7.84a1.7 1.7 0 1 1 3.4 0v7.84c0 1.61 6.24 4.56 16.44 4.55s16.42-3 16.42-4.59v-7.84a1.7 1.7 0 1 1 3.4 0v7.84c.01 5.27-9.97 8.02-19.82 8.04z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M155.39 106.56c-9.86 0-19.84-2.72-19.84-8a1.7 1.7 0 1 1 3.4 0c0 1.61 6.24 4.56 16.43 4.54s16.43-3 16.42-4.59a1.71 1.71 0 0 1 3.41 0c.01 5.28-9.97 8.03-19.82 8.05z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M155.4 114.4c-9.86 0-19.84-2.72-19.84-8v-7.79a1.7 1.7 0 1 1 3.4 0v7.83c0 1.62 6.24 4.56 16.43 4.55s16.43-3 16.43-4.59v-7.84a1.71 1.71 0 0 1 3.41 0v7.84c0 5.23-9.98 7.98-19.83 8z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M155.38 98.91c-9.86 0-19.84-2.71-19.84-7.94 0-3.53 4.67-6.32 12.51-7.48a50.61 50.61 0 0 1 7.31-.52 1.7 1.7 0 0 1 0 3.4 48 48 0 0 0-6.81.48c-6.79 1-9.61 3.17-9.61 4.11 0 1.61 6.24 4.56 16.43 4.55s16.43-3 16.42-4.59c0-.94-2.82-3.1-9.62-4.08a1.7 1.7 0 0 1 .49-3.37c7.85 1.13 12.53 3.92 12.54 7.44.01 5.24-9.97 7.99-19.82 8z" />
                                            <path class="gm-icon-portfolio-cls-13"
                                              d="M155.39 106.75c-9.86 0-19.84-2.71-19.84-7.94V91a1.7 1.7 0 1 1 3.4 0v7.8c0 1.61 6.24 4.56 16.43 4.55s16.43-3 16.42-4.59v-7.84a1.71 1.71 0 1 1 3.41 0v7.84c.01 5.24-9.97 7.98-19.82 7.99z" />
                                            <path class="gm-icon-portfolio-cls-14"
                                              d="M158.42 89.78a1.7 1.7 0 0 1-1.7-1.7l-.05-33.81a1.7 1.7 0 1 1 3.4 0l.05 33.81a1.71 1.71 0 0 1-1.7 1.7zM146.43 78.83h-.14c-6.92-.16-13.7-12.92-14.45-14.37a1.73 1.73 0 0 1 0-1.64 1.69 1.69 0 0 1 1.4-.84c1.63-.08 16.07-.59 19.68 5.31.87 1.45 1.5 3.9-.5 7.38-1.93 3.41-4.3 4.15-5.99 4.16zm-10.19-13.5c2.74 4.58 7 10 10.13 10.09.43 0 1.7 0 3.14-2.46 1.42-2.47.76-3.55.54-3.9-1.63-2.67-8.47-3.64-13.81-3.73z" />
                                            <path class="gm-icon-portfolio-cls-14"
                                              d="M158.41 79.78a1.71 1.71 0 0 1-.85-.22l-13-7.48a1.7 1.7 0 1 1 1.7-3l13 7.48a1.7 1.7 0 0 1-.84 3.17zM170.38 78.79c-1.69 0-4.06-.73-6-4.15-2-3.48-1.39-5.93-.52-7.37 3.59-5.92 18-5.44 19.67-5.37a1.67 1.67 0 0 1 1.39.84 1.71 1.71 0 0 1 .05 1.63c-.75 1.46-7.49 14.24-14.41 14.42zm-3.09-5.85c1.44 2.49 2.7 2.47 3.14 2.45 3.13-.08 7.38-5.53 10.11-10.12-5.35.1-12.19 1.09-13.81 3.77-.21.35-.87 1.43.56 3.9z" />
                                            <path class="gm-icon-portfolio-cls-14"
                                              d="M158.41 79.78a1.7 1.7 0 0 1-.86-3.17l13-7.51a1.7 1.7 0 0 1 1.7 2.94l-13 7.51a1.65 1.65 0 0 1-.84.23zM158.15 62.75c-4 0-5.86-1.73-6.69-3.22-3.45-6.16 4.48-18.83 5.39-20.26a1.75 1.75 0 0 1 1.43-.78 1.71 1.71 0 0 1 1.43.77c.91 1.38 8.84 13.7 5.54 20-.81 1.55-2.66 3.41-6.82 3.5zm.21-3.4v1.7-1.7c3-.07 3.66-1.28 3.87-1.68 1.52-2.89-1.21-9.46-3.93-14.19-2.71 4.85-5.45 11.57-3.87 14.39.22.38.85 1.54 3.93 1.48z" />
                                          </svg></span>
                                        <h2 class="reveal reveal-992">Diverse Mining Portfolio</h2>
                                        <p class="reveal reveal-992">
                                          Choose from 6 major mining algorithms that span over 10+ mineable cryptocurrencies              </p>
                                      </div>
                                    </div>-->

                                    <div class="col-xs-6 col-sm-4" data-aos="zoom-in" data-aos-duration="1600">
                                      <div>
                                        <span class="reveal reveal-full"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 254.29 161.98"
                                            id="gm-icon-allocation">
                                            <defs>
                                              <style>
                                              .gm-icon-allocation-1 {
                                                fill: #e8eef1
                                              }

                                              .gm-icon-allocation-2 {
                                                fill: #fff
                                              }

                                              .gm-icon-allocation-17,
                                              .gm-icon-allocation-18,
                                              .gm-icon-allocation-8 {
                                                stroke-miterlimit: 10
                                              }

                                              .gm-icon-allocation-18,
                                              .gm-icon-allocation-8 {
                                                stroke-width: 2px
                                              }

                                              .gm-icon-allocation-4 {
                                                fill: #8bc9ed
                                              }

                                              .gm-icon-allocation-5 {
                                                fill: #fbb147
                                              }

                                              .gm-icon-allocation-6 {
                                                fill: #faa934
                                              }

                                              .gm-icon-allocation-7 {
                                                fill: #104470
                                              }

                                              .gm-icon-allocation-8 {
                                                fill: none;
                                                stroke: #8bc9ed
                                              }

                                              .gm-icon-allocation-18,
                                              .gm-icon-allocation-8 {
                                                stroke-linecap: round
                                              }

                                              .gm-icon-allocation-9 {
                                                fill: #094b7c
                                              }

                                              .gm-icon-allocation-13 {
                                                fill: #0f4470
                                              }

                                              .gm-icon-allocation-14 {
                                                fill: #e3e4e5
                                              }

                                              .gm-icon-allocation-15 {
                                                fill: #fcba63
                                              }

                                              .gm-icon-allocation-17,
                                              .gm-icon-allocation-18,
                                              .gm-icon-allocation-19 {
                                                fill: #e2e3e4
                                              }

                                              .gm-icon-allocation-17,
                                              .gm-icon-allocation-18 {
                                                stroke: #e3e4e5
                                              }
                                              </style>
                                            </defs>
                                            <ellipse class="gm-icon-allocation-1" cx="125.63" cy="92.78" rx="70.36" ry="67.35" />
                                            <rect class="gm-icon-allocation-1" x="167.35" y="115.87" width="60.3" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-allocation-1" x="159.81" y="69.69" width="58.8" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-allocation-2" x="152.27" y="92.78" width="65.33" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-allocation-2" x="176.39" y="46.6" width="65.33" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-allocation-1" x="29.15" y="46.6" width="64.33" height="23.09" rx="8.5"
                                              transform="rotate(-180 61.31 58.14)" />
                                            <rect class="gm-icon-allocation-1" x="42.21" y="92.78" width="60.3" height="23.09" rx="8.5"
                                              transform="rotate(-180 72.365 104.325)" />
                                            <rect class="gm-icon-allocation-2" x="20.6" y="69.69" width="56.79" height="23.09" rx="8.5"
                                              transform="rotate(-180 49 81.235)" />
                                            <rect class="gm-icon-allocation-1" y="92.78" width="32.16" height="23.09" rx="8.5" />
                                            <path class="gm-icon-allocation-1"
                                              d="M238.2 69.69h4c6.64 0 12.07 5.19 12.07 11.54a11.85 11.85 0 0 1-12.07 11.55h-4a11.85 11.85 0 0 1-12.06-11.55 11.84 11.84 0 0 1 12.06-11.54z" />
                                            <rect class="gm-icon-allocation-2" x="75.88" y="46.6" width="36.18" height="23.09" rx="8.5"
                                              transform="rotate(-180 93.975 58.14)" />
                                            <rect class="gm-icon-allocation-2" x="109.55" y="69.69" width="36.18" height="23.09" rx="8.5"
                                              transform="rotate(-180 127.645 81.235)" />
                                            <rect class="gm-icon-allocation-2" x="45.73" y="115.87" width="57.79" height="23.09" rx="8.5"
                                              transform="rotate(-180 74.625 127.42)" />
                                            <ellipse cx="15.48" cy="116.34" rx="2.51" ry="2.4" stroke-width="2" stroke-miterlimit="10"
                                              fill="#9fd3f2" stroke="#faa934" />
                                            <path class="gm-icon-allocation-4"
                                              d="M75.31 29.87l-1.22 3.79-3.96 1.16 3.96 1.17 1.22 3.79 1.22-3.79 3.95-1.17-3.95-1.16-1.22-3.79z" />
                                            <path class="gm-icon-allocation-5"
                                              d="M131.59 152.07l-1.22 3.78-3.95 1.17 3.95 1.17 1.22 3.79 1.22-3.79 3.96-1.17-3.96-1.17-1.22-3.78z" />
                                            <path class="gm-icon-allocation-6"
                                              d="M56.21 80.86l-1.22 3.79-3.96 1.17 3.96 1.17 1.22 3.79 1.22-3.79 3.96-1.17-3.96-1.17-1.22-3.79z" />
                                            <path class="gm-icon-allocation-7"
                                              d="M64.49 118.82a1 1 0 0 0 1-1V114a1 1 0 0 0-2 0v3.85a1 1 0 0 0 1 .97zM64.49 130.36a1 1 0 0 0 1-1v-3.85a1 1 0 0 0-2 0v3.85a1 1 0 0 0 1 1zM56.46 122.67h4a1 1 0 1 0 0-1.93h-4a1 1 0 1 0 0 1.93zM68.51 122.67h4a1 1 0 1 0 0-1.93h-4a1 1 0 1 0 0 1.93z" />
                                            <ellipse class="gm-icon-allocation-7" cx="64.49" cy="121.71" rx="1" ry=".96" />
                                            <path class="gm-icon-allocation-8"
                                              d="M167.01 23.57v3.84M167.01 35.11v3.84M158.97 31.26h4.02M171.03 31.26h4.02" />
                                            <ellipse class="gm-icon-allocation-4" cx="167.01" cy="31.26" rx="1" ry=".96" />
                                            <path class="gm-icon-allocation-9"
                                              d="M89.12 146.92a1.22 1.22 0 0 0 0-2.44 1.22 1.22 0 0 0 0 2.44zM51.49 98.39v-.16a.57.57 0 0 0-1.13 0v.16a.57.57 0 0 0 1.13 0zM46.47 102.16a.47.47 0 0 0-.57.73c.49.49 1.17-.4.57-.73z" />
                                            <path class="gm-icon-allocation-6" d="M217.77 110.89a1.6 1.6 0 0 0 0-3.19 1.6 1.6 0 0 0 0 3.19z" />
                                            <path class="gm-icon-allocation-9"
                                              d="M193 84.28l.05-.09a1.57 1.57 0 0 0-2.13-2.14h-.1a1.59 1.59 0 1 0 2.18 2.23z" />
                                            <path class="gm-icon-allocation-4"
                                              d="M188.21 61.4a3.29 3.29 0 0 0 1.26 1.83 3.59 3.59 0 0 0 2.6.67 3.53 3.53 0 0 0 2.33-1.29 3.27 3.27 0 0 0 .7-2.49 3.34 3.34 0 0 0-1.35-2.23 3.63 3.63 0 0 0-2.6-.67 3.4 3.4 0 0 0-3 3.78 2.57 2.57 0 0 0 .06.4zm4.86-1.2a1 1 0 0 1 0 .17 1.44 1.44 0 0 1-.3 1.07 1.56 1.56 0 0 1-2.11.27 1.44 1.44 0 0 1-.58-1 1.46 1.46 0 0 1 1.3-1.62 1.5 1.5 0 0 1 1.69 1.11z" />
                                            <ellipse cx="52.29" cy="59.61" rx="2.51" ry="2.4" stroke-width="2" fill="none" stroke="#8bc9ed"
                                              stroke-miterlimit="10" />
                                            <path class="gm-icon-allocation-8"
                                              d="M200.18 114.01v3.85M200.18 125.55v3.85M192.14 121.71h4.02M204.2 121.71h4.01" />
                                            <ellipse class="gm-icon-allocation-5" cx="200.18" cy="121.71" rx="1" ry=".96" />
                                            <path class="gm-icon-allocation-7" d="M200.18 113.05a1 1 0 0 1 1 1v1.86h-2V114a1 1 0 0 1 1-.95z" />
                                            <circle cx="130.42" cy="97.34" r="50.06" fill="#9bbfd0" opacity=".6" />
                                            <circle class="gm-icon-allocation-2" cx="125.71" cy="91.17" r="50.06" />
                                            <path
                                              d="M175.11 90.79A50.07 50.07 0 0 0 125 40.73c18.1 15.31 50.07 50.06 0 100.12a50.07 50.07 0 0 0 50.11-50.06z"
                                              fill="#f2f2f3" />
                                            <path class="gm-icon-allocation-13"
                                              d="M171.78 67.11l-2.7 2.71A48.25 48.25 0 1 1 147 47.52c.9-.9 1.79-1.8 2.69-2.69a53.68 53.68 0 0 0-24.14-6 51.93 51.93 0 1 0 51.95 51.96 52.89 52.89 0 0 0-5.72-23.68z" />
                                            <path class="gm-icon-allocation-14"
                                              d="M143.32 63.55a35.21 35.21 0 0 0-17.75-5.27 32.51 32.51 0 1 0 32.51 32.51 35.12 35.12 0 0 0-5-17.28L150.36 76a28.84 28.84 0 1 1-9.62-9.77z" />
                                            <path class="gm-icon-allocation-15"
                                              d="M125.57 80.06a10.6 10.6 0 0 1 3 .43l2.53-2.76a12.12 12.12 0 0 0-5.55-1.31 14.37 14.37 0 1 0 14.37 14.37 11.65 11.65 0 0 0-1.07-5.07L136 88.26a10.73 10.73 0 1 1-10.43-8.2zM166.66 41.2l-2.54 2.79-.15 4.24.71.01 1.78-1.72.2-5.32zM171.24 50.7l-2.52 2.42 5.09.02 2.95-2.42-5.52-.02zM159.62 48.95l-2.54 2.79-.12 3.23h.71l1.79-1.71.16-4.31zM164.23 57.43l-2.52 2.42 3.89.01 2.95-2.41-4.32-.02z" />
                                            <path class="gm-icon-allocation-13"
                                              d="M150.6 61.77l.48-.47 1.74-1.67-.26-6.52 19.03-20.96-.18 9.1.53.01 1.94-1.86.27-13.68-24.06 26.49.39 9.67.12-.11zM192.52 44.1l-14.12-.28-2.48 2.38h.25l9.71.2-21.2 17.36-7.02-.02-2.53 2.43 10.42.02 26.97-22.09zM124.31 91.2a1.76 1.76 0 0 0 2.52.14l53.28-51.19-2.36-2.45-53.06 51s-1.47 1.3-.38 2.5z" />
                                            <circle cx="21.91" cy="51.89" r="2.64" stroke="#e3e4e5" fill="#e2e3e4" stroke-width="2"
                                              stroke-miterlimit="10" />
                                            <path class="gm-icon-allocation-17"
                                              d="M84.85 146.74l-1.29-4.16-4.16-1.28 4.16-1.28 1.28-4.16 1.28 4.16 4.16 1.27-4.16 1.29-1.27 4.16zM143.86 12.57l-1.28-4.15-4.16-1.28 4.16-1.28 1.27-4.16 1.29 4.15 4.16 1.28-4.16 1.29-1.28 4.15zM64.73 90.79l-1.28-4.16-4.16-1.28 4.16-1.28 1.27-4.16 1.29 4.16 4.16 1.27-4.16 1.29-1.28 4.16zM73.4 49.12a1.05 1.05 0 0 1 1 1.06v4.22a1.06 1.06 0 0 1-2.11 0v-4.22a1.06 1.06 0 0 1 1.11-1.06zM73.39 36.46a1 1 0 0 1 1 1v4.22a1.06 1.06 0 0 1-2.12 0v-4.17a1.05 1.05 0 0 1 1.12-1.05zM65 44.91h4.22a1.06 1.06 0 0 1 0 2.12H65a1.06 1.06 0 0 1 0-2.11zM77.61 44.9h4.23a1.06 1.06 0 0 1 0 2.11h-4.22a1.06 1.06 0 0 1 0-2.11z" />
                                            <circle class="gm-icon-allocation-17" cx="73.39" cy="45.96" r="1.06" />
                                            <path class="gm-icon-allocation-18"
                                              d="M181.2 153.57v-4.22M181.19 140.9l-.01-4.22M172.75 145.13h4.22M185.41 145.12h4.22" />
                                            <circle class="gm-icon-allocation-17" cx="181.19" cy="145.12" r="1.06" />
                                            <path class="gm-icon-allocation-14" d="M99.24 20.82a1.22 1.22 0 0 0 0-2.44 1.22 1.22 0 0 0 0 2.44z" />
                                            <path class="gm-icon-allocation-19" d="M59.16 71.55v.18" />
                                            <path class="gm-icon-allocation-14"
                                              d="M58.6 71.55v.18a.56.56 0 0 0 1.12 0v-.18a.56.56 0 0 0-1.12 0z" />
                                            <path class="gm-icon-allocation-19" d="M54.23 67v.18" />
                                            <path class="gm-icon-allocation-14"
                                              d="M54 67.39h.07a.32.32 0 0 0 .33 0h.07a.47.47 0 1 0-.47 0zM234.44 61a1.6 1.6 0 0 0 0-3.19 1.6 1.6 0 0 0 0 3.19z" />
                                            <path class="gm-icon-allocation-19" d="M207 87.79l.18.18" />
                                            <path class="gm-icon-allocation-14"
                                              d="M206.21 89.17l.11.06a1.57 1.57 0 0 0 2.13-2.14l-.06-.1a1.59 1.59 0 1 0-2.18 2.18z" />
                                            <path class="gm-icon-allocation-17"
                                              d="M203.43 112a3.72 3.72 0 0 1 1.33-2 3.69 3.69 0 0 1 5.91 3.41 3.72 3.72 0 0 1-1.41 2.45 3.66 3.66 0 0 1-2.73.73 3.7 3.7 0 0 1-3.18-4.15c.02-.12.05-.27.08-.44zm5.12 1.31v-.19a1.54 1.54 0 0 0-.31-1.17 1.57 1.57 0 0 0-1.05-.6 1.53 1.53 0 0 0-1.17.31 1.58 1.58 0 1 0 2.5 1.65z" />
                                            <circle cx="60.64" cy="114.12" r="2.64" stroke="#e3e4e5" fill="#e2e3e4" stroke-width="2"
                                              stroke-miterlimit="10" />
                                            <path class="gm-icon-allocation-18"
                                              d="M215.96 54.27v-4.22M215.95 41.61v-4.22M207.51 45.84l4.22-.01M220.17 45.83l4.23-.01" />
                                            <circle class="gm-icon-allocation-17" cx="215.95" cy="45.83" r="1.06" />
                                            <path class="gm-icon-allocation-17"
                                              d="M216 55.33a1.07 1.07 0 0 0 1-1.06v-2h-2.1v2a1.07 1.07 0 0 0 1.1 1.06z" />
                                          </svg></span>
                                        <h2 class="reveal reveal-full">Freedom of Allocation</h2>
                                        <p class="reveal reveal-full">
                                          Allocate your investment package to other packages of your mining algorithm of choice              </p>
                                      </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4" data-aos="flip-up" data-aos-duration="1800">
                                      <div>
                                        <span class="reveal reveal-full"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 253.31 163.11"
                                            id="gm-icon-dashboard">
                                            <defs>
                                              <style>
                                              .gm-icon-dashboard-cls-1 {
                                                fill: #e8eef1
                                              }

                                              .gm-icon-dashboard-cls-2 {
                                                fill: #fff
                                              }

                                              .gm-icon-dashboard-cls-3 {
                                                fill: #9fd3f2;
                                                stroke: #faa934
                                              }

                                              .gm-icon-dashboard-cls-10,
                                              .gm-icon-dashboard-cls-3,
                                              .gm-icon-dashboard-cls-8 {
                                                stroke-miterlimit: 10
                                              }

                                              .gm-icon-dashboard-cls-3,
                                              .gm-icon-dashboard-cls-8 {
                                                stroke-width: 2px
                                              }

                                              .gm-icon-dashboard-cls-4 {
                                                fill: #8bc9ed
                                              }

                                              .gm-icon-dashboard-cls-5 {
                                                fill: #fbb147
                                              }

                                              .gm-icon-dashboard-cls-6 {
                                                fill: #faa934
                                              }

                                              .gm-icon-dashboard-cls-7 {
                                                fill: #104470
                                              }

                                              .gm-icon-dashboard-cls-10,
                                              .gm-icon-dashboard-cls-8 {
                                                fill: none;
                                                stroke: #8bc9ed
                                              }

                                              .gm-icon-dashboard-cls-8 {
                                                stroke-linecap: round
                                              }

                                              .gm-icon-dashboard-cls-9 {
                                                fill: #094b7c
                                              }

                                              .gm-icon-dashboard-cls-10 {
                                                stroke-width: 2px
                                              }

                                              .gm-icon-dashboard-cls-11 {
                                                fill: #9bbfd0;
                                                opacity: .6
                                              }

                                              .gm-icon-dashboard-cls-12 {
                                                fill: #fcba63
                                              }

                                              .gm-icon-dashboard-cls-14 {
                                                fill: #f2f2f3
                                              }

                                              .gm-icon-dashboard-cls-15 {
                                                fill: #dbdcde
                                              }
                                              </style>
                                            </defs>
                                            <ellipse class="gm-icon-dashboard-cls-1" cx="128.16" cy="93.91" rx="70.09" ry="67.35" />
                                            <rect class="gm-icon-dashboard-cls-1" x="26.53" y="117" width="60.07" height="23.09" rx="8.5"
                                              transform="rotate(180 56.57 128.55)" />
                                            <rect class="gm-icon-dashboard-cls-1" x="35.54" y="70.82" width="58.57" height="23.09" rx="8.5"
                                              transform="rotate(-180 64.83 82.36)" />
                                            <rect class="gm-icon-dashboard-cls-2" x="36.54" y="93.91" width="65.08" height="23.09" rx="8.5"
                                              transform="rotate(180 69.085 105.455)" />
                                            <rect class="gm-icon-dashboard-cls-2" x="12.52" y="47.72" width="65.08" height="23.09" rx="8.5"
                                              transform="rotate(-180 45.055 59.27)" />
                                            <rect class="gm-icon-dashboard-cls-1" x="160.19" y="47.72" width="64.08" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-dashboard-cls-1" x="151.18" y="93.91" width="60.07" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-dashboard-cls-2" x="176.21" y="70.82" width="56.57" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-dashboard-cls-1" x="221.27" y="93.91" width="32.04" height="23.09" rx="8.5"
                                              transform="rotate(180 237.29 105.455)" />
                                            <path class="gm-icon-dashboard-cls-1"
                                              d="M16 70.82h-4A11.82 11.82 0 0 0 0 82.36a11.83 11.83 0 0 0 12 11.55h4a11.82 11.82 0 0 0 12-11.55 11.81 11.81 0 0 0-12-11.54z" />
                                            <rect class="gm-icon-dashboard-cls-2" x="141.67" y="47.72" width="36.04" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-dashboard-cls-2" x="108.13" y="70.82" width="36.04" height="23.09" rx="8.5" />
                                            <rect class="gm-icon-dashboard-cls-2" x="150.18" y="117" width="57.57" height="23.09" rx="8.5" />
                                            <ellipse class="gm-icon-dashboard-cls-3" cx="237.88" cy="117.46" rx="2.5" ry="2.4" />
                                            <path class="gm-icon-dashboard-cls-4"
                                              d="M178.29 31l1.21 3.78 3.95 1.17-3.95 1.17-1.21 3.79-1.22-3.79-3.94-1.17 3.94-1.17 1.22-3.78z" />
                                            <path class="gm-icon-dashboard-cls-5"
                                              d="M122.22 153.19l1.22 3.79 3.94 1.17-3.94 1.17-1.22 3.78-1.22-3.78-3.94-1.17 3.94-1.17 1.22-3.79z" />
                                            <path class="gm-icon-dashboard-cls-6"
                                              d="M197.31 81.99l1.22 3.79 3.94 1.17-3.94 1.16-1.22 3.79-1.21-3.79-3.94-1.16 3.94-1.17 1.21-3.79z" />
                                            <path class="gm-icon-dashboard-cls-7"
                                              d="M189.06 120a1 1 0 0 1-1-1v-3.85a1 1 0 0 1 2 0V119a1 1 0 0 1-1 1zM189.06 131.49a1 1 0 0 1-1-1v-3.85a1 1 0 0 1 2 0v3.85a1 1 0 0 1-1 1zM197.07 123.8h-4a1 1 0 1 1 0-1.93h4a1 1 0 1 1 0 1.93zM185.06 123.8h-4a1 1 0 1 1 0-1.93h4a1 1 0 1 1 0 1.93z" />
                                            <ellipse class="gm-icon-dashboard-cls-7" cx="189.06" cy="122.83" rx="1" ry=".96" />
                                            <path class="gm-icon-dashboard-cls-8"
                                              d="M86.94 24.7v3.84M86.94 36.23v3.85M94.94 32.39h-4M82.94 32.39h-4.01" />
                                            <ellipse class="gm-icon-dashboard-cls-4" cx="86.94" cy="32.39" rx="1" ry=".96" />
                                            <path class="gm-icon-dashboard-cls-9"
                                              d="M164.53 148.05a1.22 1.22 0 0 0 0-2.44 1.22 1.22 0 0 0 0 2.44zM203.14 99.52v-.16a.56.56 0 0 0-1.12 0v.16a.56.56 0 0 0 1.12 0zM207.49 103.29a.47.47 0 0 0-.57.73c.49.49 1.17-.4.57-.73z" />
                                            <path class="gm-icon-dashboard-cls-6" d="M36.38 112a1.6 1.6 0 0 0 0-3.19 1.6 1.6 0 0 0 0 3.19z" />
                                            <path class="gm-icon-dashboard-cls-9"
                                              d="M63.21 83.23h-.1A1.57 1.57 0 0 0 61 85.31l.05.1a1.59 1.59 0 1 0 2.18-2.18z" />
                                            <path class="gm-icon-dashboard-cls-4"
                                              d="M65.82 62.53a3.32 3.32 0 0 1-1.26 1.83A3.55 3.55 0 0 1 62 65a3.48 3.48 0 0 1-2.32-1.28 3.27 3.27 0 0 1-.68-2.47A3.34 3.34 0 0 1 60.3 59a3.56 3.56 0 0 1 2.59-.67 3.39 3.39 0 0 1 3 3.78 2.83 2.83 0 0 1-.07.42zM61 61.33a1 1 0 0 0 0 .17 1.44 1.44 0 0 0 .3 1.07 1.52 1.52 0 0 0 1 .55 1.5 1.5 0 0 0 1.11-.29 1.4 1.4 0 0 0 .58-.95 1.45 1.45 0 0 0-1.29-1.62 1.49 1.49 0 0 0-1.7 1.07z" />
                                            <ellipse class="gm-icon-dashboard-cls-10" cx="201.21" cy="60.74" rx="2.5" ry="2.4" />
                                            <path class="gm-icon-dashboard-cls-8"
                                              d="M53.9 115.14v3.85M53.9 126.68v3.85M61.9 122.83h-4M49.9 122.83h-4.01" />
                                            <ellipse class="gm-icon-dashboard-cls-5" cx="53.9" cy="122.83" rx="1" ry=".96" />
                                            <path class="gm-icon-dashboard-cls-7" d="M53.9 114.18a1 1 0 0 0-1 1V117h2v-1.86a1 1 0 0 0-1-.96z" />
                                            <circle class="gm-icon-dashboard-cls-3" cx="6" cy="50.2" r="2.64" />
                                            <path class="gm-icon-dashboard-cls-4"
                                              d="M68.94 145.04l-1.28-4.16-4.16-1.27 4.15-1.29 1.28-4.16 1.29 4.16 4.16 1.28-4.16 1.28-1.28 4.16z" />
                                            <path class="gm-icon-dashboard-cls-5"
                                              d="M127.96 10.88l-1.29-4.16-4.15-1.28 4.15-1.28L127.95 0l1.29 4.16 4.15 1.27-4.15 1.29-1.28 4.16z" />
                                            <path class="gm-icon-dashboard-cls-6"
                                              d="M48.83 89.09l-1.29-4.15-4.16-1.28 4.16-1.29 1.28-4.16 1.28 4.16 4.16 1.28-4.15 1.28-1.28 4.16z" />
                                            <path class="gm-icon-dashboard-cls-7"
                                              d="M57.49 47.43a1.05 1.05 0 0 1 1.06 1v4.27a1.06 1.06 0 1 1-2.11 0v-4.22a1 1 0 0 1 1.05-1.05zM57.48 34.76a1.06 1.06 0 0 1 1.06 1.06V40a1.06 1.06 0 0 1-2.11 0v-4.18a1.05 1.05 0 0 1 1.05-1.06zM49.05 43.21h4.22a1.06 1.06 0 0 1 0 2.11h-4.22a1.06 1.06 0 1 1 0-2.11zM61.71 43.2h4.22a1.06 1.06 0 1 1 0 2.11h-4.22a1.06 1.06 0 0 1 0-2.11z" />
                                            <circle class="gm-icon-dashboard-cls-7" cx="57.49" cy="44.26" r="1.06" />
                                            <path class="gm-icon-dashboard-cls-8"
                                              d="M169.52 136.61l-.01-4.22M169.51 123.94l-.01-4.22M161.07 128.17h4.22M173.73 128.16h4.22" />
                                            <circle class="gm-icon-dashboard-cls-4" cx="169.51" cy="128.17" r="1.06" />
                                            <path class="gm-icon-dashboard-cls-9"
                                              d="M83.34 19.12a1.22 1.22 0 0 0 0-2.44 1.22 1.22 0 0 0 0 2.44zM42.69 69.86V70a.57.57 0 0 0 1.13 0v-.17a.57.57 0 0 0-1.13 0zM38.09 65.69h.07a.29.29 0 0 0 .33 0h.07a.47.47 0 1 0-.47 0z" />
                                            <path class="gm-icon-dashboard-cls-6" d="M218.54 59.33a1.6 1.6 0 0 0 0-3.19 1.6 1.6 0 0 0 0 3.19z" />
                                            <path class="gm-icon-dashboard-cls-9"
                                              d="M190.31 87.47l.1.06a1.57 1.57 0 0 0 2.13-2.13v-.11a1.59 1.59 0 1 0-2.18 2.18z" />
                                            <path class="gm-icon-dashboard-cls-4"
                                              d="M187.53 110.33a3.61 3.61 0 0 1 1.33-2 3.69 3.69 0 0 1 5.91 3.41 3.69 3.69 0 0 1-7.32-1 3.39 3.39 0 0 1 .08-.41zm5.11 1.31a1.06 1.06 0 0 0 0-.19 1.6 1.6 0 0 0-.32-1.17 1.55 1.55 0 0 0-1.05-.6 1.6 1.6 0 0 0-1.17.31 1.59 1.59 0 1 0 2.5 1.65z" />
                                            <circle class="gm-icon-dashboard-cls-10" cx="44.73" cy="112.42" r="2.64" />
                                            <path class="gm-icon-dashboard-cls-8"
                                              d="M200.06 52.58l-.01-4.23M200.04 39.91v-4.22M191.61 44.14h4.22M204.27 44.13h4.22" />
                                            <circle class="gm-icon-dashboard-cls-5" cx="200.05" cy="44.13" r="1.06" />
                                            <path class="gm-icon-dashboard-cls-7"
                                              d="M200.06 53.63a1 1 0 0 0 1.05-1.05v-2H199v2a1.05 1.05 0 0 0 1.06 1.05z" />
                                            <rect class="gm-icon-dashboard-cls-11" x="118.63" y="106.54" width="26.62" height="35.24" rx="6.21" />
                                            <circle class="gm-icon-dashboard-cls-11" cx="131.86" cy="84.1" r="26.9" />
                                            <path class="gm-icon-dashboard-cls-2"
                                              d="M154.26 86a28.15 28.15 0 1 0-42.18 24.38v27.75l4 7.57h19.32l4.74-7.57v-27.76A28.12 28.12 0 0 0 154.26 86z" />
                                            <path class="gm-icon-dashboard-cls-12" d="M140.14 138.13l-4.74 7.56h-19.33l-3.99-7.56h28.06z" />
                                            <path
                                              d="M136.44 147.56h-21.5l-4.73-9v-27.13a30 30 0 0 1-7.07-44.77l2.86 2.41a26.26 26.26 0 0 0 7 39.68l.94.54v28.37l3.24 6.16h17.18l3.9-6.23v-28.3l.93-.54a26.27 26.27 0 0 0-23-47.12l-1.41-3.47A30 30 0 0 1 142 111.43v27.23z"
                                              fill="#0f4470" />
                                            <path class="gm-icon-dashboard-cls-14"
                                              d="M108.7 66.3l-2.7-2.63a17.14 17.14 0 0 1 4.57-3.4l.53-.3 1.9 3.23-.54.31a13.67 13.67 0 0 0-3.76 2.79z" />
                                            <path class="gm-icon-dashboard-cls-15"
                                              d="M107.84 123.49h36.53v3.74h-36.53zM107.84 129.87h36.53v3.74h-36.53zM107.84 136.25h36.53v3.74h-36.53z" />
                                            <path class="gm-icon-dashboard-cls-12" d="M124.03 46.36h3.74v7.9h-3.74z" />
                                            <path class="gm-icon-dashboard-cls-12" transform="rotate(-70.06 138.187 52.412)"
                                              d="M134.24 50.54h7.9v3.74h-7.9z" />
                                            <path class="gm-icon-dashboard-cls-12" transform="rotate(-50.07 149.032 58.573)"
                                              d="M145.08 56.7h7.9v3.74h-7.9z" />
                                            <path class="gm-icon-dashboard-cls-12" transform="rotate(-30.07 157.107 68.065)"
                                              d="M153.16 66.19h7.9v3.74h-7.9z" />
                                            <path class="gm-icon-dashboard-cls-12" transform="rotate(-10.12 161.512 79.75)"
                                              d="M157.52 77.88h7.9v3.74h-7.9z" />
                                            <path class="gm-icon-dashboard-cls-12" transform="rotate(-80.15 161.575 91.138)"
                                              d="M159.7 87.19h3.74v7.9h-3.74z" />
                                            <path class="gm-icon-dashboard-cls-12" transform="rotate(-60.2 157.393 103.971)"
                                              d="M155.54 100.02h3.74v7.9h-3.74z" />
                                            <path class="gm-icon-dashboard-cls-12" transform="rotate(-40.2 149.489 113.594)"
                                              d="M147.61 109.64h3.74v7.9h-3.74z" />
                                            <path class="gm-icon-dashboard-cls-12" transform="rotate(-50.34 103.306 114.079)"
                                              d="M99.36 112.21h7.9v3.74h-7.9z" />
                                            <path class="gm-icon-dashboard-cls-12" transform="rotate(-30.34 95.168 104.614)"
                                              d="M91.24 102.75h7.9v3.74h-7.9z" />
                                            <path class="gm-icon-dashboard-cls-12" transform="rotate(-10.43 90.778 92.966)"
                                              d="M86.83 91.09h7.9v3.74h-7.9z" />
                                            <path class="gm-icon-dashboard-cls-12" transform="rotate(-80.44 90.614 80.493)"
                                              d="M88.75 76.54h3.74v7.9h-3.74z" />
                                            <path class="gm-icon-dashboard-cls-12" transform="rotate(-60.48 94.726 68.723)"
                                              d="M92.85 64.77h3.74v7.9h-3.74z" />
                                            <path class="gm-icon-dashboard-cls-12" transform="rotate(-40.49 102.608 59.066)"
                                              d="M100.73 55.11h3.74v7.9h-3.74z" />
                                            <path class="gm-icon-dashboard-cls-12" transform="rotate(-20.51 113.34 52.671)"
                                              d="M111.44 48.72h3.74v7.9h-3.74z" />
                                            <path class="gm-icon-dashboard-cls-14"
                                              d="M145.67 84.6a19.83 19.83 0 0 0-19.83-19.84c7.17 6.07 19.83 19.84 0 39.67a19.83 19.83 0 0 0 19.83-19.83z" />
                                          </svg></span>
                                        <h2 class="reveal reveal-full">Intuitive Dashboard</h2>
                                        <p class="reveal reveal-full">
                                          All the crypto mining data and charts that you need, when you need them</p>
                                      </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4" data-aos="zoom-in-down" data-aos-duration="2000">
                                      <div>
                                        <span class="reveal reveal-full"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.78 154.8"
                                            id="gm-icon-secure">
                                            <defs>
                                              <style>
                                              .gm-icon-secure-cls-2,
                                              .gm-icon-secure-cls-3,
                                              .gm-icon-secure-cls-4 {
                                                fill: #e2e3e4
                                              }

                                              .gm-icon-secure-cls-2,
                                              .gm-icon-secure-cls-3 {
                                                stroke: #e3e4e5
                                              }

                                              .gm-icon-secure-cls-11,
                                              .gm-icon-secure-cls-18,
                                              .gm-icon-secure-cls-2,
                                              .gm-icon-secure-cls-24,
                                              .gm-icon-secure-cls-26,
                                              .gm-icon-secure-cls-3 {
                                                stroke-miterlimit: 10
                                              }

                                              .gm-icon-secure-cls-11,
                                              .gm-icon-secure-cls-18,
                                              .gm-icon-secure-cls-3 {
                                                stroke-width: 2px
                                              }

                                              .gm-icon-secure-cls-18,
                                              .gm-icon-secure-cls-24,
                                              .gm-icon-secure-cls-26,
                                              .gm-icon-secure-cls-3 {
                                                stroke-linecap: round
                                              }

                                              .gm-icon-secure-cls-5 {
                                                fill: #e3e4e5
                                              }

                                              .gm-icon-secure-cls-7 {
                                                fill: #e8eef1
                                              }

                                              .gm-icon-secure-cls-8 {
                                                fill: #fff
                                              }

                                              .gm-icon-secure-cls-24 {
                                                fill-rule: evenodd
                                              }

                                              .gm-icon-secure-cls-11,
                                              .gm-icon-secure-cls-18,
                                              .gm-icon-secure-cls-24,
                                              .gm-icon-secure-cls-26 {
                                                fill: none
                                              }

                                              .gm-icon-secure-cls-11 {
                                                stroke: #faa934
                                              }

                                              .gm-icon-secure-cls-13 {
                                                fill: #faa934
                                              }

                                              .gm-icon-secure-cls-14 {
                                                fill: #8bc9ed
                                              }

                                              .gm-icon-secure-cls-15 {
                                                fill: #fbb147
                                              }

                                              .gm-icon-secure-cls-16 {
                                                fill: #95cef0
                                              }

                                              .gm-icon-secure-cls-17 {
                                                fill: #104470
                                              }

                                              .gm-icon-secure-cls-18 {
                                                stroke: #8bc9ed
                                              }

                                              .gm-icon-secure-cls-19 {
                                                fill: #094b7c
                                              }

                                              .gm-icon-secure-cls-24 {
                                                stroke: #103a56;
                                                stroke-width: 3.42px
                                              }

                                              .gm-icon-secure-cls-26 {
                                                stroke: #fcba63;
                                                stroke-width: 4px
                                              }
                                              </style>
                                              <linearGradient id="linear-gradient" x1="115.66" y1="96.13" x2="160.15" y2="109.74"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#808184" />
                                                <stop offset="1" stop-color="#123c63" stop-opacity="0" />
                                              </linearGradient>
                                            </defs>
                                            <circle cx="11.58" cy="51.89" r="2.64" stroke-width="2" stroke-miterlimit="10" stroke="#e3e4e5"
                                              fill="#e2e3e4" />
                                            <path class="gm-icon-secure-cls-2"
                                              d="M74.52 146.74l-1.29-4.16-4.15-1.28 4.15-1.28 1.28-4.16 1.28 4.16 4.16 1.27-4.15 1.29-1.28 4.16zM133.54 12.57l-1.29-4.15-4.16-1.28 4.16-1.28 1.28-4.16 1.28 4.15 4.16 1.28-4.16 1.29-1.27 4.15zM54.41 90.79l-1.29-4.16-4.16-1.28 4.16-1.28 1.28-4.16 1.28 4.16 4.16 1.27-4.16 1.29-1.27 4.16zM63.07 49.12a1.05 1.05 0 0 1 1.05 1.06v4.22a1.06 1.06 0 0 1-2.11 0v-4.22a1.07 1.07 0 0 1 1.06-1.06zM63.06 36.46a1 1 0 0 1 1 1v4.22a1.06 1.06 0 1 1-2.11 0v-4.17a1.05 1.05 0 0 1 1.11-1.05zM54.62 44.91h4.22a1.06 1.06 0 0 1 0 2.12h-4.22a1.06 1.06 0 0 1 0-2.11zM67.29 44.9h4.22a1.06 1.06 0 0 1 0 2.11h-4.22a1.06 1.06 0 1 1 0-2.11z" />
                                            <circle class="gm-icon-secure-cls-2" cx="63.07" cy="45.96" r="1.06" />
                                            <path class="gm-icon-secure-cls-3"
                                              d="M170.87 153.57v-4.22M170.86 140.9v-4.22M162.42 145.13h4.22M175.09 145.12h4.22" />
                                            <circle class="gm-icon-secure-cls-2" cx="170.86" cy="145.12" r="1.06" />
                                            <path class="gm-icon-secure-cls-5" d="M88.91 20.82a1.22 1.22 0 0 0 0-2.44 1.22 1.22 0 0 0 0 2.44z" />
                                            <path class="gm-icon-secure-cls-4" d="M48.83 71.55v.18" />
                                            <path class="gm-icon-secure-cls-5"
                                              d="M48.27 71.55v.18a.57.57 0 0 0 1.13 0v-.18a.57.57 0 0 0-1.13 0z" />
                                            <path class="gm-icon-secure-cls-4" d="M43.9 67v.18" />
                                            <path class="gm-icon-secure-cls-5"
                                              d="M43.66 67.39h.08a.32.32 0 0 0 .33 0h.07a.47.47 0 1 0-.48 0zM224.12 61a1.6 1.6 0 0 0 0-3.19 1.6 1.6 0 0 0 0 3.19z" />
                                            <path class="gm-icon-secure-cls-4" d="M196.69 87.79l.17.18" />
                                            <path class="gm-icon-secure-cls-5"
                                              d="M195.88 89.17l.11.06a1.57 1.57 0 0 0 2.13-2.14l-.06-.1a1.59 1.59 0 1 0-2.18 2.18z" />
                                            <path class="gm-icon-secure-cls-2"
                                              d="M193.11 112a3.71 3.71 0 0 1 4.06-2.75 3.72 3.72 0 0 1 3.18 4.15 3.74 3.74 0 0 1-1.42 2.45 3.66 3.66 0 0 1-2.73.73 3.71 3.71 0 0 1-3.18-4.15 3.29 3.29 0 0 1 .09-.43zm5.11 1.31a1.25 1.25 0 0 0 0-.19 1.54 1.54 0 0 0-.31-1.17 1.57 1.57 0 0 0-1.05-.6 1.54 1.54 0 0 0-1.17.31 1.58 1.58 0 1 0 2.5 1.65z" />
                                            <circle cx="50.31" cy="114.12" r="2.64" stroke-width="2" stroke-miterlimit="10" stroke="#e3e4e5"
                                              fill="#e2e3e4" />
                                            <path class="gm-icon-secure-cls-3"
                                              d="M205.63 54.27v-4.22M205.62 41.61v-4.22M197.18 45.84l4.22-.01M209.85 45.83l4.22-.01" />
                                            <circle class="gm-icon-secure-cls-2" cx="205.62" cy="45.83" r="1.06" />
                                            <path class="gm-icon-secure-cls-2"
                                              d="M205.63 55.33a1.06 1.06 0 0 0 1.06-1.06v-2h-2.12v2a1.05 1.05 0 0 0 1.06 1.06z" />
                                            <g>
                                              <circle class="gm-icon-secure-cls-7" cx="121.82" cy="86.36" r="66.62" />
                                              <rect class="gm-icon-secure-cls-7" x="25.22" y="109.2" width="57.1" height="22.84" rx="11.42"
                                                transform="rotate(-180 53.77 120.62)" />
                                              <rect class="gm-icon-secure-cls-7" x="33.79" y="63.52" width="55.68" height="22.84" rx="11.42"
                                                transform="rotate(180 61.625 74.94)" />
                                              <rect class="gm-icon-secure-cls-8" x="34.74" y="86.36" width="61.86" height="22.84" rx="11.42"
                                                transform="rotate(180 65.67 97.78)" />
                                              <rect class="gm-icon-secure-cls-8" x="11.9" y="40.68" width="61.86" height="22.84" rx="11.42"
                                                transform="rotate(180 42.825 52.1)" />
                                              <rect class="gm-icon-secure-cls-7" x="152.28" y="40.68" width="60.91" height="22.84" rx="11.42" />
                                              <rect class="gm-icon-secure-cls-7" x="143.71" y="86.36" width="57.1" height="22.84" rx="11.42" />
                                              <rect class="gm-icon-secure-cls-8" x="167.5" y="63.52" width="53.77" height="22.84" rx="11.42" />
                                              <rect class="gm-icon-secure-cls-7" x="210.33" y="86.36" width="30.46" height="22.84" rx="11.42"
                                                transform="rotate(-180 225.555 97.78)" />
                                              <rect class="gm-icon-secure-cls-7" y="63.52" width="26.65" height="22.84" rx="11.42" />
                                              <rect class="gm-icon-secure-cls-8" x="134.67" y="40.68" width="34.26" height="22.84" rx="11.42" />
                                              <rect class="gm-icon-secure-cls-8" x="102.79" y="63.52" width="34.26" height="22.84" rx="11.42" />
                                              <rect class="gm-icon-secure-cls-8" x="142.76" y="109.2" width="54.72" height="22.84" rx="11.42" />
                                              <g opacity=".8">
                                                <path
                                                  d="M165.36 47.64a3.57 3.57 0 0 0-3.5-3.35c-3-.06-6.07-.09-9.16-.19 1.82 19.3 10.32 33.47 4.45 49.84-6.49 18.11-35.07 31.67-41.76 34.49a3.58 3.58 0 0 1-2.69 0 128.14 128.14 0 0 0 12.77 6.41 3.58 3.58 0 0 0 2.8 0c6.7-2.82 35.28-16.39 41.77-34.49 6.16-17.15-3.52-31.91-4.68-52.71z"
                                                  opacity=".5" fill-rule="evenodd" fill="#9bbecf" />
                                              </g>
                                              <circle class="gm-icon-secure-cls-11" cx="114.99" cy="128.7" r="2.38" />
                                              <circle cx="83.86" cy="94.97" r="2.38" stroke-width="3" stroke="#faa934" fill="none"
                                                stroke-miterlimit="10" />
                                              <path class="gm-icon-secure-cls-13"
                                                d="M180 69.66a3.81 3.81 0 0 1-.43-7.59 3.81 3.81 0 0 1 3.43 6.14 3.77 3.77 0 0 1-2.54 1.42 3.44 3.44 0 0 1-.46.03zm0-4.76h-.11a.92.92 0 0 0-.63.35.94.94 0 0 0-.2.7 1 1 0 0 0 .35.64.94.94 0 0 0 .7.2 1 1 0 0 0 .64-.36.94.94 0 0 0 .2-.7.93.93 0 0 0-.36-.63.91.91 0 0 0-.59-.2z" />
                                              <path class="gm-icon-secure-cls-14"
                                                d="M169.47 40.31l1.16 3.75 3.75 1.15-3.75 1.16-1.16 3.74-1.15-3.74-3.75-1.16 3.75-1.15 1.15-3.75z" />
                                              <path class="gm-icon-secure-cls-13"
                                                d="M111.42 30.79l1.16 3.75 3.74 1.16-3.74 1.15-1.16 3.75-1.15-3.75-3.75-1.15 3.75-1.16 1.15-3.75z" />
                                              <path class="gm-icon-secure-cls-15"
                                                d="M116.18 145l1.15 3.75 3.75 1.15-3.75 1.16-1.15 3.74-1.16-3.74-3.74-1.16 3.74-1.15 1.16-3.75z" />
                                              <path class="gm-icon-secure-cls-16"
                                                d="M90.48 123.11l1.16 3.75 3.74 1.15-3.74 1.16-1.16 3.74-1.15-3.74-3.75-1.16 3.75-1.15 1.15-3.75z" />
                                              <path class="gm-icon-secure-cls-13"
                                                d="M43.85 68.86L45 72.61l3.75 1.15L45 74.92l-1.15 3.75-1.16-3.75-3.74-1.16 3.74-1.15 1.16-3.75z" />
                                              <path class="gm-icon-secure-cls-14"
                                                d="M155.2 117.4l1.15 3.75 3.75 1.15-3.75 1.16-1.15 3.74-1.16-3.74-3.74-1.16 3.74-1.15 1.16-3.75z" />
                                              <path class="gm-icon-secure-cls-13"
                                                d="M187.56 74.57l1.15 3.75 3.75 1.15-3.75 1.16-1.15 3.75-1.16-3.75-3.74-1.16 3.74-1.15 1.16-3.75z" />
                                              <path class="gm-icon-secure-cls-17"
                                                d="M179.72 112.12a1 1 0 0 1-.95-1v-3.81a.95.95 0 1 1 1.9 0v3.81a1 1 0 0 1-.95 1zM179.72 123.53a1 1 0 0 1-.95-1v-3.8a1 1 0 1 1 1.9 0v3.8a1 1 0 0 1-.95 1zM187.33 115.92h-3.81a.95.95 0 0 1 0-1.9h3.81a.95.95 0 0 1 0 1.9zM175.91 115.92h-3.8a.95.95 0 0 1 0-1.9h3.8a1 1 0 1 1 0 1.9z" />
                                              <circle class="gm-icon-secure-cls-17" cx="179.72" cy="114.97" r=".95" />
                                              <path class="gm-icon-secure-cls-18"
                                                d="M82.64 17.9v3.8M82.64 29.31v3.81M90.25 25.51h-3.8M78.84 25.51h-3.81" />
                                              <circle class="gm-icon-secure-cls-14" cx="82.64" cy="25.51" r=".95" />
                                              <path class="gm-icon-secure-cls-19"
                                                d="M159.1 34a.66.66 0 0 0 0-1.32.66.66 0 0 0 0 1.32zM173.05 55.48a.05.05 0 0 0 0-.1.05.05 0 0 0 0 .1zM54.72 91a.66.66 0 0 0 0-1.31.66.66 0 0 0 0 1.31zM154.42 142.19h.15a.28.28 0 0 0 0-.54l-.15-.05c-.52-.16-.53.8 0 .63zM156.4 139.92a1.22 1.22 0 0 0 0-2.43 1.22 1.22 0 0 0 0 2.43zM185 99.67a.94.94 0 0 0 0-1.88.94.94 0 0 0 0 1.88zM193.13 91.91v-.16a.57.57 0 0 0-1.13 0v.16a.57.57 0 0 0 1.13 0zM197.24 95.63a.47.47 0 0 0-.57.74c.49.49 1.17-.42.57-.74z" />
                                              <path class="gm-icon-secure-cls-13"
                                                d="M136.41 137.6a1.6 1.6 0 0 0 0-3.19 1.6 1.6 0 0 0 0 3.19zM34.58 104.29a1.6 1.6 0 0 0 0-3.19 1.6 1.6 0 0 0 0 3.19z" />
                                              <path class="gm-icon-secure-cls-19"
                                                d="M60.13 75.78h-.1a1.57 1.57 0 0 0-2.13 2.14l.1.08a1.59 1.59 0 1 0 2.18-2.18zM81.69 49.73h-.16a.81.81 0 0 0-.8.8v.16a.94.94 0 1 0 .94-.94zM138.32 37.84a1.13 1.13 0 0 0 0-2.25 1.13 1.13 0 0 0 0 2.25z" />
                                              <path class="gm-icon-secure-cls-14"
                                                d="M179.72 106.41a1 1 0 0 0-.95 1v1.84h1.9v-1.84a1 1 0 0 0-.95-1z" />
                                              <path class="gm-icon-secure-cls-13"
                                                d="M82.56 63.88a3.33 3.33 0 0 1-3.67 2.48A3.34 3.34 0 0 1 76 62.62a3.32 3.32 0 0 1 1.28-2.21 3.28 3.28 0 0 1 2.46-.65 3.32 3.32 0 0 1 2.86 3.73 3.91 3.91 0 0 1-.04.39zM78 62.7a.51.51 0 0 0 0 .17 1.43 1.43 0 0 0 1.22 1.6A1.43 1.43 0 1 0 78 62.7z" />
                                              <path class="gm-icon-secure-cls-14"
                                                d="M79.77 59.76a3.28 3.28 0 0 0-2.46.65A3.32 3.32 0 0 0 76 62.62a2.38 2.38 0 0 0 0 .38 10.91 10.91 0 0 0 1.89.12 1 1 0 0 1 0-.25.51.51 0 0 1 0-.17 1.42 1.42 0 0 1 2.77 0 11.62 11.62 0 0 0 1.79-.65 3.31 3.31 0 0 0-2.68-2.29z" />
                                              <circle class="gm-icon-secure-cls-11" cx="169.96" cy="89.73" r="2.38" />
                                              <path class="gm-icon-secure-cls-13" d="M162.9 76.86a.66.66 0 0 0 0-1.31.66.66 0 0 0 0 1.31z" />
                                              <path class="gm-icon-secure-cls-18"
                                                d="M51.23 107.36v3.81M51.23 118.78v3.8M58.84 114.97h-3.8M47.43 114.97h-3.8" />
                                              <circle class="gm-icon-secure-cls-15" cx="51.23" cy="114.97" r=".95" />
                                              <path class="gm-icon-secure-cls-17"
                                                d="M51.23 106.41a1 1 0 0 0-.95 1v1.84h1.91v-1.84a1 1 0 0 0-.96-1z" />
                                              <path class="gm-icon-secure-cls-16"
                                                d="M82.91 95.08a.94.94 0 0 1 .2-.7l.09-.08a11.24 11.24 0 0 0-1.2-2.62 3.5 3.5 0 0 0-1.09.94 3.79 3.79 0 0 0 2.83 6.14v-1a11.88 11.88 0 0 0-.17-1.9 1.14 1.14 0 0 1-.31-.16 1 1 0 0 1-.35-.62z" />
                                              <path class="gm-icon-secure-cls-19" d="M125.63 119.32a.76.76 0 0 0 0-1.52.76.76 0 0 0 0 1.52z" />
                                              <path
                                                d="M121.34 37.7c-11.15 6.85-23.49 6.21-35 6.45a3.57 3.57 0 0 0-3.51 3.35C81.7 68.3 72 83.06 78.17 100.25c6.49 18.1 35.08 31.67 41.77 34.49a3.61 3.61 0 0 0 2.81 0c6.69-2.82 35.28-16.39 41.77-34.49 6.16-17.19-3.53-31.95-4.68-52.75a3.58 3.58 0 0 0-3.51-3.35c-11.49-.24-23.83.4-34.99-6.45z"
                                                fill-rule="evenodd" fill="#fff" />
                                              <path
                                                d="M159.84 47.5a3.58 3.58 0 0 0-3.51-3.35c-3-.06-6.07-.09-9.16-.19 1.82 19.3 10.33 33.47 4.46 49.84-6.49 18.11-35.08 31.67-41.77 34.49a3.58 3.58 0 0 1-2.69 0 129.26 129.26 0 0 0 12.77 6.41 3.61 3.61 0 0 0 2.81 0c6.69-2.82 35.28-16.39 41.77-34.49 6.16-17.15-3.52-31.91-4.68-52.71z"
                                                fill="#d3d3d3" opacity=".5" fill-rule="evenodd" />
                                              <path d="M129.82 81.71a7.44 7.44 0 0 1-4.33 7.14s.59 5.06-.66 6.68a3.74 3.74 0 0 1-3.53 1.62v-15.9z"
                                                fill="#b9babb" fill-rule="evenodd" />
                                              <path d="M166.17 79.54h-45.44v17l6.81 35.22s40.9-13.59 38.63-52.22z" opacity=".22"
                                                fill="url(#linear-gradient)" />
                                              <path class="gm-icon-secure-cls-24"
                                                d="M81.84 72.12c0 .2-.09.4-.13.61M158.91 63.05a105.59 105.59 0 0 1-2.11-15.55 3.42 3.42 0 0 0-3.22-3.35c-10.59-.24-22 .4-32.24-6.45-10.27 6.85-21.64 6.21-32.23 6.45a3.43 3.43 0 0 0-3.23 3.35 122 122 0 0 1-3.08 20.19M161.07 73.3c-.26-1.27-.34-1.74-.62-3M148.06 118.27c5.78-5.17 10.83-11.28 13.05-18a36.56 36.56 0 0 0 1.75-8.72c.1-1.28.14-2.56.13-3.83 0-1.82-.16-3.63-.37-5.45-.11-1-.25-1.91-.4-2.88M139.92 124.69q1.74-1.23 3.5-2.58M80.81 77.29c-1.37 7.69-1.84 15.07.76 23 6 18.1 32.32 31.67 38.48 34.49a3.08 3.08 0 0 0 2.59 0 113.76 113.76 0 0 0 11.83-6.45" />
                                              <path
                                                d="M121.72 98.2h-1.66a3 3 0 0 1-3-3v-9s-3.23-3.25-3.73-4.66a10.23 10.23 0 0 1 0-5.16 7.48 7.48 0 0 1 7.47-7.46h1.2a7.48 7.48 0 0 1 7.46 7.46 9.87 9.87 0 0 1 0 5.3c-.58 1.51-4.35 4.79-4.35 4.79v8.33a3.41 3.41 0 0 1-3.39 3.4z"
                                                fill="#cccbcb" stroke="#0f4470" stroke-width="3" stroke-miterlimit="10" />
                                              <path class="gm-icon-secure-cls-26" d="M118.03 81.29l16.9.14M121.32 91.69l-.13-9.89" />
                                              <path
                                                d="M150.83 81.43c-.53 6.84-4.11 11.18-8.49 8.54-2.87-1.72-5.23-2.85-5.71-8.57-.57-6.78 4-9.06 6.25-10.19 4.19-2.1 8.5 3.22 7.95 10.22z"
                                                stroke="#fcba63" stroke-width="4" fill="none" fill-rule="evenodd" stroke-linecap="round"
                                                stroke-miterlimit="10" />
                                            </g>
                                          </svg></span>
                                        <h2 class="reveal reveal-full">Secure &amp; Private</h2>
                                        <p class="reveal reveal-full">
                                          We support cryptocurrencies that promote privacy, so we strive to keep collected user data to a minimum and only ask for information that is mandatory from a regulatory perspective              </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </div>

                            <div id="get-started" class="gm-why-mining-5">
                              <div class="container">
                                <div class="row">

                                  <div class="col-sm-5 col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-1">
                                    <h1>How would you like to get started?</h1>
                                  </div>

                                  <div class="col-sm-7 col-md-5 col-lg-4">
                                    <div class="link-block">
                                      <div>
                                        <a href="/register" title="Create an account.">
                                          <strong>Create an account.</strong>
                                          <span>Join our growing mining family!</span>
                                        </a>
                                      </div>

                                      <div>
                                        <a href="/#about" title="Get to know us better.">
                                          <strong>Get to know us better.</strong>
                                          <span>Read about our vision!</span>
                                        </a>
                                      </div>

                                      <div>
                                        <a href="/register" title="See our packages.">
                                          <strong>See our packages.</strong>
                                          <span>Each algorithm and coin has its own beauty!</span>
                                        </a>
                                      </div>

                                      <div>
                                        <a href="datacenters.html" title="Learn more about our tech.">
                                          <strong>Learn more about our tech.</strong>
                                          <span>The Enigma Datacenter and Radiant Tech.</span>
                                        </a>
                                      </div>

                                      <div>
                                        <a href="customer-sevice.html" title="See what we can do for you!">
                                          <strong>See what we can do for you!</strong>
                                          <span>Any questions left?                Get in touch with our customer service.</span>
                                        </a>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>



@guest
                            @if (Route::has('register'))
                            <div id="gm-home-4" class="gh4">
                          <div class="container">
                            <h2>Try CryptoBitNet today!</h2>
                            <a href="/register" title="Sign up now" class="btn btn-default">Sign up now</a>
                          </div>
                          <img loading="lazy" src="img/cry.jpg" style="max-height: 250px;" data-speed="0.8" class="img-parallax" alt="Try CryptoBitNet today image" title="Try CryptoBitNet today image" />
                        </div>
                                    @endif
                                    @endguest


        </div>



    @endsection
