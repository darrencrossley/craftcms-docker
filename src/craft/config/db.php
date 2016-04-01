<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
    '*' => array(
        'tablePrefix' => 'craft',
        'server' => getenv('DB_HOST'),
        'database' => getenv('DB_NAME'),
        'port' => getenv('DB_PORT'),
        'user' => getenv('DB_USER'),
        'password' => getenv('DB_PASS'),
    ),

);
