<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ComponentInputSelect extends Component
{
        public $name;
        public $options; 
        public $label;

    public function __construct(string $name, array $options, string $label)
    {
        $this->name=$name;
        $this->options=$options;
        $this->label=$label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.component-input-select');
    }
}
