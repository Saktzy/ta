<?php

namespace App\View\Components\Layout\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Edit extends Component
{
    /**
     * Create a new component instance.
     */
    public $ket;
    public $name;
    public $type;
    public $value;

    public function __construct($ket=null,$name=null,$type=null,$value=null)
    {
        $this->ket = $ket;
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.form.edit');
    }
}
