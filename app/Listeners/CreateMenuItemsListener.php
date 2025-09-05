<?php

namespace Modules\Lte\Listeners;

use Modules\Permission\Enums\Actions;
use Modules\Permission\Models\PermissionActionModel;
use Modules\Person\Enums\UserType;
use Modules\Project\Contracts\CreateMenuItemsListenerContract;
use Modules\Project\Entities\ProjectModuleMenuItem\ProjectModuleMenuItemEntityModel;
use Modules\Project\Models\ProjectModuleEntityDBModel;
use Modules\Project\Models\ProjectModuleMenuModel;

class CreateMenuItemsListener extends CreateMenuItemsListenerContract
{
    public function moduleName(): string
    {
        return config('lte.name');
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

    protected function getAction(): PermissionActionModel
    {
        $action = PermissionActionModel::query()->create([
            'name' => Actions::view->name,
            'title' => trans('Page Examples'),
        ]);
        $action->firstOrCreateGroup()->createCondition(UserType::DEVELOPER);

        return $action;
    }
}
