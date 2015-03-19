<?php

return [
    'navigation' => [
        'sidebar' => [
            'bazaar-membership' => [
                'label' => 'My Account',
                'route' =>  "#",
                'icon'  => "fa  fa-user",
                'pages' => [
                    'settings' => [
                        'label' => "Account Settings",
                        'route' => "member/account",
                        'icon'  => "fa fa-user",
                    ],
                    // Append Here
                ]
            ],
            'bazaar-catalog'  => []
        ]
    ]
];