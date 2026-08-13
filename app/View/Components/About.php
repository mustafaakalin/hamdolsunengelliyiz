<?php

namespace App\View\Components;

use Closure;
use App\Models\About as AboutModel;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class About extends Component
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
        $abouts = AboutModel::all();
        return view('components.about', compact('abouts'));
    }
}
