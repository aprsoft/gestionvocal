<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ComponentInput extends Component
{
    public $label; 
    public $placeholder;       
    public $name;
    public $type;
    public $atributte;
   

    public function __construct(string $label, string $placeholder, string $name, string $type='text', string $atributte='')
    {
       
        $this->label=$label;
        $this->placeholder=$placeholder;
        $this->name=$name;
        $this->type=$type;
        $this->atributte=$atributte;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.component-input');
    }
}
