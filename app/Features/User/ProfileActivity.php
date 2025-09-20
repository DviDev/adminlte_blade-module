<?php

declare(strict_types=1);

namespace Modules\Lte\Features\User;

use App\Models\User;

final class ProfileActivity
{
    /**
     * Resolve the feature's initial value.
     */
    public function resolve(User $user): mixed
    {
        return config('lte.user.profile.activity');
    }
}
