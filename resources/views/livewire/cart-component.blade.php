<div>
    <style>
        img.media-object {
    width: 107px;
}
input.button {
    padding: 10px 20px;
    border: none;
    background: #039ee3;
    color: #fff;
    margin-left: -1px;
    transition: ease all 0.5s;
    float: right;
    font-size: 13px;
    cursor: pointer;
}
input.form-control {
    position: absolute;
    top: 47px;
}
button.button {
    background: #039ee3;
    color: #fff;
    border-radius: 13px;
}
.conqty {
    position: absolute;
    top: 20px;
    display: flex;
    width: 125px;
    flex-direction: column;
    font-size: 17px;
    font-weight: bold;
    left: 5px;
}
a.increase {
    margin-bottom: 43px;
}
a.continee {
    padding: 10px 20px;
    background: #039ee3;
    color: #fff;
    margin-left: -1px;
    transition: ease all 0.5s;
    float: right;
    font-size: 13px;
    cursor: pointer;
    border-radius: 12px;
}
    </style>
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="full">
                <div class="title-holder">
                  <div class="text-left title-holder-cell">
                    <h1 class="page-title">Shopping Cart</h1>
                    <ol class="breadcrumb">
                      <li><a href="index.html">Home</a></li>
                      <li class="active">Shopping Cart</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end inner page banner -->
      <div class="section padding_layout_1 Shopping_cart_section">

        <div class="container">
           <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="product-table">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>Quantity</th>
                      <th class="text-center">Price</th>
                      <th class="text-center">Total</th>
                      <th>  </th>

                    </tr>
                  </thead>
                  <tbody>
                      @if(Session::has('suceess message'))
                      <div class="alert alert-success">
                        <strong>Sucess</strong>{{Session::get('success_message')}}
                      </div>
                      @endif
                      @if(Cart::count()>0)
                      @foreach(Cart::content() as $item)
                    <tr>
                      <td class="col-sm-8 col-md-6"><div class="media">
                          <a class="thumbnail pull-left" href="{{route('product.details',['slug'=>$item->model->slug])}}"> <img class="media-object" src="{{asset('assets/images/it_service')}}/{{$item->model->image.'.jpg'}}" alt="#"></a>
                          <div class="media-body">
                            <h4 class="media-heading"><a href="#">{{$item->model->name}}</a></h4>
                            <span>Status: </span><span class="text-success">In Stock</span> </div>
                        </div></td>
                      <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input class="form-control" value="{{$item->qty}}" type="text">
                        <div class="conqty">
                            <a class="increase" href="#"wire:click.prevent="increaseQuantity('{{$item->rowId}}')">increase</a>
                            <a class="decrease" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')">decrease</a>
                        </div>

                      </td>
                      <td class="text-center col-sm-1 col-md-1"><p class="price_table">{{$item->model->regular_price}}</p></td>
                      <td class="text-center col-sm-1 col-md-1"><p class="price_table">{{$item->subtotal}}</p></td>
                      <td class="col-sm-1 col-md-1">
                          <button type="button" class="bt_main" wire:click.prevent="destroy('{{$item->rowId}}')"><i class="fa fa-trash"></i>Remove</button>
                        </td>

                    </tr>

                    @endforeach
                    @else
                    <p>No item in cart</p>

                    @endif
                  </tbody>
                </table>
                <table class="table">
                  <tbody>
                    <tr class="cart-form">
                      <td class="actions"><div class="coupon">
                          <input name="coupon_code" class="input-text" id="coupon_code" placeholder="Coupon code" type="text">
                          <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                        </div>
                        <a  class="continee" name="update_cart" href="{{route('shop')}}">continue shopping</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="shopping-cart-cart">
                <table>
                  <tbody>
                    <tr class="head-table">
                      <td><h5>Cart Totals</h5></td>
                      <td class="text-right"></td>
                    </tr>
                    <tr>
                      <td><h4>Subtotal</h4></td>
                      <td class="text-right"><h4>${{Cart::subtotal()}}</h4></td>
                    </tr>
                    <tr>
                      <td><h5>Estimated shipping</h5></td>
                      <td class="text-right"><h4>${{Cart::tax()}}</h4></td>
                    </tr>
                    <tr>
                      <td><h3>Total</h3></td>
                      <td class="text-right"><h4>${{Cart::total()}}</h4></td>
                    </tr>
                    <tr>
                      <td> <a  class="continee" name="update_cart" href="{{route('shop')}}">continue shopping</a>
                      </td>
                      <td> <a  class="continee" name="update_cart" href="{{route('shop')}}">checkout</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
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
