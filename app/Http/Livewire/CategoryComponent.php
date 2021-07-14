<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithPagination;
    public $category_id;
    public function mount($category_id){
      $this->category_id=$category_id;

    }


    public function render()
    {
        $categories=Category::all();

        $products_category=Product::where('category_id',$this->category_id)->paginate(9);

        return view('livewire.category-component',['products_category'=>$products_category,'categories'=>$categories])->layout('layouts.base');
    }
}
