<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Powermail Salesforce',
    'description' => 'Auto maps fields to if fields have the same names',
    'category' => 'plugin',
    'author' => 'Stefan Froemken',
    'author_email' => 'projects@jweiland.net',
    'author_company' => 'jweiland.net',
    'state' => 'stable',
    'version' => '2.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.30-11.5.99',
            'powermail' => '10.7.0-10.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
