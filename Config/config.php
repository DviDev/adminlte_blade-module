<?php

return [
    'name' => 'Lte',
    'user' => [
        'profile' => [
            'activity' => env('MODULE_LTE_USER_PROFILE_ACTIVITY', false),
            'timeline' => env('MODULE_LTE_USER_PROFILE_TIMELINE', false),
        ]
    ],
    'theme' => [
        'dark_mode' => env('MODULE_LTE_THEME_DARK_MODE', false),
    ],
];
