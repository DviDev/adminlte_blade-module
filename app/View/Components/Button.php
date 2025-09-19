<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Button extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.button');
    }

    public function borderColor()
    {
        $item = collect([
            ['color' => 'blue', 'value' => $this->primary],
            ['color' => 'purple', 'value' => $this->secondary],
            ['color' => 'green', 'value' => $this->success],
            ['color' => 'red', 'value' => $this->danger],
            ['color' => 'yellow', 'value' => $this->warning],
            ['color' => 'blue', 'value' => $this->info],
            ['color' => 'transparent', 'value' => $this->link],
            ['color' => 'light', 'value' => $this->light],
            ['color' => 'gray', 'value' => $this->dark],
        ])->reject(fn ($color) => ! $color || ! $color['value'])->last();

        return $item ? $item['color'] : null;
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Button;
    }
}
