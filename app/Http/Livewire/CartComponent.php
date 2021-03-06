<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Cart;
class CartComponent extends Component
{

    public function increaseQuantity($rowId){
        $product=Cart::get($rowId);
        $qty=$product->qty +1;
        Cart::update($rowId,$qty);
    }

    public function decreaseQuantity($rowId){
        $product=Cart::get($rowId);
        if($qty=$product->qty==1)
        {
            $qty===1;
        }
        else{
            $qty=$product->qty -1 ;
        }
        Cart::update($rowId,$qty);

    }
    public function destroy($rowId){
        Cart::remove($rowId);
        session()->flash('suceess message','Item has benn removed');
    }
 
    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');;
    }
}
