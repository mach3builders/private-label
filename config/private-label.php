<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    /**
     * The default private-label, this get used if there is no private label.
     */
    'default' => [
        'name' => 'Mach3builders',
        'domain' => 'sandbox.test',
        'email' => 'info@mach3builders.nl',
        'logo' => 'assets/logo/logo.png',
        'favicon' => 'assets/favicon/favicon.png'
    ],

    /**
     * This can be any model as long it extends the packages model
     */
    'model' => Mach3builders\PrivateLabel\PrivateLabel::class,
];
