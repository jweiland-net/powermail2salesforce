<?php
defined('TYPO3_MODE') or die();

$fieldMarkerEvalString = $GLOBALS['TCA']['tx_powermail_domain_model_field']['columns']['marker']['config']['eval'];
$fieldMarkerEvalArray = explode(',', $fieldMarkerEvalString);
$newFieldMarkerEvalArray = array_diff($fieldMarkerEvalArray, ['lower']);

$GLOBALS['TCA']['tx_powermail_domain_model_field']['columns']['marker']['config']['eval']
    = implode(',', $newFieldMarkerEvalArray);
