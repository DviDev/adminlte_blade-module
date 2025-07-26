<?php

namespace Modules\Lte\View\Components\Layout\V1;

use DvUi\Traits\DevResources;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Page extends Component
{
    use DevResources;
    public function render()
    {
        $navbar_menu_items = $this->getItems();

        return view('lte::components.layout.v1.page', compact('navbar_menu_items'));
    }

    public function getItems(): array
    {
        $items = [];
        if (auth()->user()->isAdmin()) {
            $items[] = ['label' => 'Início', 'url' => route('home')];
        }

        if (Route::is('order')) {
            $items[] = ['label' => 'Pedidos', 'url' => route('store.store_orders.list')];
        }

        if (Route::is('cart')) {
            $items[] = ['label' => 'Voltar', 'url' => url()->previous()];
            $items[] = ['label' => 'Meus products', 'url' => route('products')];
        }
        if (Route::is('checkout')) {
            $items[] = ['label' => 'Carrinho', 'url' => route('cart')];
            $items[] = ['label' => 'Meus products', 'url' => route('products')];
        }
        if (Route::is('order.status')) {
            $items[] = ['label' => 'Início', 'url' => route('home')];
            if (url()->previous() !== url()->current()) {
                $items[] = ['label' => 'Ordem', 'url' => url()->previous()];
            }
            $items[] = ['label' => 'Status', 'url' => '#'];
        }
        if (auth()->user()->isAdmin()) {

            if (Route::is('admin.user')) {
                $items[] = ['label' => 'Usuários', 'url' => route('admin.users')];
            }
        }

        return $items;
    }

    protected function getItems1(bool $condition, string $label1, string $label2): array
    {
        $contains = str(url()->previous())->contains(route($condition));

        return [
            'label' => $contains ? $label1 : $label2,
            'url' => $contains ? url()->previous() : route('admin.products'),
        ];
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::LayoutV1Page;
    }
}
