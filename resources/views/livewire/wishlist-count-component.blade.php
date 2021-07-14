<div class="wishlist_content">
    <i class="fa fa-heart de" aria-hidden="true"></i>
    <div class="wishlist_text"><a href="{{route('product.wishlist')}}">Wishlist</a></div>
    @if(Cart::instance('wishlist')->count()>0)
    <div class="wishlist_count">{{Cart::instance('wishlist')->count()}}</div>
    @endif
</div>
