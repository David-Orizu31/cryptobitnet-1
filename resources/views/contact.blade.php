
   @extends('layouts.app')

@section('content')

   
</header>

<div class="container-fluid">
<div id="gm-contact-1">
    <div class="container">
        <h1>Contact</h1>
            </div>
</div>

<div id="gm-contact-2">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 gm-contact-info">
                <h2><svg class="gm-icon gm-icon-group"><use xlink:href="img/sprite.svg#gm-icon-group"></use></svg>General information</h2>
                <h3>Our office</h3>
                <address>
                    CryptoBitNet Ltd.<br>
                    N/A
                            210 Midhraun 80<br/>
                            Garðabær<br/>
                            Iceland
                                   </address>
                                <h3>Operational address</h3>
                <address>
                    Sjonarholl 16<br>
                    235 Reykjanesbaer<br>
                    Iceland<br>
                </address>
                <!-- <h3>Sales Manager</h3>
                <p>For customers who want to make a purchase not contained in pricing packages contact executive sales manager directly please click <a href="/contact-sales" title="Contact sales | CryptoBitNet">here</a> or send e-mail to support@cryptobitnet.com</p>

                <h3>Customer Service</h3> -->
                <address>Email: support@cryptobitnet.com<br>
                                        Average response time: within 1 business day.<br>
                    However, depending on the volume of requests, the response time may occasionally be longer.<br>
                    Check out our <a href="customer-service.html" title="Customer service center | CryptoBitNet">Customer Service</a> section<br><br>
                      <!--                    --><!--                    --><!--                      --><!--                    -->                    <br>
                                    </address>
            </div>
        </div>
    </div>
</div>

</div>


<!-- <a id="yotpo_testimonials_btn" class="yotpo-testimonials yotpo-testimonials-btn" role="button" data-position="right" href="#yotpo-testimonials" style="top: 305px; z-index: 799;"> <span>★&nbsp;Reviews</span> </a> -->



<script type="text/javascript">
    function init() {
        var myVideo = document.getElementById("videobcg");
        myVideo.addEventListener('ended', loopVideo, true);
    }

    function loopVideo() {
        var myVideo = document.getElementById("videobcg");
        myVideo.play();
    }
</script>

<script type="text/javascript">
$(document).ready(function() {
  //var parallax2 = document.getElementById("gm-home-4");
  //var parallax3 = document.getElementById("gm-home-8");
  var speed = -8;

  function isScrolledIntoView(elem) {
    if ($(elem).length == 0) {
      return false;
    }
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();
    //  return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop)); //try it, will only work for text
    return (docViewBottom >= elemTop && docViewTop <= elemBottom);
  }
  if ($(window).width() > 1280) {
    window.onscroll = function () {
      var yOffset = window.pageYOffset;
      //parallax.style.backgroundPosition = "0 " + (yOffset / speed) + "px";
      //parallax2.style.backgroundPosition = "0 " + (yOffset / speed) + "px";
      //parallax3.style.backgroundPosition = "0 " + (yOffset / speed) + "px";
    }
  }
});
</script>


<script type="text/javascript" async>
  $(function(){
    $('.img-parallax').each(function(){
      var img = $(this);
      var imgParent = $(this).parent();
      function parallaxImg () {
        var speed = img.data('speed');
        var imgY = imgParent.offset().top;
        var winY = $(this).scrollTop();
        var winH = $(this).height();
        var parentH = imgParent.innerHeight();
        var winBottom = winY + winH;

        if (winBottom > imgY && winY < imgY + parentH) {
          var imgBottom = ((winBottom - imgY) * speed);
          var imgTop = winH + parentH;
          var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 50));
        }
        img.css({
          top: imgPercent + '%',
          transform: 'translate(-50%, -' + imgPercent + '%)'
        });
      }
      $(document).on({
        scroll: function () {
          parallaxImg();
        }, ready: function () {
          parallaxImg();
        }
      });
    });
  });
</script>


<script type="text/javascript">
    $(document).ready(function () {

        $('#carousel-news').carousel({
            interval: 3500
        });

        $('#carousel-blog').carousel({
            interval: 6000
        });

        $('#carousel-testimonials').carousel({
            interval: 8000
        });

        $('#carousel-testimonials-videos').carousel({
            interval: false
        });

        /*$('#carousel-aso').carousel({
            interval: 4000
        });*/

        $('#carousel-aso .item').each(function () {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < 4; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });

        $('.btn-learn-more').on('click', function (e) {
            var offsetTop = $(window).height();
            $('html, body').stop().animate({
                scrollTop: offsetTop + 0
            }, 1000);
            e.preventDefault();
        });

                var tweets = {
          "profile": {"screenName": 'CryptoBitNet'},
          /*"id": '639041621313634304',*/
          "domId": 'gm-tweet-feed',
          "maxTweets": 10,
          "enableLinks": true,
          "showUser": false,
          "showTime": false,
          "showImages": false,
          "lang": 'en',
              "customCallback": function (tweets) {
                  var x = tweets.length;
                  var element = $('#carousel-tweet').find('.carousel-inner:first');
                  var html = '';
                  for (var n = 0; n < x; n++) {
                      if (n == 0)
                          html += '<div class="item active">' + tweets[n] + '</div>';
                      else
                          html += '<div class="item">' + tweets[n] + '</div>';
                  }
                  element.html(html);
                  $('#carousel-aso').carousel({
                      interval: 4000
                  });
              }
        };
        twitterFetcher.fetch(tweets);
            })
</script>



<link rel="stylesheet" href="slick-1.8.1/slick-1.8.1/slick/slick.min.css">
<script src="slick-1.8.1/slick-1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {

/* Logo Slider */
$('.aso-slide').slick({
infinite: true,
speed: 750,
autoplay: true,
autoplaySpeed: 4000,
slidesToShow: 6,
slidesToScroll: 1,
arrows: false,
dots: false,
responsive: [
{
breakpoint: 1680,
settings: {
  slidesToShow: 5,
  variableWidth: true,
  centerMode: true
}
},
{
breakpoint: 1200,
settings: {
  slidesToShow: 4,
  variableWidth: true,
  centerMode: true
}
},
{
breakpoint: 850,
settings: {
  slidesToShow: 3,
  variableWidth: true,
  centerMode: true
}
},
{
breakpoint: 600,
settings: {
  slidesToShow: 2,
  variableWidth: true,
  centerMode: true
}
},
{
breakpoint: 440,
settings: {
  slidesToShow: 1,
  variableWidth: false,
  centerMode: false
}
}
]
});
});






$('.main-slide-indicator').slick({
infinite: true,
/*centerMode: true,*/
speed: 450,
autoplay: true,
autoplaySpeed: 30000,
slidesToShow: 3,
slidesToScroll: 1,
dots: false,
arrows: false,
fade: false,
vertical: true,
asNavFor: '.main-slide',
focusOnSelect: true
/*,
responsive: [
{
breakpoint: 480,
settings: "unslick"
}
]*/
});
$('.main-slide').slick({
infinite: true,
speed: 450,
autoplay: true,
autoplaySpeed: 30000,
slidesToShow: 1,
slidesToScroll: 1,
asNavFor: '.main-slide-indicator',
dots: true,
arrows: true,
prevArrow: '<button type="button" class="slick-prev" aria-label="Show previous slide"><span></span></button>',
nextArrow: '<button type="button" class="slick-next" aria-label="Show next slide"><span></span></button>',
fade: true,
focusOnSelect: true
/*,
responsive: [
{
breakpoint: 480,
settings: "unslick"
}
]*/
});

</script>
         @endsection