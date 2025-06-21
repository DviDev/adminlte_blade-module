<?php

namespace Modules\Lte\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
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
}
