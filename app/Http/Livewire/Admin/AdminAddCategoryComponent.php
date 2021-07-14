<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use illuminate\Support\Str;
use App\Models\Category;
class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;


    public function generateslug(){
        $this->slug=Str::slug($this->name);
    }
    public function updated($fileds){
        $this->validateOnly($fileds,[
            'name'=>'required',
            'slug'=>'required|unique:categories'
        ]);
    }
    public function storeCategory(){
        $this->validate([
            'name'=>'required',
            'slug'=>'required|unique:categories'
        ]);
        $category=new Category();
        $category->name=$this->name;
        $category->slug=$this->slug;
        $category->save();
        session()->flash('message','Category has been created successfully');
        return redirect()->route('admin.categories');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layoutsDashboard.base');
    }
}
