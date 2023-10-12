<?php

/*
 * This file is part of the package jweiland/powermail2salesforce.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

if (!defined('TYPO3')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'powermail2salesforce',
    'Configuration/TypoScript',
    'Powermail - Salesforce'
);
