<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Coupon;
use Livewire\WithPagination;
class AdminCouponsComponent extends Component
{
    use WithPagination;
    public function deleteCoupon($coupon_id){
        $coupon=Coupon::find($coupon_id);
        $coupon->delete();
        session()->flash('message','the coupon has been deleted');
    }
    public function render()
    {
        $coupons=Coupon::paginate(5);
        return view('livewire.admin.admin-coupons-component',['coupons'=>$coupons])->layout('layoutsDashboard.base');
    }
}
