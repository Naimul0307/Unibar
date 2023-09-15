@extends('User_template.layouts.template')
@section('page_title')
Eflyer-Home
@endsection

@section('banner-section')
<div class="banner_section layout_padding">
    <div class="container">
       <div id="my_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
             <div class="carousel-item active">
                <div class="row">
                   <div class="col-sm-12">
                      <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                      <div class="buynow_bt"><a href="#">Buy Now</a></div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="row">
                   <div class="col-sm-12">
                      <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                      <div class="buynow_bt"><a href="#">Buy Now</a></div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="row">
                   <div class="col-sm-12">
                      <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                      <div class="buynow_bt"><a href="#">Buy Now</a></div>
                   </div>
                </div>
             </div>
          </div>
          <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
          </a>
       </div>
    </div>
 </div>
@endsection

@section('main-content')
<div class="fashion_section">
    <div id='main_slider'>
                 <div class="container">
                    <h1 class="fashion_taital">All Product</h1>
                    <div class="fashion_section_2">
                       <div class="row">
                        @foreach ($allproducts as $product)
                        <div class="col-lg-4 col-sm-4">
                            <div class="box_main">
                               <h4 class="shirt_text">{{$product->product_name}}</h4>
                               <p class="price_text">Start Price  <span style="color: #262626;">$ {{$product->price}}</span></p>
                               <div class="jewellery_img"><img src="{{asset($product->product_img)}}"></div>
                               <div class="btn_main">
                                  <div class="buy_bt"><a href="#">Buy Now</a></div>
                                  <div class="seemore_bt"><a href="{{ route('singleproduct', [$product->id,$product->slug]) }}" >See More</a></div>
                               </div>
                            </div>
                         </div>
                        @endforeach
                       </div>
                    </div>
                 </div>
              </div>
              <div id='main_slider'>
                <div class="container">
                   <h1 class="fashion_taital">All Product</h1>
                   <div class="fashion_section_2">
                      <div class="row">
                       @foreach ($allproducts as $product)
                       <div class="col-lg-4 col-sm-4">
                           <div class="box_main">
                              <h4 class="shirt_text">{{$product->product_name}}</h4>
                              <p class="price_text">Start Price  <span style="color: #262626;">$ {{$product->price}}</span></p>
                              <div class="jewellery_img"><img src="{{$product->product_img}}"></div>
                              <div class="btn_main">
                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
                                 <div class="seemore_bt"><a href="#">See More</a></div>
                              </div>
                           </div>
                        </div>
                       @endforeach
                      </div>
                   </div>
                </div>
             </div>
</div>
@endsection
