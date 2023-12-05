<?php

namespace Modules\Lte\Http\Livewire\Layout\Navbar;

use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Modules\App\Models\NotificationModel;

class Notifications extends Component
{
    protected $listeners = ['refresh' => '$refresh'];

    public function render()
    {
        return view('lte::livewire.layout.navbar.notifications');
    }

    /**
     * @return Builder|NotificationModel[]
     */
    public function notifications()
    {
        return auth()->user()?->notifications();
    }
}
