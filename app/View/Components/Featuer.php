<?php

namespace App\View\Components;

use App\Models\Featuer as ModelsFeatuer;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Featuer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $featuers = ModelsFeatuer::all();
        return view('components.featuer' , get_defined_vars());
    }
}
