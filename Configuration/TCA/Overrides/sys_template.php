<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'powermail2salesforce',
    'Configuration/TypoScript',
    'Powermail - Salesforce'
);
