..  include:: /Includes.rst.txt


..  _faq:

===
FAQ
===

Does this work with double opt in?
==================================

Yes, this extension adds an powermail finisher and will respect the
powermail workflow.

How to debug POST request to Salesforce?
========================================

With version 2.0.1 we have added a logger to powermail finisher. You can configure
it to store the POST request in TYPO3 logs:

..  code-block:: php

    $GLOBALS['TYPO3_CONF_VARS']['LOG']['JWeiland']['Powermail2salesforce']['writerConfiguration'] = [
        \TYPO3\CMS\Core\Log\LogLevel::DEBUG => [
            \TYPO3\CMS\Core\Log\Writer\FileWriter::class => [
                'logFileInfix' => 'powermail2salesforce',
            ],
        ],
    ];
