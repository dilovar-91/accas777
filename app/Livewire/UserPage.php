<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserPage extends Component
{
    public function render()
    {
        if (!Auth::check()) {
            $this->redirect('/login');

        }
        return view('livewire.user-page');
    }
}
