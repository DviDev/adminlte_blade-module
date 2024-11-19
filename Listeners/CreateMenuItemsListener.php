<?php

namespace Modules\Lte\Listeners;

use Modules\Base\Entities\Actions\Actions;
use Modules\Person\Entities\User\UserType;
use Modules\Project\Entities\MenuItem\MenuItemEntityModel;
use Modules\Project\Events\CreateMenuItemsEvent;
use Modules\Project\Listeners\CreateMenuItemsListenerContract;
use Modules\Project\Models\MenuModel;
use Modules\Project\Models\ProjectActionModel;
use Modules\Project\Models\ProjectModuleEntityDBModel;

class CreateMenuItemsListener extends CreateMenuItemsListenerContract
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CreateMenuItemsEvent $event): void
    {
        if (MenuModel::query()->where('name', $this->moduleName())->exists()) {
            return;
        }

        $menu = $this->createMenu($this->moduleName(), $this->moduleName(), 1);

        $this->createMenuItem($menu);
    }

    function moduleName(): string
    {
        return config('lte.name');
    }

    protected function getAction(): ProjectActionModel
    {
        $action = ProjectActionModel::query()
            ->create(['name' => Actions::view->name, 'title' => trans('Page Examples')]);
        $action->firstOrCreateGroup()
            ->createCondition(UserType::DEVELOPER);
        return $action;
    }

    protected function createMenu($name, $title, $order = 1): MenuModel
    {
        return MenuModel::firstOrCreate(
            ['name' => $name],
            ['title' => $title, 'num_order' => $order,]
        );
    }

    protected function createMenuItem(MenuModel $menuModel, ProjectModuleEntityDBModel $entity = null, $key = null): void
    {
        $p = MenuItemEntityModel::props();
        $menuModel->menuItems()->create([
            $p->label => trans('Page Examples'),
            $p->num_order => 1,
            $p->title => trans('Page Examples'),
            $p->icon => '<i class="nav-icon fas fa-circle fa-xs text-xs"></i>',
            $p->route => route('lte.pages.dashboard1'),
            $p->active => true,
            $p->action_id => $this->getAction()->id,
        ]);
    }
}
