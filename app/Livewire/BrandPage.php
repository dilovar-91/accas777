<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Component;

class BrandPage extends Component
{


    public $message = "Test";

    public $brands;

    public function mount()
    {
        $this->brands = Brand::get();
    }


    public function render()
    {
        return view('livewire.brand-page');
    }
}
