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
    <form class="form-stl" wire:submit.prevent="updateslider"  enctype="multipart/form-data">
        @csrf
        <fieldset class="wrap-title">
            <h3 class="form-title">edit Slider</h3>

        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">title</label>
            <input type="text" id="frm-reg-lname" name="title" placeholder="title name*" :value="title" required autofocus autocomplete="title" wire:model="title"  >
        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">subtitle</label>
            <input type="text" id="frm-reg-lname" name="subtitle" placeholder="your subtitle*" :value="subtitle" required autofocus autocomplete="subtitle" wire:model="subtitle">
        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">image</label>
            <input type="file"   name="newimage" :value="newimage"   autocomplete="newimage" wire:model='newimage'  >

            @if($newimage)
            <img src="{{$newimage->temporaryUrl()}}" width="120px" />
            @else
            <img src="{{asset('assets/images/it_service')}}/{{$image}}" width="120px" />
            @endif

        </fieldset>
        <input type="submit" class="btn btn-submit" value="save" name="submit">
    </form>
</div>
