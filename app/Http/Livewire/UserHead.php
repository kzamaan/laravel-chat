<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Illuminate\View\View;

class UserHead extends Component
{
    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.user-head');
    }
}