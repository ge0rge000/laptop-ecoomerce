<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
class AdminProductComponent extends Component
{

    use WithPagination;


    public function destroy($id){
        $product=Product::find($id);
        $product->delete();
        session()->flash('message','the product deleted');
    }
    public function render()
    {


        $products=Product::with('category')->paginate(10);
        return view('livewire.admin.admin-product-component',['products'=>$products])->layout('layoutsDashboard.base');
    }
}
