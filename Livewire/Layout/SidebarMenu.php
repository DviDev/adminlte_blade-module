<?php

namespace Modules\Lte\Livewire\Layout;

use Livewire\Component;

class SidebarMenu extends Component
{
    public $items = [];

    protected $listeners = ['menuItemUpdated' => '$refresh'];

    public function render()
    {
        return view('lte::livewire.layout.sidebar-menu');
    }
}
