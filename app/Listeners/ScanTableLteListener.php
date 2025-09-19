<?php

declare(strict_types=1);

namespace Modules\Lte\Listeners;

use Modules\DBMap\Domains\ScanTableDomain;

final class ScanTableLteListener
{
    public function handle($event): void
    {
        (new ScanTableDomain)->scan('lte');
    }
}
