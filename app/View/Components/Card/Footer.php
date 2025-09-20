<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components\Card;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Footer extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.card/footer');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::CardFooter;
    }
}
