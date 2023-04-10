<?php

namespace App\View\Components\Layout\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public $ket;
    public $name;
    public $type;

    public function __construct($ket=null,$name=null,$type=null)
    {
        $this->ket = $ket;
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.form.input');
    }
}
