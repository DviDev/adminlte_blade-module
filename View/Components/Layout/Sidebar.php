<?php

namespace Modules\Lte\View\Components\Layout;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Request;
use Illuminate\View\Component;
use Modules\App\Entities\User\UserType;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $items = $this->getSidebarMenuItems();
        return view('lte::components.layout.sidebar', compact('items'));
    }

    public function getSidebarMenuItems(): array
    {
        $menu = [];
        if (auth()->user()->isAdmin() || auth()->user()->isAdmin()) {
            $menu['root'][] = ['label' => 'Dashboard', 'url' => route('dashboard'), 'icon' => 'far fa-chart-pie', 'active' => \Illuminate\Support\Facades\Request::is('dashboard')];
        }
        $menu['root'][] = [
            'label' => 'Menu',
            'url' => route('menu'),
            'icon' => 'far fa-shopping-bag',
            'active' => Request::is('menu')
        ];
        $menu['root'][] = [
            'label' => 'My orders',
            'url' => route('orders'),
            'icon' => 'far fa-shopping-bag',
            'active' => Request::is('orders')
        ];
        if (Gate::check(UserType::SUPER_ADMIN->value) || Gate::check(UserType::ADMIN->value)) {
            $menu['store'][] = [
                'label' => 'Products',
                'url' => route('admin.products'),
                'icon' => 'fas fa-cog',
                'active' => request()->routeIs('admin.products') || request()->routeIs('admin.product')
            ];

            if (Gate::check(UserType::ADMIN->value)) {
                $menu['admin'][] = [
                    'label' => 'Configurações',
                    'url' => route('admin.configs'),
                    'icon' => 'fas fa-cog',
                    'active' => request()->routeIs('admin.configs') || request()->routeIs('admin.config')
                ];

            }
            if (Gate::check(UserType::SUPER_ADMIN->value) || Gate::check(UserType::ADMIN->value)) {
                $menu['admin'][] = [
                    'label' => 'Relatórios',
                    'url' => '#',//route('admin.reports'),
                    'icon' => 'far fa-list-alt',
                    'active' => request()->routeIs('admin.reports')
                ];

                $menu['admin'][] = [
                    'label' => 'Pedidos Exportações',
                    'url' => '#',/*route('admin.exports'),*/
                    'icon' => 'far fa-list-alt',
                    'active' => request()->routeIs('admin.exports')
                ];
            }
            if (Gate::check(UserType::ADMIN->value)) {
                $menu['admin'][] = [
                    'label' => 'Importações',
                    'url' => '#',/*route('admin.import.list'),*/
                    'icon' => 'far fa-list-alt',
                    'active' => request()->routeIs('admin.import.list') || request()->routeIs('admin.import.csv') || request()->routeIs('admin.import.csv')
                ];

                $menu['admin'][] = [
                    'label' => 'Users',
                    'url' => route('admin.users'),
                    'icon' => 'far fa-list-alt',
                    'active' => request()->routeIs('admin.users') || request()->routeIs('admin.user')
                ];
            }
        }
        if (auth()->user()->isAdmin() && config('app.env') == 'local') {
            $menu['devops'][] = [
                'label' => 'Logs',
                'url' => config('app.url') . '/logs', 'target' => '_blank',
                'icon' => 'fas fa-cogs',
                'active' => request()->url() == config('app.url') . '/logs'
            ];
            $menu['devops'][] = [
                'label' => 'Log viewer',
                'url' => config('app.url') . '/log-viewer',
                'target' => '_blank',
                'icon' => 'fas fa-cogs',
                'active' => request()->url() == config('app.url') . '/log-viewer'
            ];
            $menu['devops'][] = [
                'label' => 'Clockwork',
                'url' => config('app.url') . '/clockwork', 'target' => '_blank',
                'icon' => 'fas fa-cogs',
                'active' => request()->url() == config('app.url') . '/clockwork'
            ];
            $menu['devops'][] = [
                'label' => 'Telescope',
                'url' => config('app.url') . '/telescope', 'target' => '_blank',
                'icon' => 'fas fa-cogs',
                'active' => request()->url() == config('app.url') . '/telescope'
            ];
            $menu['devops'][] = [
                'label' => 'Mailhog',
                'url' => 'http://localhost:8025',
                'target' => '_blank',
                'icon' => 'fas fa-envelope',
                'active' => request()->url() == 'http://localhost:8025'
            ];
        }
        return $menu;
    }
}
