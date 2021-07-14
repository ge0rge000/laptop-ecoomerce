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
    </style>
    @if(Session::has('message'))

        <div class="alert alert-success">{{Session::get('message')}}</div>

        @endif
    <form class="form-stl" wire:submit.prevent="storeCategory" >
        @csrf
        <fieldset class="wrap-title">
            <h3 class="form-title">Create Category</h3>

        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">name</label>
            <input type="text" id="frm-reg-lname" name="category" placeholder="catetgory name*" :value="category"  autofocus autocomplete="name" wire:model="name" wire:keyup="generateslug">
            @error('name') <p class="text-danger">{{$message}}</p>@enderror
        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">slug</label>
            <input type="text" id="frm-reg-lname" name="slug" placeholder="your name*" :value="slug"  autofocus autocomplete="slug" wire:model="slug">
            @error('slug') <p class="text-danger">{{$message}}</p>@enderror

        </fieldset>
        <input type="submit" class="btn btn-submit" value="save" name="submit">
    </form>
</div>
