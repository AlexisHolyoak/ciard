<?php

return [
    'role_structure' => [
        'superadministrador' => [
            'usuarios' => 'c,r,u,d',
            'roles'=> 'c,r,u,d',
            'perfil' => 'r,u',
            'desastres'=>'c,r,u,d'
        ],
        'evaluador' => [
            'personas' => 'c,r,u,d',
            'infraestructura'=>'c,r,u',
            'edan'=> 'c,r,u'
        ],
        'administrador' => [
            'usuarios' => 'c,r,u,d',
            'perfil' => 'r,u',
            'roles'=> 'c,r,u',
            'evaluadores'=>'c,r,u,d',
            'desastres'=>'c,r,u,d'
        ],
        'usuario' => [
            'pérfil' => 'r,u'
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'perfil' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'crear',
        'r' => 'visualizar',
        'u' => 'actualizar',
        'd' => 'eliminar'
    ]
];
