<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithPagination;


class AdminHomeSlider extends Component
{
    use WithPagination;

    public function deleteslider($id){

        $slider=HomeSlider::find($id);

        $slider->delete();

        session()->flash('message','slider has been deleted');
    }
    public function render()
    {
        $sliders=HomeSlider::paginate(3);
        return view('livewire.admin.admin-home-slider',['sliders'=>$sliders])->layout('layoutsDashboard.base');
    }
}
