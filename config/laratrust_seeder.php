<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'user' => [
            'profile' => 'r,u',
        ],
        'EducationMGT' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'artSSE' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'scienceEdu' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'law' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'pHealth' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'medLab' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'accounting' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'bankingF' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'bizAdmin' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'economics' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'biologySci' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'chemGeo' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'physics' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'computer' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'history' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'islam' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'language' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'massComm' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'pubAdmin' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'sociology' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'agriculture' => [
            'module_1_name' => 'c,r,u,d',
            'profile' => 'r,u'
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
