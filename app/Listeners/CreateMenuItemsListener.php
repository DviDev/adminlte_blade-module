<?php

declare(strict_types=1);

namespace Modules\Lte\Listeners;

use Modules\Permission\Enums\Actions;
use Modules\Permission\Models\PermissionActionModel;
use Modules\Person\Enums\UserType;
use Modules\Project\Contracts\CreateMenuItemsListenerContract;
use Modules\Project\Entities\ProjectModuleMenuItem\ProjectModuleMenuItemEntityModel;
use Modules\Project\Events\CreateMenuItemsEvent;

final class CreateMenuItemsListener extends CreateMenuItemsListenerContract
{
    protected function moduleName(): string
    {
        return 'Lte';
    }

    protected function createMenuItems(CreateMenuItemsEvent $event): void
    {
        $p = ProjectModuleMenuItemEntityModel::props();
        $event->menu->menuItems()->create([
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
