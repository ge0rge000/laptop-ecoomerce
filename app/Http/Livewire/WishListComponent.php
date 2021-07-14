<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use App\Models\Category;
class WishListComponent extends Component
{
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

public function moveProduct($rowId){
    $item=Cart::instance('wishlist')->get($rowId);
    Cart::instance('wishlist')->remove($rowId);
    Cart::instance('wishlist')->add($item->id,$item->name,1,$item->price)
    ->associate('App\Models\Product');

    $this->emitTo('wishlist-count-component','refreshComponent');


}
    public function render()
    {

        $categories=Category::get();
        return view('livewire.wish-list-component',['categories'=>$categories])->layout('layouts.base');
    }
}
