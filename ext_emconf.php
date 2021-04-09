<?php

/**
 * Extension Manager/Repository config file for ext "customer_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Customer Sitepackage',
    'description' => 'Individual sitepackage for SKom customers',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.0.0-11.0.99',
            'skom_sitepackage' => '9.2.0-9.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Skom\\CustomerSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Sven Kalbhenn',
    'author_email' => 'sven@skom.de',
    'author_company' => 'SKom',
    'version' => '9.0.5',
];
