<?php

namespace Modules\Lte\Listeners;

use Illuminate\Database\Eloquent\Model;
use Modules\Permission\Enums\Actions;
use Modules\Permission\Models\PermissionActionModel;
use Modules\Person\Enums\UserType;
use Modules\Project\Contracts\CreateMenuItemsListenerContract;
use Modules\Project\Entities\ProjectModuleMenuItem\ProjectModuleMenuItemEntityModel;
use Modules\Project\Events\CreateMenuItemsEvent;
use Modules\Project\Models\ProjectModuleEntityDBModel;
use Modules\Project\Models\ProjectModuleMenuModel;

class CreateMenuItemsListener extends CreateMenuItemsListenerContract
{
    public function __construct()
    {
        //
    }

    public function handle(CreateMenuItemsEvent $event): void
    {
        if (ProjectModuleMenuModel::query()->where('name', $this->moduleName())->exists()) {
            return;
        }

        $menu = $this->createMenu($this->moduleName(), $this->moduleName(), 1);

        $this->createMenuItem($menu);
    }

    public function moduleName(): string
    {
        return config('lte.name');
    }

    protected function getAction(): PermissionActionModel
    {
        $action = PermissionActionModel::query()
            ->create(['name' => Actions::view->name, 'title' => trans('Page Examples')]);
        $action->firstOrCreateGroup()
            ->createCondition(UserType::DEVELOPER);

        return $action;
    }

    /**@return ProjectModuleMenuModel|Model */
    protected function createMenu($name, $title, $order = 1): ProjectModuleMenuModel
    {
        return ProjectModuleMenuModel::firstOrCreate(
            ['name' => $name],
            ['title' => $title, 'num_order' => $order, 'active' => true]
        );
    }

    protected function createMenuItem(ProjectModuleMenuModel $menuModel, ?ProjectModuleEntityDBModel $entity = null, $active = null): void
    {
        $p = ProjectModuleMenuItemEntityModel::props();
        $menuModel->menuItems()->create([
            $p->label => trans('Page Examples'),
            $p->num_order => 1,
            $p->title => trans('Page Examples'),
            $p->icon => '<i class="nav-icon fas fa-circle fa-xs text-xs"></i>',
            $p->url => route('lte.pages.dashboard1'),
            $p->active => true,
            $p->action_id => $this->getAction()->id,
        ]);
    }
}
