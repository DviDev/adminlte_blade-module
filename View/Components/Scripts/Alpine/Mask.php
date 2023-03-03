<?php

namespace Modules\Lte\View\Components\Scripts\Alpine;

use Illuminate\View\Component;

class Mask extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('lte::components.scripts/alpine/mask');
    }
}
