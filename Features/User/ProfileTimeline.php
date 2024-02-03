<?php

namespace Modules\Lte\Features\User;

use App\Models\User;

class ProfileTimeline
{
    /**
     * Resolve the feature's initial value.
     */
    public function resolve(User $user): mixed
    {
        return config('lte.user.profile.timeline');
    }
}
