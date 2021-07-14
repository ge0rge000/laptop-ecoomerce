<div>
    <style>
        input#frm-reg-lname {
    border: 1px solid #e6e6e6;
    outline: none;
    width: 100%;
    height: 43px;
    font-size: 13px;
    line-height: 19px;
    padding: 0 5px 0 14px;
    color: #333333;
}
input.btn.btn-submit {
    padding: 10px 20px;
    background: #343a40;
    color: #fff;
    margin-left: 504px;
    transition: ease all 0.5s;
    float: left;
    font-size: 13px;
    cursor: pointer;
    border-radius: 12px;
    margin-top: 20px;
}
select {
    order: solid #e1e1e1 1px;
    width: 100%;
    background: #f8f8f8;
    min-height: 50px;
    padding: 5px 20px;
    line-height: normal;
    border-radius: 0px;
    margin-bottom: 14px;
    font-size: 14px;
    color: #737373;
}
input[type="file"] {
    order: solid #e1e1e1 1px;
    width: 98%;
    /* background: #f8f8f8; */
    min-height: 50px;
    padding: 5px 20px;
    line-height: normal;
    border-radius: 0px;
    margin-bottom: 14px;
    font-size: 14px;
    color: #737373;
}
    </style>
    @if(Session::has('message'))

        <div class="alert alert-success">{{Session::get('message')}}</div>

        @endif
    <form class="form-stl" enctype="multipart/form-data" wire:submit.prevent="addProduct" >
        @csrf
        <fieldset class="wrap-title">
            <h3 class="form-title">Create product</h3>

        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">name</label>

            <input type="text" id="frm-reg-lname" name="product" placeholder="product name*" :value="name" autofocus autocomplete="name" wire:model="name" wire:keyup="generateslug">
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">select Category</label>
            <select wire:model='category_id'>
                @foreach ($categories as $category )
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach


            </select>
            @error('category_id')
            <p class="text-danger">{{$message}}</p>
            @enderror
         </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">slug</label>
            <input type="text" id="frm-reg-lname" name="slug" placeholder="your slug*" :value="slug" autofocus autocomplete="slug" wire:model="slug">
            @error('slug')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">regular_price</label>
            <input type="text" id="frm-reg-lname" name="regular_price" placeholder="your price*" :value="regular_price" autofocus autocomplete="regular_price" wire:model="regular_price">
            @error('category_id')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">sale_price</label>
            <input type="text" id="frm-reg-lname" name="sale_price" placeholder="your price*" :value="sale_price" autofocus autocomplete="sale_price" wire:model="sale_price">
            @error('sale_price')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </fieldset>

        <fieldset class="wrap-input" wire:ignore.self>
            <label for="frm-reg-lname">short_descripation</label>
            <textarea  wire:ignore.self placeholder="your short_descripation*" id="short_descripation" :value="short_descripation"   wire:model="short_descripation"></textarea>
            @error('short_descripation')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </fieldset>
        <fieldset class="wrap-input" wire:ignore.self>
            <label for="frm-reg-lname">descripation</label>
            <textarea wire:ignore.self   placeholder="your descripation*" :value="descripation"  id="descripation"  wire:model="descripation"></textarea>
            @error('descripation')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">SKU</label>
            <input type="text" id="frm-reg-lname" name="sku" placeholder="your sku*" :value="sku" autofocus autocomplete="sku" wire:model="sku">
            @error('sku')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">stock</label>
            <select wire:model='stock'>
                <option value="instock">in stock</option>
                <option value="outofstoke">out of stock</option>

            </select>
                @error('stock')
                <p class="text-danger">{{$message}}</p>
                @enderror
         </fieldset>
         <fieldset class="wrap-input">
            <label for="frm-reg-lname">featured</label>
            <select wire:model='featured'>
                <option value="0">No</option>
                <option value="1">Yes</option>

            </select>
            @error('featured')
            <p class="text-danger">{{$message}}</p>
            @enderror
         </fieldset>
         <fieldset class="wrap-input">
            <label for="frm-reg-lname">quantity</label>
            <input type="text" id="frm-reg-lname" name="quantity" placeholder="your quantity*" :value="quantity" autofocus autocomplete="sku" wire:model="quantity">
            @error('quantity')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">image</label>
            <input type="file"  name="image" placeholder="your image*" :value="image" autofocus autocomplete="image" wire:model="image">

                @if($image)
                <img src="{{$image->temporaryUrl()}}" width="120px" />
                @endif
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </fieldset>

        <input type="submit" class="btn btn-submit" value="save" name="submit">
    </form>
</div>


@section('scripts')
<script src="https://cdn.tiny.cloud/1/ml1xj52ur5j2ga5c7r8n8bb6x4gde7su9fz21a0ii0o1zu6e/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 
@endsection
