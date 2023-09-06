<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CountryForm extends Component
{
    public ?string $name;
    public ?string $iso;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $iso
     */
    public function __construct($name = '', $iso = '')
    {
        $this->name = $name;
        $this->iso = $iso;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.country-form');
    }
}
