<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
class SearchComponent extends Component
{

    public $search;


    public function mount()
    {
        $this->fill(request()->only('search'));
    }
    public function render()
    {
        $products=Product::where('name','like','%'.$this->search.'%')->paginate(6);
        $categories=Category::all();
        return view('livewire.search-component',['categories'=>$categories,'products'=>$products])->layout('layouts.base');
    }
}
