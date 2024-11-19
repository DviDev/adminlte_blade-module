<?php

namespace Modules\Lte\Http\Livewire\Page;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Modules\Person\Entities\User\UserType;

class Page extends Component
{
    public function render()
    {
        return view('lte::livewire.pages.page');
    }

    public function getItems(): array
    {
        $items = [];
        if (auth()->user()->type->enum() == UserType::SUPER_ADMIN || auth()->user()->type->enum() == UserType::ADMIN) {
            $items[] = ['label' => 'Início', 'url' => route('home')];
        }

        if (Route::is('order')) {
            $items[] = ['label' => 'Pedidos', 'url' => route('store.store_orders.list')];
        }

        if (Route::is('cart')) {
            $items[] = ['label' => 'Voltar', 'url' => url()->previous()];
            $items[] = ['label' => 'Produtos', 'url' => route('products')];
        }
        if (Route::is('checkout')) {
            $items[] = ['label' => 'Carrinho', 'url' => route('cart')];
            $items[] = ['label' => 'Produtos', 'url' => route('products')];
        }
        if (Route::is('order.status')) {
            $items[] = ['label' => 'Início', 'url' => route('home')];
            if (url()->previous() !== url()->current()) {
                $items[] = ['label' => 'Ordem', 'url' => url()->previous()];
            }
            $items[] = ['label' => 'Status', 'url' => '#'];
        }
        if (auth()->user()->type->enum() == UserType::ADMIN) {
//            if (Route::is('admin.product')) {
            $items[] = ['label' => 'Produtos', 'url' => route('admin.products')];
//            }
            if (Route::is('admin.config')) {
                $items[] = ['label' => 'Configurações', 'url' => url()->previous()];
            }

            if (Route::is('admin.user')) {
                $items[] = ['label' => 'Usuários', 'url' => route('admin.users')];
            }
        }

        return $items;
    }

    public function getSidebarMenuItems(): array
    {
        $menu = [];
        if (auth()->user()->type->enum() == UserType::ADMIN || auth()->user()->type->enum() == UserType::ADMIN) {
            $menu['root'][] = ['label' => 'Dashboard', 'url' => route('dashboard'), 'icon' => 'far fa-chart-pie', 'active' => Request::is('dashboard')];
        }

        $menu['root'][] = [
            'label' => auth()->user()->type->enum() == UserType::ADMIN || auth()->user()->type->enum() == UserType::ADMIN
                ? 'Pedidos' : 'Pedidos / Matrículas',
            'url' => route('store.store_orders.list'),
            'icon' => 'far fa-shopping-bag',
            'active' => Request::is('orders')
        ];
        if (Gate::check(UserType::SUPER_ADMIN->value) || Gate::check(UserType::ADMIN->value)) {
            $menu['admin'][] = [
                'label' => 'Produtos',
                'url' => route('admin.products'),
                'icon' => 'far fa-list-alt',
                'active' => request()->routeIs('admin.products') || request()->routeIs('admin.product')
            ];

            if (Gate::check(UserType::SUPER_ADMIN->value)) {
                $menu['admin'][] = [
                    'label' => 'Configurações',
                    'url' => route('admin.configs'),
                    'icon' => 'fas fa-cog',
                    'active' => request()->routeIs('admin.configs') || request()->routeIs('admin.config')
                ];
                $menu['admin'][] = [
                    'label' => 'Relatórios',
                    'url' => route('admin.reports'),
                    'icon' => 'far fa-list-alt',
                    'active' => request()->routeIs('admin.reports')
                ];
                $menu['admin'][] = [
                    'label' => 'Importações',
                    'url' => route('admin.import.list'),
                    'icon' => 'far fa-list-alt',
                    'active' => request()->routeIs('admin.import.list') || request()->routeIs('admin.import.csv') || request()->routeIs('admin.import.csv')
                ];
                $menu['admin'][] = [
                    'label' => 'Pedidos Exportações',
                    'url' => route('admin.exports'),
                    'icon' => 'far fa-list-alt',
                    'active' => request()->routeIs('admin.exports')
                ];
                $menu['admin'][] = [
                    'label' => 'Users',
                    'url' => route('admin.users'),
                    'icon' => 'far fa-list-alt',
                    'active' => request()->routeIs('admin.users') || request()->routeIs('admin.user')
                ];
            }
        }
        return $menu;
    }
}
