<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Models\Category;
use Cart;
class ShopComponent extends Component
{

    public $min_price;
    public $max_price;
    use WithPagination;
    public function mount(){
        $this->min_price=1;
        $this->max_price=20000;
    }
    public function addToWishList($product_id,$product_name,$product_price){
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component','refreshComponent');
    }
    public function removeFromWishList($product_id){
        foreach(Cart::instance('wishlist')->content() as $wishl)
        {
            if($wishl->id==$product_id){
                Cart::instance('wishlist')->remove($wishl->rowId);
                $this->emitTo('wishlist-count-component','refreshComponent');

                return ;
            }
        }
    }
    public function render()
    {

        $categories=Category::all();
        $products=Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->paginate(9);

        return view('livewire.shop-component',['products'=>$products,'categories'=>$categories])->layout('layouts.base');;
    }
}
