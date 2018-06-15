<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Powermail Salesforce',
    'description' => 'Auto maps fields to if fields have the same names',
    'category' => 'plugin',
    'author' => 'Markus Kugler',
    'author_email' => 'projects@jweiland.net',
    'author_company' => 'jweiland.net',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'powermail' => '6.0.0-6.9.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ]
    ]
];
