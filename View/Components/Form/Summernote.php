<?php

namespace Modules\Lte\View\Components\Form;

use Modules\DvUi\View\BaseBladeComponent;

class Summernote extends BaseBladeComponent
{
    public function __construct(
        public array|null      $attr = null,
        public string|int|null $id = null,
        public string|null     $label = null,
        public bool            $required = false,
        public bool            $validate = false
    )
    {
        parent::__construct($attr, $label, $required, $validate);
    }

    public function render()
    {
        return view('lte::components.form.summernote');
    }
}
