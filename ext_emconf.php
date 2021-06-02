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
            'bootstrap_package' => '11.0.3-11.99.99',
            'skom_sitepackage' => '9.2.13-9.99.99',
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
    'clearCacheOnLoad' => true,
    'author' => 'Sven Kalbhenn',
    'author_email' => 'sven@skom.de',
    'author_company' => 'SKom',
    'version' => '9.1.0'
];
