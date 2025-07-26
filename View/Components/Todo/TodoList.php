<?php

namespace Modules\Lte\View\Components\Todo;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

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
