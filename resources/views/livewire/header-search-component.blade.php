<div class="modal-body">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
        <div class="navbar-search">
          <form action="{{route('product.search')}}" method="get" id="search-global-form" class="search-global">
            <input type="text" placeholder="Type to search" autocomplete="off" name="search" id="search" value="{{$search}}" class="search-global__input">
            <button class="search-global__btn"><i class="fa fa-search"></i></button>
            <div class="search-global__note">Begin typing your search above and press return to search.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
