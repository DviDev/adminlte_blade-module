<?php

namespace Modules\Lte\View\Components\Layout;

use Illuminate\View\Component;

class V1 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('lte::components.layout.v1');
    }
}
