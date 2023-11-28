<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputEmail extends Component
{
    /**
     * Create a new component instance.
     */
    public $property;
    public $entity;
    public function __construct($property, $entity)
    {
        $this-> property = $property;
        $this-> entity = $entity;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-email');
    }
}
