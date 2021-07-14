<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;
class AdminAddHomeSlider extends Component
{
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $image;

    public function storeslider(){
        $slider= new HomeSlider();

        $slider->title=$this->title;
        $slider->subtitle=$this->subtitle;

        $imageName=time().'.'.$this->image->extension();
        $this->image->storeAs('it_service', $imageName);
     $slider->image= $imageName;
       $slider->save();
       session()->flash('message','the slider has been added');
       return redirect()->route('admin.sliders');


    }
    public function render()
    {
        return view('livewire.admin.admin-add-home-slider')->layout('layoutsDashboard.base');
    }
}
