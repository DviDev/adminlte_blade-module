<?php

namespace Modules\Lte\View\Components\Form;

use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\View\BaseBladeComponent;

class Summernote extends BaseBladeComponent
{
    public function __construct(
        public ?array $attr = null,
        public ?string $label = null,
        public ?bool $required = null,
        public ?bool $validate = null,
        public $value = null,
        public string|int|null $id = null,
        public bool $airmode = false
    ) {
        parent::__construct($attr, $label, $required, $validate, $value, $id);
    }

    public function render()
    {
        return view('lte::components.form.summernote');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormSummernote;
    }
}
