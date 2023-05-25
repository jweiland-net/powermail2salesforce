<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Powermail Salesforce',
    'description' => 'Auto maps fields to if fields have the same names',
    'category' => 'plugin',
    'author' => 'Stefan Froemken',
    'author_email' => 'projects@jweiland.net',
    'author_company' => 'jweiland.net',
    'state' => 'stable',
    'version' => '1.0.3',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'powermail' => '6.0.0-6.9.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
