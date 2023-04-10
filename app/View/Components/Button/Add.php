<?php

namespace App\View\Components\Button;

use Closure;
use Exception;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;


class Add extends Component
{
    /**
     * Create a new component instance.
     */
    public $ket;
    public $url;

    public function __construct($ket=null,$url=null)
    {
        if (!$url) throw new Exception("Button Memerlukan URL");
        $this->ket = $ket;
        $this->url = url($url);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.add');
    }
}
