<?php

namespace App\View\Components;

use App\Models\Best;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BestComponent extends Component
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
        $bests = Best::all();
        return view('components.best-component' , get_defined_vars());
    }
}
