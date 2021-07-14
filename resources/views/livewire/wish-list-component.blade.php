<div >
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

    </style>
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="full">
                <div class="title-holder">
                  <div class="text-left title-holder-cell">
                    <h1 class="page-title">WhisList Page</h1>
                    <ol class="breadcrumb">
                      <li><a href="index.html">Home</a></li>
                      <li class="active">WhisList</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div  class="section padding_layout_1 product_list_main"><div class="container">
    <div class="row">
        <div class="col-md-9">
          <div class="row">
           @if(Cart::instance('wishlist')->content()->count() > 0)

              @foreach(Cart::instance('wishlist')->content() as $item)

              <div   div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
              <div class="product_list">
                <div class="product_img"> <img class="img-responsive" src="{{asset('assets/images/it_service')}}/{{$item->model->image.'.jpg'}}" alt="">
                 </div>
                <div class="product_detail_btm">
                  <div class="center">
                    <h4><a href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a></h4>


                  </div>
                  <div class="starratin">
                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  </div>
                  <div class="product_price">
                      @if($item->model->featured===1)
                      <p><span class="old_price">${{$item->model->regular_price}}</span> – <span class="new_price">${{$item->model->sale_price}}</span></p>
                      @else
                    <p>  <span class="new_price">${{$item->model->regular_price}}</span></p>

                          <div class="product-wish">
                              <a href="#"><i class="fa fa-heart "></i></a>
                          </div>
                    @endif
                    <div class="product-wish">
                      <a href="#" wire:click.prevent="removeFromWishList({{$item->model->id}})"><i class="fa fa-heart fill-heart "></i></a>

                  </div>
                  </div>
                </div>
              </div>
            </div>


              @endforeach
            @else
            <p>No product</p>

            @endif




          </div>




    </div>
    <div class="col-md-3">
        <div class="side_bar">

          <div class="side_bar_blog">
            <h4>Filter Price</h4>
            <div id="slider"  >



            </div>
            <a class="btn sqaure_bt" href="it_service.html">View Service</a> </div>
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
