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
    <form class="form-stl" wire:submit.prevent="storeCoupon" >
        @csrf
        <fieldset class="wrap-title">
            <h3 class="form-title">Add new coupon </h3>

        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">Coupon Code</label>
            <input type="text" id="frm-reg-lname" name="coupon_code" placeholder="coupon code*" :value="coupon_code"  autofocus autocomplete="coupon_code" wire:model="code"  >
            @error('coupon_code') <p class="text-danger">{{$message}}</p>@enderror
        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">type</label>
            <select class="form-control" wire:model="type">
                <option value="">select</option>
                <option value="fixed">Fixed</option>
                <option value="percent">Percent</option>

            </select>
            @error('type') <p class="text-danger">{{$message}}</p>@enderror

        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">Coupon Value</label>
            <input type="text" id="frm-reg-lname" name="coupon_value" placeholder="coupon value*" :value="coupon_value"  autofocus autocomplete="coupon_value" wire:model="value"  >
            @error('coupon_value') <p class="text-danger">{{$message}}</p>@enderror
        </fieldset>
        <fieldset class="wrap-input">
            <label for="frm-reg-lname">Cart Value</label>
            <input type="text" id="frm-reg-lname" name="cart_value" placeholder="cart value*" :value="cart_value"  autofocus autocomplete="cart_value" wire:model="cart_value"  >
            @error('cart_value') <p class="text-danger">{{$message}}</p>@enderror
        </fieldset>
        <input type="submit" class="btn btn-submit" value="save" name="submit">
    </form>
</div>
