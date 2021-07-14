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

        <a  class="add" href="{{route('admin.addcategory')}}">Add Category</a>
        @if(Session::has('message'))
        <div class="alert alert-primary">
            {{Session::get('message')}}
        </div>
        @endif
    <table id="customers">
      <tr>
        <th>id</th>
        <th>name</th>
        <th>slug</th>
        <th>case</th>
      </tr>
      @foreach ($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->slug}}</td>
        <td>
            <a href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}"> <i class="fas fa-edit">Edit</i> </a>
            <a href="#" onclick="confirm('are you sure to want delete it') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})" > <i class="fas fa-trash-alt">delete</i></a>
        </td>
      </tr>
      @endforeach


    </table>
    {{$categories->links()}}

    </body>
    </html>

 </div>
