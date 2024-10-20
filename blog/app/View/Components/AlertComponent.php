<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AlertComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $shortmessage;
    public $longmessage;
    public $cssclass;
    public function __construct($shortmessage, $longmessage, $cssclass = "green")
    {
        $this->shortmessage = $shortmessage;
        $this->longmessage = $longmessage;
        $this->cssclass = $cssclass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert-component');
    }
}
