<?php

namespace Modules\Lte\View\Components\Chart;

use Illuminate\View\Component;

class Morris extends Component
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
        return view('lte::components.chart/morris');
    }
}
