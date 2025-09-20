<?php

declare(strict_types=1);

namespace Modules\Lte\Http\Livewire\Layout\Navbar;

use Livewire\Component;

final class Notifications extends Component
{
    protected $listeners = ['refresh' => '$refresh'];

    public function render()
    {
        return view('lte::livewire.layout.navbar.notifications');
    }

    public function notifications()
    {
        return auth()->user()?->notifications();
    }
}
