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

call_user_func(static function () {
    $fieldMarkerEvalString = $GLOBALS['TCA']['tx_powermail_domain_model_field']['columns']['marker']['config']['eval'];
    $fieldMarkerEvalArray = \TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(',', $fieldMarkerEvalString);
    $newFieldMarkerEvalArray = array_diff($fieldMarkerEvalArray, ['lower']);

    $GLOBALS['TCA']['tx_powermail_domain_model_field']['columns']['marker']['config']['eval']
        = implode(',', $newFieldMarkerEvalArray);
});
