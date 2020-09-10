<?php

return [
    '__name' => 'profile-auth',
    '__version' => '0.1.0',
    '__git' => 'git@github.com:getmim/profile-auth.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/profile-auth' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'profile' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'ProfileAuth\\Model' => [
                'type' => 'file',
                'base' => 'modules/profile-auth/model'
            ],
            'ProfileAuth\\Service' => [
                'type' => 'file',
                'base' => 'modules/profile-auth/service'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'profile' => [
                'password' => [
                    'type' => 'delete'
                ]
            ]
        ]
    ],
    'service' => [
        'profile' => 'ProfileAuth\\Service\\Profile'
    ],
    'profileAuth' => [
        'cookie' => [
            'name' => '_pr_auth'
        ]
    ]
];
