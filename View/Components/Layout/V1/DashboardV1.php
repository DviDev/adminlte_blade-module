<?php

namespace Modules\Lte\View\Components\Layout\V1;

use Illuminate\View\Component;

class DashboardV1 extends Component
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
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('store::livewire.dashboard.dashboard-v1');
    }

    public function getItems()
    {
        return [];
    }
}
