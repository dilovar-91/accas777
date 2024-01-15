<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\CarModel;
use Carbon\Exceptions\Exception;
use Livewire\Component;

class BrandPage extends Component
{


    public $message = "Test";

    public $brands;
    public $models;
    public $brand_id;

    public function mount()
    {
        $this->brands = Brand::get();
    }


    public function loadData($brand_id)
    {
        $this->brand_id = $brand_id;
        $this->models = CarModel::where('brand_id', $brand_id)->get();
    }


    public function render()
    {
        return view('livewire.brand-page');
    }
}
