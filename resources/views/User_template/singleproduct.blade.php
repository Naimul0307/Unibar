@extends('User_template.layouts.template')
@section('page_title')
Eflyer-Product Details
@endsection
@section('main-content')
<h1 class="py-6">HOME</h1>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="box_main">
                <div class="tshirt_img">
                    <img src="{{asset($product->product_img)}}">
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="box_main">
                <div class="product_info">
                    <h4 class="shirt_text text-left">{{$product->product_name}}</h4>
                    <p class="price_text text-left">Price <span style="color:#262626">$ {{$product->price}}</span></p>
                </div>
                <div class="my-3 product-details">
                    <p class="lead">{{$product->product_long_des}}</p>
                    <ul class="p-2 bg-light my-2">
                        <li>Category- {{$product->product_category_name}}</li>
                        <li>Sub Category - {{$product->product_subcategory_name}}</li>
                        <li>Available Quantity - {{$product->quantity}}</li>
                    </ul>
                </div>
                <div class="btn_main">
                    <div class="btn btn-warning"><a href="#">Add To Cart</a></div>
                 </div>
            </div>
        </div>
    </div>
    <div class="fashion_section">
        <div id='main_slider'>
                     <div class="container">
                        <h1 class="fashion_taital">All Product</h1>
                        <div class="fashion_section_2">
                           <div class="row">
                            @foreach ($related_products as $product)
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
    </div>
</div>
@endsection
