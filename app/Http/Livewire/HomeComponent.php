<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\HomeSlider;
use App\Models\Product;
class HomeComponent extends Component
{

    public function render()
    {

        $sliders=HomeSlider::all();
        $products=Product::orderBy('created_at','DESC')->get()->take(12);
        return view('livewire.home-component',['sliders'=>$sliders,'products'=>$products])->layout('layouts.base');
    }
}
