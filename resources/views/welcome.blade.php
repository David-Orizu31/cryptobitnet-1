@extends('layouts.app')
@section('title', 'Welcome You. Please kindly surf and place your order(s)')
@section('content')



<!-- Start Pop Up Modal -->
<div id="ex1" class="modal">
    <div class="text-center">
    <img src="img/chicken&sandwiches.jpg" alt="" width="50%" class="img-responsive">
    </div>
    <div class="modal-body">
       <h4 class="">KAEDOORS LINK</h4>
      <p>Purchase your fast foods using KAEDOORS LINK sales platform.</p>
      <p>Place an order now from any fast food restaurant of your choice.</p>
      <p>Visit our <a href="/featured" class="modal-menu">menu</a> page and make your choices now.</p>
    </div>


    <div class="modal-button">
    <a href="#" rel="modal:close" class="btn btn-modal-close">Close</a>
    </div>
</div>
<!-- End Pop Up Modal -->



          <div class="banner-area ">
              <div class="single-item container">
                 <div class="banner-slider">
                     <div class="banner-1">
                         <div class="col-md-5 text-center">
                             <div class="banner-text">
                             <h2 class="text-white">Fast Delivery at your door step. Eases the stress of long distance journey.</h2>
                             <br>
                             <a href="#" class="btn btn-shop-now">Shop Now</a>
                             </div>

                         </div>
                     </div>
                 </div>
                 <div class="banner-slider">
                     <div class="banner-2">
                         <div class="col-md-5 text-center">
                             <div class="banner-text">
                                 <h2 class="text-white">Give you what you want when you want it. Diets that satisfies your pleasures.</h2>
                                 <br>
                                 <a href="#" class="btn btn-shop-now">Shop Now</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="banner-slider">
                     <div class="banner-3">
                         <div class="col-md-5 text-center">
                             <div class="banner-text">
                                 <h2 class="text-white">Links you to the best Fast Foods Restaurants that satisfies your needs.</h2>
                                 <br>
                                 <a href="#" class="btn btn-shop-now">Shop Now</a>
                             </div>
                         </div>
                     </div>
                 </div>
              </div>
          </div>

          <a href="https://api.whatsapp.com/send?phone=2348167354743&text=Digital%20Roah%20Services" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
            </a>

          <br><br>
          <div class="container">
              <h2 class="text-center featured-items">Featured items</h2>
              <br>
              <div class="featured">
                  @foreach($randomproducts as $randomproduct)
                <div>
                <a href="{{ route('products.show',   $randomproduct->product_id  ) }}" class="slider-link text-dark">
                 <div class="image-slider">
                     <img src="{{ ProductImage($randomproduct->image)}}" alt="" width="90%" class="img-responsive">
                     <p class="item-featuring text-center">{{$randomproduct->product_name}} <br>
                      <span><b>₦ {{number_format($randomproduct->product_price, 2)}}</b></span> -
                      <span><b>{{$randomproduct->company->company_name}}</b></span></p>
                 </div>
                 </a>
                </div>
@endforeach


              </div>


<br><br>



<br>
             <ul class="nav nav-tabs" id="myTab" role="tablist">
             @foreach ($categories as $category)
              <li class="nav-item {{ setActiveCategory($category->id) }}">
                <a class="nav-link " id="home-tab" data-toggle="tab" href="{{ route('home', ['category' => $category->id]) }}#home" role="tab" aria-controls="home" aria-selected="true">{{ $category->cat_name }}</a>
              </li>
              @endforeach
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active nav-tab" id="maindish-tab" data-toggle="tab" href="#maindish" role="tab" aria-controls="maindish" aria-selected="true">Main Dishes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tab" id="pastries-tab" data-toggle="tab" href="#pastries" role="tab" aria-controls="pastries" aria-selected="false">Pastries</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tab" id="chicken-tab" data-toggle="tab" href="#chicken" role="tab" aria-controls="chicken" aria-selected="false">Chicken Only</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tab" id="icecream-tab" data-toggle="tab" href="#icecream" role="tab" aria-controls="icecream" aria-selected="false">Ice Cream</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tab" id="drinks-tab" data-toggle="tab" href="#drinks" role="tab" aria-controls="drinks" aria-selected="false">Drinks</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tab" id="breakfast-tab" data-toggle="tab" href="#breakfast" role="tab" aria-controls="breakfast" aria-selected="false">Breakfast</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tab" id="beverages-tab" data-toggle="tab" href="#beverages" role="tab" aria-controls="beverages" aria-selected="false">Beverages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tab" id="sidedish-tab" data-toggle="tab" href="#sidedish" role="tab" aria-controls="sidedish" aria-selected="false">Side dish</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tab" id="localdish-tab" data-toggle="tab" href="#localdish" role="tab" aria-controls="localdish" aria-selected="false">Local dish</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tab" id="shawarma-tab" data-toggle="tab" href="#shawarma" role="tab" aria-controls="shawarma" aria-selected="false">Shawarma</a>
                  </li>
                </ul>

              <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="maindish" role="tabpanel" aria-labelledby="maindish-tab">
                <br>
                <p><b>MAIN DISH</b></p>
                <ul style="list-style-type: none; margin-left: -20px;">
                  <li>Chicken Planet Special Chicken Salad - ₦1,500</li>
                  <li>Rice and Chicken - ₦1,000 / ₦1,100 / ₦1,200</li>
                  <li>Rice and Beef - ₦600</li>
                  <li>Rice and Goat Meat - ₦600</li>
                  <li>Spaghetti - ₦400</li>
                </ul>
              </div>
              <div class="tab-pane fade" id="pastries" role="tabpanel" aria-labelledby="pastries-tab">
                <br>
                <p><b>PASTRIES</b></p>
                <ul style="list-style-type: none; margin-left: -20px;">
                 <li>Cupcake - ₦150</li>
                 <li>SpringRoll - ₦150</li>
                 <li>Burger -₦1,050</li>
                 <li>Burger with Fries - ₦1,550</li>
                 <li>Pizza Burger - ₦1,500</li>
                 <li>Chicken Pie - ₦350</li>
                 <li>Doughnut - ₦200</li>
                </ul>
              </div>
              <div class="tab-pane fade" id="chicken" role="tabpanel" aria-labelledby="chicken-tab">
                <br>
                <p><b>CHICKEN ONLY</b></p>
                <ul style="list-style-type: none; margin-left: -20px;">
                  <li>Chicken Nugget - ₦300 (per piece)</li>
                  <li>Drumsticks - ₦300 (per piece)</li>
                  <li>Brown Sugar Chicken - ₦300 (per piece)</li>
                  <li>Mozzarella Stuffed Chicken - ₦1,000</li>
                  <li>Grilled Chicken - ₦1,000</li>
                  <li>Chicken Peri peri - ₦1,800</li>
                  <li>Soy sauce chicken - ₦1,200</li>
                  <li>Roasted Chicken - ₦800 / ₦1,000</li>
                  <li>Fried Chicken - ₦600 / ₦800</li>
                  <li>Chicken Kebabs - ₦250</li>
                  <li>Millked chicken - ₦1,200</li>
                </ul>
              </div>
              <div class="tab-pane fade" id="icecream" role="tabpanel" aria-labelledby="icecream-tab">
                <br>
                <p><b>ICE CREAM</b></p>
                <ul style="list-style-type: none; margin-left: -20px;">
                  <li>250 ml - ₦250</li>
                  <li>500 ml - ₦500</li>
                  <li>720 ml - ₦650</li>
                  <li>1 litre - ₦800</li>
                </ul>
              </div>
              <div class="tab-pane fade" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
                <br>
                <p><b>DRINKS</b></p>
                <ul style="list-style-type: none; margin-left: -20px;">
                  <li>Fresh Juice - (-)</li>
                  <li>Sprite - ₦200</li>
                  <li>Pepsi - ₦200</li>
                  <li>Coke - ₦200</li>
                  <li>Mirinda - ₦200</li>
                  <li>Lipton Ice - ₦200</li>
                  <li>Hollandia - ₦600</li>
                  <li>Chivita - ₦500</li>
                  <li>Parfiet - ₦1,000</li>
                  <li>Smoothies - ₦600</li>
                </ul>
              </div>
              <div class="tab-pane fade" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab">
                <br>
                <p><b>BREAKFAST</b></p>
                <ul style="list-style-type: none; margin-left: -20px;">
                  <li>Pancake - ₦200</li>
                  <li>Toasted Bread - ₦200</li>
                  <li>Sandwich - ₦200</li>
                  <li>Cabbage Toast - ₦300</li>
                </ul>
              </div>
              <div class="tab-pane fade" id="beverages" role="tabpanel" aria-labelledby="beverages-tab">
                <br>
                <p><b>BEVERAGES</b></p>
                <ul style="list-style-type: none; margin-left: -20px;">
                  <li>Hot Choco - ₦300</li>
                  <li>Espresso - ₦200</li>
                  <li>Coffee Black - ₦200</li>
                  <li>Cinnamon tea - ₦300</li>
                  <li>Latte - ₦300</li>
                </ul>
              </div>
              <div class="tab-pane fade" id="sidedish" role="tabpanel" aria-labelledby="sidedish-tab">
                <br>
                <p><b>SIDE DISH</b></p>
                <ul style="list-style-type: none; margin-left: -20px;">
                  <li>French fries with ketch up - ₦500</li>
                  <li>Gizz dodo - ₦800</li>
                  <li>Chicken Pepper soup - ₦1,000</li>
                  <li>Moi moi - ₦200</li>
                </ul>
              </div>
              <div class="tab-pane fade" id="localdish" role="tabpanel" aria-labelledby="localdish-tab">
                <br>
                <p><b>LOCAL DISHES</b></p>
                <ul style="list-style-type: none; margin-left: -20px;">
                  <li>Assorted - ₦200</li>
                  <li>Vegetable Soup - ₦300</li>
                  <li>Egusi Soup - ₦300</li>
                  <li>Orha Soup - ₦300</li>
                  <li>Bitter leaf Soup - ₦300</li>
                  <li>White Soup - ₦300</li>
                  <li>Eba - ₦200</li>
                  <li>Semovita - ₦200</li>
                  <li>Pounded yam - ₦200</li>
                  <li>Akpu - ₦200</li>
                </ul>
              </div>
              <div class="tab-pane fade" id="shawarma" role="tabpanel" aria-labelledby="shawarma-tab">
                <br>
                <p><b>SHAWARMA</b></p>
                <ul style="list-style-type: none; margin-left: -20px;">
                  <li>Chicken Shawarma - ₦1,000</li>
                  <li>Chicken Shawarma (Sausage) - ₦1,100</li>
                  <li>Chicken Creamy Shawarma - ₦1,200</li>
                  <li>Chicken Spicy Shawarma - ₦1,200</li>
                </ul>
              </div>

              </div>

              </div>

              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active nav-tab" id="burger-tab" data-toggle="tab" href="#burger" role="tab" aria-controls="burger" aria-selected="true">Burgers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tab" id="sides-tab" data-toggle="tab" href="#sides" role="tab" aria-controls="sides" aria-selected="false">Sides</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tab" id="sandwiches-tab" data-toggle="tab" href="#sandwiches" role="tab" aria-controls="sandwiches" aria-selected="false">Sandwiches</a>
                  </li>
                </ul>

                <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade" id="burger" role="tabpanel" aria-labelledby="burger-tab">...</div>
              <div class="tab-pane fade" id="sides" role="tabpanel" aria-labelledby="sides-tab">...</div>
              <div class="tab-pane fade" id="sandwiches" role="tabpanel" aria-labelledby="sandwiches-tab">...</div>
              </div>

              </div>


              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active nav-tab" id="burger-tab" data-toggle="tab" href="#burger" role="tab" aria-controls="burger" aria-selected="true">Burgers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tab" id="sides-tab" data-toggle="tab" href="#sides" role="tab" aria-controls="sides" aria-selected="false">Sides</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tab" id="sandwiches-tab" data-toggle="tab" href="#sandwiches" role="tab" aria-controls="sandwiches" aria-selected="false">Sandwiches</a>
                  </li>
                </ul>

                <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade" id="burger" role="tabpanel" aria-labelledby="burger-tab">...</div>
              <div class="tab-pane fade" id="sides" role="tabpanel" aria-labelledby="sides-tab">...</div>
              <div class="tab-pane fade" id="sandwiches" role="tabpanel" aria-labelledby="sandwiches-tab">...</div>
              </div>

              </div>

              </div>







              <br><br>
              <h2 class="text-center featured-items">High Demands</h2>
              <br>
              <div class="featured">
              @foreach($highdemands as $highdemand)
                <div>
                  <a href="{{ route('products.show',   $highdemand->product_id  ) }}" class="slider-link text-dark">
                   <div class="image-slider">
                      <img src="{{ Voyager::image($highdemand->image)}}" alt="" width="90%" class="img-responsive">
                      <p class="item-featuring text-center">{{$highdemand->product_name}} <br>
                        <span><b>₦ {{number_format($highdemand->product_price, 2)}}</b></span> -
                        <span><b>{{$highdemand->company->company_name}}</b></span></p>
                  </div>
                  </a>

                </div>
@endforeach


              </div>

              <br><br>
              <div class="about-us">
                <h2 class="text-center featured-items">About Us</h2>
                <br>
                <div class="row">
                    <div class="col-md-6" data-aos="zoom-in-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                        <br>
                        <img src="img/about-food-delivery.jpg" alt="sweet-november-aboutus" class="img-responsive" width="100%">
                    </div>
                    <div class="col-md-6">
                        <h4>ABOUT KAEDOORS LINK</h4>
                        <p class="about-details">Kaedoors Links serves as an intermediary between Fast Foods Restaurants and their consumers.</p>
                        <p class="about-details">We offer you an easier platform to purchase fast foods without having to go through any social media platform or moving long distances to get your demands.</p>
                        <p class="about-details">The Fast Foods Restaurants listed in our <a href="#">menu</a> above have been tested and proven as the best you can find all over Nigeria. They give the best all round including taste and customer relationship.</p>
                        <p class="about-details">After shopping your food online you would be asked whether you'll need delivery or not so that we'll know how to render your services.</p>
                    </div>
                </div>

              </div>

          </div>




    @endsection
