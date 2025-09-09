<?php

namespace Modules\Lte\Listeners;

use Modules\DBMap\Domains\ScanTableDomain;

class ScanTableLteListener
{
    public function handle($event): void
    {
        new ScanTableDomain()->scan('lte');
    }
}
