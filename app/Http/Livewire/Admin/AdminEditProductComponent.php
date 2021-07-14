<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithFileUploads;
class AdminEditProductComponent extends Component
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
    public $newimage;
    public $category_id;
    public $product_id;
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
    public function mount($product_slug)
    {
       $product=Product::where('slug',$product_slug)->first();
       $this->name=$product->name;
       $this->slug=$product->slug;
       $this->regular_price=$product->regular_price;
       $this->sale_price=$product->sale_price;
       $this->short_descripation=$product->short_descripation;
       $this->descripation=$product->descripation;
       $this->sku=$product->SKU;
       $this->stock=$product->stock_status;
       $this->featured=$product->featured;
       $this->quantity=$product->quantity;
       $this->image=$product->image;
       $this->category_id=$product->category_id ;
       $this->product_id=$product->id;
    }
    public function generateslug(){
        $this->slug=Str::slug($this->name,'-');
    }
   
    public function updateproduct(){

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
        $product= Product::find($this->product_id);
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

        if($this->newimage){
                $imageName = time().'.'.$this->newimage->extension();
        $this->newimage->storeAs('it_service', $imageName);
        $name_reg=explode('.',$imageName);
        $product->image=$name_reg[0];
        }

        $product->category_id=$this->category_id;
        $product->save();
        session()->flash('message','the product has been updated');
        session()->flash('message_p','the input filed is required');


        return redirect()->route('admin.products');
    }
    public function render()
    {
        $categories=Category::all();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories])->layout('layoutsDashboard.base');
    }
}
