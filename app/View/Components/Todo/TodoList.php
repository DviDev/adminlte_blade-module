<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components\Todo;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class TodoList extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.todo/todolist');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::TodoList;
    }
}
