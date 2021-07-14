<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $regular_price;
    public $sale_price;
    public $short_descripation;
    public $descripation;
    public $sku;
    public $stock;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;

    public function mount()
    {
        $this->stock="instock";
        $this->featured=0;
    }
    public function generateslug(){
       $this->slug=Str::slug($this->name,'-');

    }
    public function updated($fileds){
        $this->validateOnly($fileds,[
            'name'=>'required',
            'slug'=>'required|unique:products',
            'regular_price'=>'required|numeric',
            'sale_price'=>'required|numeric',
            'short_descripation'=>'required',
            'descripation'=>'required',
            'sku'=>'required',
            'stock'=>'required',
            'featured'=>'required',
            'quantity'=>'required|numeric',
            'image'=>'required|mimes:jpeg,png',
        ]);
    }
        public function addProduct(){

            $this->validate([
            'name'=>'required',
            'slug'=>'required|unique:products',
            'regular_price'=>'required|numeric',
            'sale_price'=>'required|numeric',
            'short_descripation'=>'required',
            'descripation'=>'required',
            'sku'=>'required',
            'stock'=>'required',
            'featured'=>'required',
            'quantity'=>'required|numeric',
            'image'=>'required|mimes:jpeg,png',
            ]);
            $product=new Product();
            $product->name=$this->name;
            $product->slug=$this->slug;
            $product->regular_price=$this->regular_price;
            $product->sale_price=$this->sale_price;
            $product->short_descripation=$this->short_descripation;
            $product->descripation=$this->descripation;
            $product->sku=$this->sku;
            $product->stock_status=$this->stock;
            $product->featured=$this->featured;
            $product->quantity=$this->quantity;
            $imageName = time().'.'.$this->image->extension();
            $this->image->storeAs('it_service', $imageName);
            $name_reg=explode('.',$imageName);
            $product->image=$name_reg[0];
            $product->category_id=$this->category_id;
            $product->save();
            session()->flash('message','the product has been added');
            return redirect()->route('admin.products');
        }
    public function render()
    {

        $categories=Category::all();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layoutsDashboard.base');
    }
}
