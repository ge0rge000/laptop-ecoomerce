<?php

namespace App\Http\Livewire\Admin;


use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;
class AdminEditHomeSlider extends Component
{

use WithFileUploads;
    public $title;
    public $subtitle;
    public $image;
    public $newimage;
    public $slider_id;

    public function mount($slider_id){
     $slider=HomeSlider::where('id',$slider_id)->first();

     $this->title=$slider->title;
     $this->subtitle=$slider->subtitle;
     $this->image=$slider->image;
     $this->slider_id=$slider->id;
    }
    public function updateslider(){
        $slider=HomeSlider::find($this->slider_id);
        $slider->title=$this->title;
        $slider->subtitle=$this->subtitle;
        if ($this->newimage) {
            $imageName=time().'.'.$this->newimage->extension();
            $this->newimage->storeAs('it_service', $imageName);
            $slider->image=$imageName;
        }
        $slider->save();
        session()->flash('message','the slider has been updated');
        return redirect()->route('admin.sliders');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider')->layout('layoutsDashboard.base');
    }
}
