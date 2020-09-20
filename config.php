<?php

return [
    'database' => [
        'local' => [     
            'driver' => 'mysql', 
            'name' => 'mytodo',
            'username' => 'guille',
            'password' => '',
            'connection' => 'host=127.0.0.1',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            ]
        ],
        'remote' => [
            'driver' => 'pgsql',
            'name' => 'dbname',
            'username' => 'username',
            'password' => 'mypass',
            'connection' => 'host=127.0.0.1',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            ]
        ]
    ]
];
