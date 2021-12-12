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
            'bootstrap_package' => '12.0.1-12.99.99',
            'skom_sitepackage' => '10.0.0-10.99.99',
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
    'version' => '10.0.0'
];
