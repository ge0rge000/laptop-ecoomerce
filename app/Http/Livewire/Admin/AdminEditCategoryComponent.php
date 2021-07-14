<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use\Illuminate\Support\Str;
class AdminEditCategoryComponent extends Component
{
    public $category_slug;
    public $category_id;
    public $name;
    public $slug;

    public function mount($category_slug){
        $this->category_slug=$category_slug;
        $category=Category::where('slug',$this->category_slug)->first();
        $this->category_id=$category->id;
        $this->name=$category->name;
        $this->slug=$category->slug;
    }
     public function updated($fileds){
        $this->validateOnly($fileds,[
            'name'=>'required',
            'slug'=>'required|unique:categories'
        ]);
    }

    public function generateslug(){
        $this->slug=Str::slug($this->name); ////because the name edit
    }

    public function updateCategory(){

        $this->validate([

            'name'=>'required',
            'slug'=>'required|unique:categories'


        ]);
        $category=Category::find($this->category_id);
        $category->name=$this->name;
        $category->slug=$this->slug;
        $category->save();
        session()->flash('message','the category has been edited');
        return redirect()->route('admin.categories');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-category-component')->layout('layoutsDashboard.base');
    }
}
