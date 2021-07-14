<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;
class AdminEditCouponsComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $coupon_id;

    public function mount($coupon_id){
        $coupon=Coupon::find($coupon_id);
        $this->code=$coupon->code;
        $this->type=$coupon->type;
        $this->value=$coupon->value;
        $this->cart_value=$coupon->cart_value;
        $this->coupon_id=$coupon->id;
    }

    public function updated($fileds){
        $this->validateOnly($fileds,[
            'code'=>'required|unique:coupons',
            'type'=>'required',
            'value'=>'required|numeric',
            'cart_value'=>'required',
        ]);
    }
    public function updateCoupon(){
        $this->validate([
            'code'=>'required|unique:coupons',
            'type'=>'required',
            'value'=>'required|numeric',
            'cart_value'=>'required',
        ]);
        $coupon=Coupon::find($this->coupon_id);

        $coupon->code=$this->code;
        $coupon->type=$this->type;
        $coupon->value=$this->value;
        $coupon->cart_value=$this->cart_value;
        $coupon->save();
        session()->flash('message','the coupon created');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-coupons-component')->layout('layoutsDashboard.base');
    }
}
