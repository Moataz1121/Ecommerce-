<?php

namespace App\View\Components;

use App\Models\Letter;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LetterComponent extends Component
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
        $letters = Letter::all();
        return view('components.letter-component' , get_defined_vars());
    }
}
