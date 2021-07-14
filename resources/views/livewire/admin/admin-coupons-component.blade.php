<div>
    <!DOCTYPE html>
    <html>
    <head>
    <style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #343a40;
      color: white;
    }
    a.add {
    padding: 10px 20px;
    background: #343a40;
    color: #fff;
    margin-left: 504px;
    transition: ease all 0.5s;
    float: right;
    font-size: 13px;
    cursor: pointer;
    border-radius: 12px;
}
    </style>
    </head>
    <body>

        <a  class="add" href="{{route('admin.addcoupons')}}">Add Coupon</a>
        @if(Session::has('message'))
        <div class="alert alert-primary">
            {{Session::get('message')}}
        </div>
        @endif
    <table id="customers">
      <tr>
        <th>id</th>
        <th> Coupon code</th>
        <th> Coupon type</th>
        <th> Coupon value</th>
        <th>Cart value</th>
        <th>case</th>
      </tr>
      @foreach ($coupons as $coupon)
      <tr>
        <td>{{$coupon->id}}</td>
        <td>{{$coupon->code}}</td>

        <td>{{$coupon->type}}</td>
        @if($coupon->type=='fixed')
        <td>{{$coupon->value}}</td>
        @else
        <td>{{$coupon->value}}%</td>
        @endif
        <td>{{$coupon->cart_value}}</td>
        <td>
            <a href="{{route('admin.editcategory',['coupon_id'=>$coupon->id])}}"> <i class="fas fa-edit">Edit</i> </a>
            <a href="#" onclick="confirm('are you sure to want delete it') || event.stopImmediatePropagation()" wire:click.prevent="deleteCoupon({{$coupon->id}})" > <i class="fas fa-trash-alt">delete</i></a>
        </td>
      </tr>
      @endforeach


    </table>
    {{$coupons->links()}}

    </body>
    </html>

 </div>
