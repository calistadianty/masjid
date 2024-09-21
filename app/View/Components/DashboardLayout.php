<?php

namespace App\view\Components;

use Illuminate\View\component;
use Illuminate\View\View;

class DashboardLayout extends Component
{
    /** 
     * Get the view / contents the represents the component.
    */
    public function render(): View
    {
        return view('layouts.dashboard');
    }
}
