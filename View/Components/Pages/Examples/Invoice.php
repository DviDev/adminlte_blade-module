<?php

namespace Modules\Lte\View\Components\Pages\Examples;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Invoice extends Component
{
    use DevResources;
    public function render(): View|string
    {
        return view('lte::components.pages/examples/invoice');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::pagesExamplesInvoice;
    }
}
