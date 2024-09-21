<?php

namespace App\View\components;

use Illuminate\View\Component;
use Illuminate\View\View;

class landinglayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view ('layouts.landing');
    }
}