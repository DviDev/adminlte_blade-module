<?php

declare(strict_types=1);

namespace Modules\Lte\Services;

use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Interfaces\DvuiComponentSuiteContract;
use Modules\Lte\View\Components\Form\Date;
use Modules\Lte\View\Components\Form\Input;
use Modules\Lte\View\Components\Form\Select;
use Modules\Lte\View\Components\Layout\Page;

final class ComponentMap implements DvuiComponentSuiteContract
{
    public function getSuiteIdentifier(): string
    {
        return 'lte';
    }

    public function getComponentMappings(): array
    {
        return [
            DvuiComponentAlias::LayoutAdminPage->value => Page::class,
            DvuiComponentAlias::FormInput->value => Input::class,
            DvuiComponentAlias::FormSelect->value => Select::class,
            DvuiComponentAlias::FormDate->value => Date::class,
        ];
    }
}
