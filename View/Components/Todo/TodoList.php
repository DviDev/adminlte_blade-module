<?php

namespace Modules\Lte\View\Components\Todo;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class TodoList extends Component
{
    use DevResources;
    public function render()
    {
        return view('lte::components.todo/todolist');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::TodoList;
    }
}
