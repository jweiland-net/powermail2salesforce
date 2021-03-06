<?php
declare(strict_types = 1);
namespace JWeiland\Powermail2salesforce\Finisher;

/*
 * This file is part of the powermail_finisher project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use In2code\Powermail\Domain\Model\Answer;
use In2code\Powermail\Finisher\SendParametersFinisher;

/**
 * Class SalesforceFinisher
 */
class SalesforceFinisher extends SendParametersFinisher
{
    /**
     * Initialize finisher without overriding original one too much
     *
     * @return void
     */
    public function initializeFinisher()
    {
        $configuration = $this->configuration;
        parent::initializeFinisher();
        $this->configuration = $configuration;
    }

    /**
     * Check if sendPost is activated
     *      - if it's enabled via TypoScript
     *      - if form was final submitted (without optin)
     *
     * @return bool
     */
    protected function isEnabled(): bool
    {
        return $this->configuration['_enable'] === '1' && $this->isFormSubmitted();
    }

    /**
     * Get get params string
     *
     * @return string
     */
    protected function getValues(): string
    {
        $result = '';

        $result .= '&orgid=' . $this->configuration['orgid'];
        $result .= '&recordType=' . $this->configuration['recordType'];
        $result .= '&type=' . $this->configuration['type'];
        $result .= '&origin=' . $this->configuration['origin'];

        /** @var Answer[] $answers */
        $answers = $this->mail->getAnswers();

        foreach ($answers as $answer) {
            switch ($answer->getValueType()) {
                case Answer::VALUE_TYPE_TEXT:
                    $result .= '&' . $answer->getField()->getMarker() . '=' . $answer->getRawValue();
                    break;
                case Answer::VALUE_TYPE_ARRAY:
                    foreach ($answer->getValue() as $value) {
                        $result .= '&' . $answer->getField()->getMarker()
                            . '=' . urlencode($value);
                    }
                    break;
            }
        }

        return $result;
    }
}
