<div>
<style>
img.banner {
    width: 383px;
}
</style>
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="full">
                <div class="title-holder">
                  <div class="text-left title-holder-cell">
                    <h1 class="page-title">Shop Detail</h1>
                    <ol class="breadcrumb">
                      <li><a href="index.html">Home</a></li>
                      <li class="active">Shop Detail</li>
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
      <div class="section padding_layout_1 product_detail">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12">
                  <div class="product_detail_feature_img hizoom hi2">
                    <div class='hizoom hi2'> <img  class="banner" src="{{asset('assets/images/it_service')}}/{{$product->image.'.jpg'}}" alt="#" /> </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
                  <div class="product-heading">
                    <h2>{{$product->name}}</h2>
                  </div>
                  <div class="product-detail-side"> <span><del>$25.00</del></span><span class="new-price">{{$product->regular_price}}</span> <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="review">(5 customer review)</span> </div>
                  <div class="detail-contant">
                    <p>{{$product->short_descripation}}.<br>
                      <span class="stock">2 in stock</span> </p>
                    <form class="cart" method="post" action="it_cart.html">
                      <div class="quantity">
                        <input   step="1" min="1" max="6" name="qty" calue="1"  title="qty" class="input-text qty text" size="4" type="number" wire:model="qty"  >

                      </div>
                      <button type="submit" class="btn sqaure_bt" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Add to cart</button>
                    </form>
                  </div>
                  <div class="share-post"> <a href="#" class="share-text">Share</a>
                    <ul class="social_icons">
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="full">
                    <div class="tab_bar_section">
                      <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Description</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Reviews (2)</a> </li>
                      </ul>
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div id="description" class="tab-pane active">
                          <div class="product_desc">
                            <p>{{$product->descripation}}</p>
                          </div>
                        </div>
                        <div id="reviews" class="tab-pane fade">
                          <div class="product_review">
                            <h3>Reviews (2)</h3>
                            <div class="commant-text row">
                              <div class="col-lg-2 col-md-2 col-sm-4">
                                <div class="profile"> <img class="img-responsive" src="images/it_service/client1.png" alt="#"> </div>
                              </div>
                              <div class="col-lg-10 col-md-10 col-sm-8">
                                <h5>David</h5>
                                <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                                <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                <p class="msg">ThisThis book is a treatise on the theory of ethics, very popular during the Renaissance.
                                  The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet.. </p>
                              </div>
                            </div>
                            <div class="commant-text row">
                              <div class="col-lg-2 col-md-2 col-sm-4">
                                <div class="profile"> <img class="img-responsive" src="images/it_service/client2.png" alt="#"> </div>
                              </div>
                              <div class="col-lg-10 col-md-10 col-sm-8">
                                <h5>Jack</h5>
                                <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                                <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                <p class="msg">Nunc augue purus, posuere in accumsan sodales ac, euismod at est. Nunc faccumsan ermentum consectetur metus placerat mattis. Praesent mollis justo felis, accumsan faucibus mi maximus et. Nam hendrerit mauris id scelerisque placerat. Nam vitae imperdiet turpis</p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="full review_bt_section">
                                  <div class="float-right"> <a class="btn sqaure_bt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Leave a Review</a> </div>
                                </div>
                                <div class="full">
                                  <div id="collapseExample" class="full collapse commant_box">
                                    <form accept-charset="UTF-8" action="index.html" method="post">
                                      <input id="ratings-hidden" name="rating" type="hidden">
                                      <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." required=""></textarea>
                                      <div class="full_bt center">
                                        <button class="btn sqaure_bt" type="submit">Save</button>
                                      </div>
                                    </form>
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
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="full">
                    <div class="main_heading text_align_left" style="margin-bottom: 35px;">
                      <h3>Related products</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                  @foreach($lastproduct_relate as $pro)
                <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
                  <div class="product_list">
                    <div class="product_img"> <img class="img-responsive" src="{{asset('assets/images/it_service')}}/{{$pro->image.'.jpg'}}" alt=""> </div>
                    <div class="product_detail_btm">
                      <div class="center">
                        <h4><a href="{{route('product.details',['slug'=>$pro->slug])}}">{{$pro->name}}</a></h4>
                      </div>
                      <div class="starratin">
                        <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                      </div>
                      <div class="product_price">
                        <p><span class="old_price">$15.00</span> – <span class="new_price">{{$pro->regular_price}}</span></p>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="col-md-3">
              <div class="side_bar">
                <div class="side_bar_blog">
                  <h4>SEARCH</h4>
                  <div class="side_bar_search">
                    <div class="input-group stylish-input-group">
                      <input class="form-control" placeholder="Search" type="text">
                      <span class="input-group-addon">
                      <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                      </span> </div>
                  </div>
                </div>
                <div class="side_bar_blog">
                  <h4>GET A QUOTE</h4>
                  <p>An duo lorem altera gloriatur. No imperdiet adver sarium pro. No sit sumo lorem. Mei ea eius elitr consequ unturimperdiet.</p>
                  <a class="btn sqaure_bt" href="it_service.html">View Service</a> </div>
                <div class="side_bar_blog">
                  <h4>OUR Categories</h4>
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
                        <div class="testimonial-photo"> <img src="images/it_service/client1.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                        <div class="testimonial-meta">
                          <h4>Maria Anderson</h4>
                          <span class="testimonial-position">CFO, Tech NY</span> </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="testimonial-container">
                        <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first.
                          I am really satisfied with my first laptop service. </div>
                        <div class="testimonial-photo"> <img src="images/it_service/client2.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                        <div class="testimonial-meta">
                          <h4>Maria Anderson</h4>
                          <span class="testimonial-position">CFO, Tech NY</span> </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="testimonial-container">
                        <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first.
                          I am really satisfied with my first laptop service. </div>
                        <div class="testimonial-photo"> <img src="images/it_service/client3.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
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
      </div></div>
