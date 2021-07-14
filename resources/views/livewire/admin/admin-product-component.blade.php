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

        <a  class="add" href="{{route('admin.addproduct')}}">Add product</a>
        @if(Session::has('message'))
        <div class="alert alert-primary">
            {{Session::get('message')}}
        </div>
        @endif
    <table id="customers">
      <tr>
        <th>id</th>
        <th>image</th>
        <th>name</th>
        <th>Category</th>
        <th>price</th>
        <th>sale price</th>
        <th>stock</th>
        <th>featured</th>
        <th>created at</th>
        <th>Action</th>
      </tr>
      @foreach ($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td><img src="{{asset('assets/images/it_service')}}/{{$product->image.'.jpg'}}"  width="60" /></td>
        <td>{{$product->name}}</td>
        <td>{{$product->category['name']}}</td>
        <td>{{$product->regular_price}}</td>
        <td>{{$product->sale_price}}</td>
        <td>{{$product->stock_status}}</td>
        <td>{{$product->featured}}</td>
        <td>{{$product->created_at}}</td>
        <td>
            <a href="{{route('admin.editproduct',['product_slug'=>$product->slug])}}"> <i class="fas fa-edit">Edit</i> </a>
            <a href="#" onclick="confirm('are you sure to want delete it') || event.stopImmediatePropagation()"  wire:click.prevent="destroy({{$product->id}})" > <i class="fas fa-trash-alt">delete</i></a>
        </td>
      </tr>
      @endforeach


    </table>
    {{$products->links()}}

    </body>
    </html>

 </div>
