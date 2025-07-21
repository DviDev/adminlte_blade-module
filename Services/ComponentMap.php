<?php

namespace Modules\Lte\Services;

use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Interfaces\DvuiComponentSuiteContract;
use Modules\Lte\View\Components\Layout\Page;

class ComponentMap implements DvuiComponentSuiteContract
{

    public function getSuiteIdentifier(): string
    {
        return 'lte';
    }

    public function getComponentMappings(): array
    {
        return [
            DvuiComponentAlias::LayoutAdminPage->value => Page::class,
        ];
    }
}
