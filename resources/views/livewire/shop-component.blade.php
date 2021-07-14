<div>
<style>
    .product-wish{
        position: absolute;
    top: 23px;
    right: 41px;
    font-size: 25px;
    z-index: 99;
    color: white;
    }
    i.fa.fa-heart {
    color: #039ee3;
}
.fill-heart{
    color: #039ee3;
}
i.fa.fa-heart:hover {
    color: black;
}

i.fa.fa-heart.de:hover {
    color: black;
}
    .wishlist_content {
    position: absolute;
    display: flex;
    left: 350px;
}
.wishlist_text {
    margin-right: 12px;
}
a.btn.sqaure_bt {
    top: 30px;
}
div#slider {
    height: 24px;
}
.noUi-connect {
    background: #039ee3;
}
p.btn.sqaure_bt {
    margin-top: 57px;
    color: black;
    font-weight: bold;
    font-size: 23px;
    width: 107%;
    background-color: white;
}
</style>
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="text-left title-holder-cell">
              <h1 class="page-title">Shop Page</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Shop</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 product_list_main">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
            @php
                $witems=Cart::instance('wishlist')->content()->pluck('id');
            @endphp

            @foreach($products as $product)

            <div   div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="{{asset('assets/images/it_service')}}/{{$product->image.'.jpg'}}" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}}</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                    @if($product->featured===1)
                    <p><span class="old_price">${{$product->regular_price}}</span> – <span class="new_price">${{$product->sale_price}}</span></p>
                    @else
                  <p>  <span class="new_price">${{$product->regular_price}}</span></p>
                        <div class="product-wish">
                            <a href="#"><i class="fa fa-heart "></i></a>
                        </div>
                  @endif
                  <div class="product-wish">
                      @if($witems->contains($product->id))
                    <a href="#" wire:click.prevent="removeFromWishList({{$product->id}})"><i class="fa fa-heart fill-heart "></i></a>
                    @else
                    <a href="#" wire:click.prevent="addToWishList({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i class="fa fa-heart "></i></a>
                    @endif
                </div>
                </div>
              </div>
            </div>
          </div>


            @endforeach







        </div>
        {{$products->links()}}
      </div>
      <div class="col-md-3">
        <div class="side_bar">

          <div class="side_bar_blog">
            <h4>Filter Price</h4>
            <div id="slider"  wire:ignore>
            </div>
            <p class="btn sqaure_bt" href="it_service.html">{{$min_price}}-{{$max_price}}</p>

        </div>

          <div class="side_bar_blog">
            <h4> Categories</h4>
            <div class="categary">
              <ul>
                  @foreach ($categories as $category )
                  <li><a href="{{route('product.category',['category_id'=>$category->id])}}"><i class="fa fa-angle-right"></i> {{$category->name}}</a></li>
                  @endforeach
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1 testmonial_section white_fonts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2 style="text-transform: none;">What Clients Say?</h2>
            <p class="large">Here are testimonials from clients..</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7">
        <div class="full">
          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
              <li data-target="#testimonial_slider" data-slide-to="1"></li>
              <li data-target="#testimonial_slider" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testimonial-container">
                  <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first.
                    I am really satisfied with my first laptop service. </div>
                  <div class="testimonial-photo"> <img src="{{asset('assets/images/it_service/client1.jpg')}}" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Anderson</h4>
                    <span class="testimonial-position">CFO, Tech NY</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first.
                    I am really satisfied with my first laptop service. </div>
                  <div class="testimonial-photo"> <img src="{{asset('assets/images/it_service/client2.jpg')}}" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Anderson</h4>
                    <span class="testimonial-position">CFO, Tech NY</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first.
                    I am really satisfied with my first laptop service. </div>
                  <div class="testimonial-photo"> <img src="{{asset('assets/images/it_service/client3.jpg')}}" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Anderson</h4>
                    <span class="testimonial-position">CFO, Tech NY</span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="full"> </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section">
            <div class="call_icon"> <img src="{{asset('assets/images/it_service/phone_icon.png')}}" alt="#" /> </div>
            <div class="inner_cont">
              <h2>REQUEST A FREE QUOTE</h2>
              <p>Get answers and advice from people you want it from.</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="it_contact.html">Contact us</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1" style="padding: 50px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <ul class="brand_list">
            <li><img src="{{asset('assets/images/it_service/brand_icon1.png')}}" alt="#" /></li>
            <li><img src="{{asset('assets/images/it_service/brand_icon2.png')}}" alt="#" /></li>
            <li><img src="{{asset('assets/images/it_service/brand_icon3.png')}}" alt="#" /></li>
            <li><img src="{{asset('assets/images/it_service/brand_icon4.png')}}" alt="#" /></li>
            <li><img src="{{asset('assets/images/it_service/brand_icon5.png')}}" alt="#" /></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
 @livewire('header-search-component')
    </div>
  </div>
</div>

</div>


@section('scripts')
<script>
var slider=document.getElementById('slider');
noUiSlider.create(slider,{
    start:[1,20000],
    connect:true,
    range:{
        'min':1,
        'max':20000,
    },
    pips:{
        mode:'steps',
        stepped:true,
        density:4,
    }
});
slider.noUiSlider.on('update',function(value){
    @this.set('min_price',value[0]);
    @this.set('max_price',value[1]);
});
</script>

@endsection


