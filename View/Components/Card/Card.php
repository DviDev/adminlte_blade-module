<?php

namespace Modules\Lte\View\Components\Card;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Card extends Component
{
    use DevResources;
    public function __construct(public ?array $attr = null)
    {
        //
    }

    public function render()
    {
        return view('lte::components.card.index');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Card;
    }
}
