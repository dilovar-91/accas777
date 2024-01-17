<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserPage extends Component
{
    public function render()
    {
        if (!Auth::check()) {
            // Redirect to the login page or any other desired page
            return redirect('/login');
        }
        return view('livewire.user-page');
    }
}
