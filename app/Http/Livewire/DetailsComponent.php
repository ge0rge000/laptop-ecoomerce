<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cart;
use App\Models\Category;
class DetailsComponent extends Component
{

    public $slug;
    public $qty;


    public function mount($slug){

        $this->slug=$slug;

        $this->qty=1;



    }
    public function store($product_id,$product_name,$product_price){
        Cart::add($product_id,$product_name,$this->qty,$product_price)->associate('App\Models\Product');
        session()->flash('suceess message','Item added in cart');
        return redirect()->route('product.cart');
         
    }
    public function increaseQuantity($rowId){
        $product=Cart::get($rowId);
        $qty=$product->qty +1;
        Cart::update($rowId,$qty);
    }

    public function decreaseQuantity($rowId){
        $product=Cart::get($rowId);
        if($qty=$product->qty==1)
        {
            $qty=$product->qty;
        }
        else{
            $qty=$product->qty -1 ;
        }

    }
    public function render()
    {

        $product=Product::where('slug',$this->slug)->first();
        $categories=Product::all();
        $lastproduct_relate=Product::where('category_id',$product->category_id)->where('id','!=',$product->id)->inRandomOrder()->limit(3)->get();

        return view('livewire.details-component',['product'=>$product,'lastproduct_relate'=>$lastproduct_relate,'categories'=>$categories])->layout('layouts.base');
    }
}
