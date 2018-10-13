<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */
/**
 * @database - configuration for PDO()
 */


return [
    'database' => [
        'name' => 's1133750_boardgamesapp',
        'username' =>   'root',
        'password' =>   'root',
        'connection' => 'mysql:host=127.0.0.1:3307',
        'option1' =>    PDO::ATTR_ERRMODE,
        'option2' =>    PDO::ERRMODE_WARNING
    ]
];