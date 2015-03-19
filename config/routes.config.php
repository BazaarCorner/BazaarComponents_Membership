<?php

return [
    'console'   => [], //routing configuration for CLI modules
    'router'    => [
        'routes' => [
            // Default
            'member' => [
                'type'      => 'Literal',
                'options'   => [
                    'route'     => '/member',
                    'defaults'  => [
                        'controller'    => 'BazaarMembership\Controller\Index',
//                        'action'  => 'index'
                    ]
                ],
                'may_terminate' => false,
                'child_routes' => [
                    // Internal functions
                    'account' => [
                        'type'  => "Literal",
                        'options' => [
                            'route' => '/account',
                            'defaults' => [
                                'action'  => 'index',
                            ]
                        ]
                    ],                    
                    'login' => [
                        'type'  => "Literal",
                        'options' => [
                            'route' => '/login',
                            'defaults' => [
                                'controller' => 'BazaarMembership\Controller\Login',
                                'action'  => 'login',
                            ]
                        ]
                    ],
                    'registration' => [
                        'type'  => "Literal",
                        'options' => [
                            'route' => '/registration',
                            'defaults' => [
                                'controller' => 'BazaarMembership\Controller\Registration',
                                'action'  => 'register',
                            ]
                        ]
                    ],                    
                    'forgot-password' => [
                        'type'      => "Segment",
                        'options'   => [
                            'route'     => '/password/recover',
                            'defaults'  => [
                                'action'        => 'recover',
                                'controller'    => 'BazaarMembership\Controller\PasswordReset'
                            ]
                        ]
                    ],
                    'reset-password' => [
                        'type'      => 'Segment',
                        'options'   => [
                            'route'     => '/password/reset',
                            'defaults'  => [
                                'action'        => 'reset',
                                'controller'    => 'BazaarMembership\Controller\PasswordReset'
                            ]
                        ]
                    ]
                ]
            ],
            
            // Member Override config
            'catalog' => [
                'type'      => 'Segment',
                'options'   => [
                    'route'     => '/member/catalog'
                ]
            ],
        ]
    ]
];