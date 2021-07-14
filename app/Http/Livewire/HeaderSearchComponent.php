<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
class HeaderSearchComponent extends Component
{

    public $search;


    public function mount()
    {
        $this->fill(request()->only('search'));
    }
    public function render()
    {

        return view('livewire.header-search-component');
    }
}
