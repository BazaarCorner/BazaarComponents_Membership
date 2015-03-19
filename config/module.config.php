<?php

return [
    'view_manager'  => [
        'display_not_found_reason'  => true,
        'display_exceptions'        => true,
        'doctype'                   => 'HTML5',
        'not_found_template'        => 'error/404',
        'exception_template'        => 'error/index',
        'template_map'              => [
            'member/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'template/partial/socials'   => __DIR__ . '/../view/layout/partial/socials.phtml',
            'template/navigation/sidebar'           => __DIR__ . '/../view/layout/template/navigation/sidebar.phtml',
        ],
        'template_path_stack'       => [
            'bazaar-membership'   => __DIR__ . '/../view'
        ],
    ],
    'module_layouts' => [
        'BazaarCatalog' => 'member/layout',
        'BazaarMembership' => 'member/layout'
    ]
];