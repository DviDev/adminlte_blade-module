<?php

namespace Modules\Lte\View\Components\Pages\Examples;

use Illuminate\View\Component;
use Illuminate\View\View;

class Invoice extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('lte::components.pages/examples/invoice');
    }
}
