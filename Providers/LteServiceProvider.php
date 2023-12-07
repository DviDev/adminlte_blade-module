<?php

namespace Modules\Lte\Providers;

use App\Features\User\ProfileActivity;
use App\Features\User\ProfileTimeline;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Laravel\Pennant\Feature;
use Livewire\Livewire;
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
use Modules\Lte\View\Components\Scripts\Alpine\Mask;
use Modules\Lte\View\Components\Toastr;
use Modules\Lte\View\Components\Todo\TodoList;

class LteServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Lte';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'lte';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Database/Migrations'));
        $this->registerComponents();
        Feature::define(ProfileActivity::class);
        Feature::define(ProfileTimeline::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        Livewire::component('lte::dashboard.v1', DashboardV1::class);
        Livewire::component('lte::layout.navbar.notifications', Notifications::class);
        Livewire::component('lte::page', \Modules\Lte\Http\Livewire\Page\Page::class);
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower . '.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/config.php'), $this->moduleNameLower
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/' . $this->moduleNameLower);

        $sourcePath = module_path($this->moduleName, 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], ['views', $this->moduleNameLower . '-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/' . $this->moduleNameLower);

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $this->moduleNameLower);
        } else {
            $this->loadTranslationsFrom(module_path($this->moduleName, 'Resources/lang'), $this->moduleNameLower);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (\Config::get('view.paths') as $path) {
            if (is_dir($path . '/modules/' . $this->moduleNameLower)) {
                $paths[] = $path . '/modules/' . $this->moduleNameLower;
            }
        }
        return $paths;
    }

    private function registerComponents()
    {

        Livewire::component('lte::dashboard.darshboard-v1', DashboardV1::class);
        Livewire::component('lte::layout.navbar.notifications', Notifications::class);
        Livewire::component('lte::layout.sidebar-menu', SidebarMenu::class);
        Livewire::component('lte::page', Page::class);

        Blade::component('lte::card', Card::class);
        Blade::component('lte::card.header', Header::class);
        Blade::component('lte::card.body', Body::class);
        Blade::component('lte::card.footer', Footer::class);
        Blade::component('lte::card.tab', Tab::class);
        Blade::component('lte::card.tabcontent', TabContent::class);
        Blade::component('lte::chart.morris.donut', Donut::class);
        Blade::component('lte::chart.morris', Morris::class);
        Blade::component('lte::chart.sparkline', Sparkline::class);
        Blade::component('lte::chart.word', Word::class);
        Blade::component('lte::form.imput.date', Date::class);
        Blade::component('lte::form.input', Input::class);
        Blade::component('lte::form.select', Select::class);
        Blade::component('lte::form.date-mask', DateMask::class);
        Blade::component('lte::form.summernote', Summernote::class);
        Blade::component('lte::layout.navbar', Navbar::class);
        Blade::component('lte::layout.page-card', Page::class);
        Blade::component('lte::layout.sidebar', Sidebar::class);
        Blade::component('lte::layout.v1', V1::class);
        Blade::component('lte::nav.tab', \Modules\Lte\View\Components\Nav\Tab\Tab::class);
        Blade::component('lte::nav.tab.item', Item::class);
        Blade::component('lte::nav.tab.content', Content::class);
        Blade::component('lte::scripts.alpine.mask', Mask::class);
        Blade::component('lte::todo.todolist', TodoList::class);
        Blade::component('lte::box', Box::class);
        Blade::component('lte::button', Button::class);
        Blade::component('lte::chat', Chat::class);
        Blade::component('lte::error', Error::class);
        Blade::component('lte::form', Form::class);
        Blade::component('lte::input', \Modules\Lte\View\Components\Input::class);
        Blade::component('lte::label', Label::class);
        Blade::component('lte::loading', Loading::class);
        Blade::component('lte::modal', Modal::class);
        Blade::component('lte::page_alert', PageAlert::class);
        Blade::component('lte::toastr', Toastr::class);
    }
}
