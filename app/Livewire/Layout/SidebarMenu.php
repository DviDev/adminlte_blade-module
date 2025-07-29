<?php

namespace Modules\Lte\Livewire\Layout;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class SidebarMenu extends Component
{
    public $items = [];
    protected $listeners = ['menuItemUpdated' => '$refresh'];

    public function render()
    {
        return view('lte::livewire.layout.sidebar-menu');
    }

    public function logout(): void
    {
        Auth::guard('web')->logout();

        Session::invalidate();
        Session::regenerateToken();

        $this->redirectRoute('login');
    }
}
