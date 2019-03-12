<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'default' => [
        'name' => 'Mach3builders',
        'domain' => 'sandbox.test',
        'email' => 'info@mach3builders.nl',
        'logo' => 'assets/logo/logo.png',
        'favicon' => 'assets/favicon/favicon.png'
    ],

    // Define the relation ship model that hasOne by the private label
    'relation' => 'App\User',
];
