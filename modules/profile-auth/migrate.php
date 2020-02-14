<?php

return [
    'Profile\\Model\\Profile' => [
        'fields' => [
            'password' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [],
                'index' => 3500
            ]
        ]
    ],
    'ProfileAuth\\Model\\ProfileSession' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'profile' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'hash' => [
                'type' => 'VARCHAR',
                'length' => 190,
                'attrs' => [
                    'null' => false,
                    'unique' => true 
                ],
                'index' => 3000
            ],
            'expires' => [
                'type' => 'DATETIME',
                'attrs' => [],
                'index' => 4000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 11000
            ]
        ]
    ]
];