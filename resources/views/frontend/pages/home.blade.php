@extends('layouts.index_front')
@section('home')
@endsection
<!-- banner part start-->
{{-- <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{ asset('storage/img/banner_img.png') }}" alt="Image">                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth & Wood
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                <img src="{{ asset('storage/img/banner_img.png') }}" alt="Image">                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{ asset('storage/img/banner_img.png') }}" alt="Image">                                </div>
                            </div>
                        </div>
                        <!-- <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth $ Wood Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="slider-counter"></div>
                </div>
                
            </div>
        </div>
    </section> --}}
<!-- banner part start-->



<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="banner_slider owl-carousel">
                    @foreach ($imgcrsl as $item)
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>{{ $item->name }}</h1>
                                            <h4>{{ $item->desc }}</h4>
                                            <a href="{{ route('product.show', $item) }}" class="btn_2">buy now</a>
                                            {{-- <a href="" class="btn_2">BUY NOW</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{ asset('storage/img/photo/' . $item->image) }}" alt=""
                                        style="height:500px">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="slider-counter"></div>
            </div>
        </div>
    </div>
</section>


<!-- banner part start-->
{{-- <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        @foreach ($imgcrsl as $item)
                            <div class="single_banner_slider">
                                <div class="row">
                                    <div class="col-lg-5 col-md-8">
                                        <div class="banner_text">
                                            <div class="banner_text_iner">
                                                <h1>{{ $item->name }}</h1>
                                                <p>{{ $item->desc }}</p>
                                                <a href="{{ route('product.show', $item) }}" class="btn_2">buy
                                                    now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner_img d-none d-lg-block">
                                        <img src="{{ asset('storage/img/products/' . $item->image) }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section> --}}
<!-- banner part start-->

<!-- feature_part start-->
<section class="feature_part padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_tittle text-center">
                    <h2>Featured Category</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            {{-- last product --}}
            @foreach ($latestProducts as $key => $latestProduct)
                @if ($key == 0)
                    <div class="col-lg-7 col-sm-6">
                        <div class="single_feature_post_text">
                            <p>Premium Quality</p>
                            <h3>{{ $latestProduct->name }}</h3>
                            <a href="{{ route('product.show', $latestProduct) }}" class="feature_btn">EXPLORE NOW <i
                                    class="fas fa-play"></i></a> 
                                    <img height="400px"src="{{ asset('storage/img/photo/' . $latestProduct->image) }}" alt="">
                        </div>
                    </div>
                @endif
                @if ($key == 1)
                    <div class="col-lg-5 col-sm-6">
                        <div class="single_feature_post_text">
                            <p style="position:relative; z-index: 1;">Premium Quality</p>
                            <h3 style="position:relative; z-index: 1;">{{ $latestProduct->name }}</h3>
                            <a href="{{ route('product.show', $latestProduct) }}"  class="feature_btn">EXPLORE NOW <i
                                    class="fas fa-play"></i></a>
                            <img height="400px" src="{{ asset('storage/img/photo/' . $latestProduct->image) }}"
                                alt="">
                        </div>
                    </div>
                @endif
                @if ($key == 2)
                    <div class="col-lg-5 col-sm-6">
                        <div class="single_feature_post_text">
                            <p style="position:relative; z-index: 1;">Premium Quality</p>
                            <h3 style="position:relative; z-index: 1;">{{ $latestProduct->name }}</h3>
                            <a href="{{ route('product.show', $latestProduct) }}"  class="feature_btn">EXPLORE NOW <i
                                    class="fas fa-play"></i></a>
                            <img height="400px" src="{{ asset('storage/img/photo/' . $latestProduct->image) }}"
                                alt="">
                        </div>
                    </div>
                @endif
                @if ($key == 3)
                    <div class="col-lg-7 col-sm-6">
                        <div class="single_feature_post_text">
                            <p>Premium Quality</p>
                            <h3>{{ $latestProduct->name }}</h3>
                            <a href="{{ route('product.show', $latestProduct) }}"  class="feature_btn">EXPLORE NOW <i
                                    class="fas fa-play"></i></a>
                            <img height="400px" src="{{ asset('storage/img/photo/' . $latestProduct->image) }}"
                                alt="">
                        </div>
                    </div>
                @endif
            @endforeach
            {{-- <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h3>Latest foam Sofa</h3>
                    <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{ asset('storage/img/feature/feature_2.png') }}" alt="Image">
                </div> --}}
        {{-- </div> --}}
        {{-- <div class="col-lg-5 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h3>Latest foam Sofa</h3>
                    <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{ asset('storage/img/feature/feature_3.png') }}" alt="Image">
                </div>
            </div> --}}
        {{-- <div class="col-lg-7 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h3>Latest foam Sofa</h3>
                    <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{ asset('storage/img/feature/feature_4.png') }}" alt="Image">
                </div>
            </div> --}}
    </div>
    </div>
</section>
<!-- upcoming_event part start-->

<!-- product_list start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>awesome <span>shop</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product_list_slider owl-carousel">
                    <div class="single_product_list_slider">
                        <div class="row align-items-center justify-content-between">
                            {{-- <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{ asset('storage/img/product/product_1.png') }}" alt="Image">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div> --}}
                                @foreach ($myprdct as $item)
                                <div  class="col-lg-3 col-sm-6 ">
                                <div class="single_product_item">
                                    <a href="{{route("product.index",$item->id)}}">
                                        <img height="300px" src="{{ asset('storage/img/photo/'.$item->image) }}" alt="">
                                    </a>
                                    <div class="single_product_text">
                                        <h4>{{$item->name}}</h4>
                                        <h3>${{$item->prix}}</h3>
                                        <a class="add_cart">+ add to cart<i class="ti-heart"></i></a>
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
</section>
<!-- product_list part start-->

<!-- awesome_shop start-->
<section class="our_offer section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6">
                <div class="offer_img">
                    @foreach ($products as $key => $product)
                    @if ($key == 10)
                    <img src="{{ asset('storage/img/photo/'.$product->image) }}" alt="">
                    @endif
                @endforeach
                    {{-- <img src="{{ asset('storage/img/offer_img.png') }}" alt="Image"> --}}
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="offer_text">
                    <h2>Weekly Sale on
                        60% Off All Products</h2>
                    <div class="date_countdown">
                        <div id="timer">
                            <div id="days" class="date"></div>
                            <div id="hours" class="date"></div>
                            <div id="minutes" class="date"></div>
                            <div id="seconds" class="date"></div>
                        </div>
                    </div>
                    <form action={{ route('sendemail') }} method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2" name="email"
                                id="email" required>
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text btn_2" id="basic-addon2">book
                                    now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- awesome_shop part start-->

<!-- product_list part start-->
<section class="product_list best_seller section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Best Sellers <span>shop</span></h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    {{-- <div class="single_product_item">

                        <img src="{{ asset('storage/img/product/product_1.png') }}" alt="Image">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">

                        <img src="{{ asset('storage/img/product/product_2.png') }}" alt="Image">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">

                        <img src="{{ asset('storage/img/product/product_3.png') }}" alt="Image">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">

                        <img src="{{ asset('storage/img/product/product_4.png') }}" alt="Image">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">

                        <img src="{{ asset('storage/img/product/product_5.png') }}" alt="Image">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div> --}}
                    @foreach ( $bestseller as $bestsell )
                    <a href="{{route("product.index",$bestsell->id)}}">
                    <div class="single_product_item">
                        <img src="{{ asset('storage/img/photo/'.$bestsell->image) }}" style="height: 250px" alt="">
                        <div class="single_product_text">
                            <h4>{{$bestsell->name}}</h4>
                            <h5>Stock : {{$bestsell->stock}}</h5>
                            <h3>${{$bestsell->prix}}.00</h3>
                        </div>
                    </div></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product_list part end-->

<!-- subscribe_area part start-->
<section class="subscribe_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="subscribe_area_text text-center">
                    <h5>Join Our Newsletter</h5>
                    <h2>Subscribe to get Updated
                        with new offers</h2>
                    <form action={{ route('sendemail') }} method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2" name="email"
                                id="email" required>
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text btn_2" id="basic-addon2">subscribe
                                    now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::subscribe_area part end::-->

<!-- subscribe_area part start-->
<section class="client_logo padding_top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="single_client_logo">

                    <img src="{{ asset('storage/img/client_logo/client_logo_1.png') }}" alt="Image">
                </div>
                <div class="single_client_logo">

                    <img src="{{ asset('storage/img/client_logo/client_logo_2.png') }}" alt="Image">
                </div>
                <div class="single_client_logo">

                    <img src="{{ asset('storage/img/client_logo/client_logo_3.png') }}" alt="Image">
                </div>
                <div class="single_client_logo">

                    <img src="{{ asset('storage/img/client_logo/client_logo_4.png') }}" alt="Image">
                </div>
                <div class="single_client_logo">

                    <img src="{{ asset('storage/img/client_logo/client_logo_5.png') }}" alt="Image">
                </div>
                <div class="single_client_logo">
                    <img src="{{ asset('storage/img/client_logo/client_logo_3.png') }}" alt="Image">
                </div>
                <div class="single_client_logo">
                    <img src="{{ asset('storage/img/client_logo/client_logo_1.png') }}" alt="Image">
                </div>
                <div class="single_client_logo">
                    <img src="{{ asset('storage/img/client_logo/client_logo_2.png') }}" alt="Image">
                </div>
                <div class="single_client_logo">
                    <img src="{{ asset('storage/img/client_logo/client_logo_3.png') }}" alt="Image">
                </div>
                <div class="single_client_logo">
                    <img src="{{ asset('storage/img/client_logo/client_logo_4.png') }}" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!--::subscribe_area part end::-->
