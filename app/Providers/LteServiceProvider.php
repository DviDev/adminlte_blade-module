<?php

declare(strict_types=1);

namespace Modules\Lte\Providers;

use Livewire\Livewire;
use Modules\Base\Contracts\BaseServiceProviderContract;
use Modules\Lte\Http\Livewire\Dashboard\DashboardV1;
use Modules\Lte\Http\Livewire\Layout\Navbar\Notifications;
use Modules\Lte\Livewire\Layout\SidebarMenu;
use Modules\Lte\View\Components\Box;
use Modules\Lte\View\Components\Button;
use Modules\Lte\View\Components\Card\Body;
use Modules\Lte\View\Components\Card\Card;
use Modules\Lte\View\Components\Card\Footer;
use Modules\Lte\View\Components\Card\Header;
use Modules\Lte\View\Components\Card\Tab;
use Modules\Lte\View\Components\Card\TabContent;
use Modules\Lte\View\Components\Chart\Morris;
use Modules\Lte\View\Components\Chart\Morris\Donut;
use Modules\Lte\View\Components\Chart\Sparkline;
use Modules\Lte\View\Components\Chart\Word;
use Modules\Lte\View\Components\Chat;
use Modules\Lte\View\Components\Error;
use Modules\Lte\View\Components\Form;
use Modules\Lte\View\Components\Form\Date;
use Modules\Lte\View\Components\Form\DateMask;
use Modules\Lte\View\Components\Form\Input;
use Modules\Lte\View\Components\Form\Select;
use Modules\Lte\View\Components\Form\Summernote;
use Modules\Lte\View\Components\Label;
use Modules\Lte\View\Components\Layout\Navbar;
use Modules\Lte\View\Components\Layout\Page;
use Modules\Lte\View\Components\Layout\Sidebar;
use Modules\Lte\View\Components\Layout\V1;
use Modules\Lte\View\Components\Loading;
use Modules\Lte\View\Components\Modal;
use Modules\Lte\View\Components\Nav\Tab\Content;
use Modules\Lte\View\Components\Nav\Tab\Item;
use Modules\Lte\View\Components\PageAlert;
use Modules\Lte\View\Components\Pages\Examples\Invoice;
use Modules\Lte\View\Components\Pages\LayoutBase;
use Modules\Lte\View\Components\Scripts\Alpine\Mask;
use Modules\Lte\View\Components\Toastr;
use Modules\Lte\View\Components\Todo\TodoList;

final class LteServiceProvider extends BaseServiceProviderContract
{
    public function boot(): void
    {
        parent::boot();
        /*Feature::define(ProfileActivity::class);
        Feature::define(ProfileTimeline::class);*/
    }

    public function provides(): array
    {
        return [
            RouteServiceProvider::class,
            LteEventServiceProvider::class,
        ];
    }

    public function getModuleName(): string
    {
        return 'Lte';
    }

    public function getModuleNameLower(): string
    {
        return 'lte';
    }

    protected function registerComponents(): void
    {
        $this->publishableComponent('pages.examples.invoice', Invoice::class);
        Livewire::component('lte::dashboard.v1', DashboardV1::class);
        Livewire::component('lte::layout.navbar.notifications', Notifications::class);
        Livewire::component('lte::page', \Modules\Lte\Http\Livewire\Page\Page::class);

        Livewire::component('lte::dashboard.dashboard-v1', DashboardV1::class);
        Livewire::component('lte::layout.navbar.notifications', Notifications::class);
        Livewire::component('lte::layout.sidebar-menu', SidebarMenu::class);
        Livewire::component('lte::page', Page::class);

        $this->publishableComponent('card', Card::class);
        $this->publishableComponent('card.header', Header::class);
        $this->publishableComponent('card.body', Body::class);
        $this->publishableComponent('card.footer', Footer::class);
        $this->publishableComponent('card.tab', Tab::class);
        $this->publishableComponent('card.tabcontent', TabContent::class);
        $this->publishableComponent('chart.morris.donut', Donut::class);
        $this->publishableComponent('chart.morris', Morris::class);
        $this->publishableComponent('chart.sparkline', Sparkline::class);
        $this->publishableComponent('chart.word', Word::class);
        $this->publishableComponent('form.imput.date', Date::class);
        $this->publishableComponent('form.input', Input::class);
        $this->publishableComponent('form.select', Select::class);
        $this->publishableComponent('form.date-mask', DateMask::class);
        $this->publishableComponent('form.summernote', Summernote::class);
        $this->publishableComponent('layout.navbar', Navbar::class);
        $this->publishableComponent('layout.page-card', Page::class);
        $this->publishableComponent('layout.sidebar', Sidebar::class);
        $this->publishableComponent('layout.v1', V1::class);
        $this->publishableComponent('pages.layout-base', LayoutBase::class);
        $this->publishableComponent('nav.tab', \Modules\Lte\View\Components\Nav\Tab\Tab::class);
        $this->publishableComponent('nav.tab.item', Item::class);
        $this->publishableComponent('nav.tab.content', Content::class);
        $this->publishableComponent('scripts.alpine.mask', Mask::class);
        $this->publishableComponent('todo.todolist', TodoList::class);
        $this->publishableComponent('box', Box::class);
        $this->publishableComponent('button', Button::class);
        $this->publishableComponent('chat', Chat::class);
        $this->publishableComponent('error', Error::class);
        $this->publishableComponent('form', Form::class);
        $this->publishableComponent('input', \Modules\Lte\View\Components\Input::class);
        $this->publishableComponent('label', Label::class);
        $this->publishableComponent('loading', Loading::class);
        $this->publishableComponent('modal', Modal::class);
        $this->publishableComponent('page_alert', PageAlert::class);
        $this->publishableComponent('toastr', Toastr::class);
    }
}
