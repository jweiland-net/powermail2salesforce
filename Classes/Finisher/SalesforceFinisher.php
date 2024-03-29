<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/powermail2salesforce.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Powermail2salesforce\Finisher;

use In2code\Powermail\Domain\Model\Answer;
use In2code\Powermail\Finisher\SendParametersFinisher;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;

/**
 * Powermail finisher class to build up connection to salesforce API endpoint
 */
class SalesforceFinisher extends SendParametersFinisher implements LoggerAwareInterface
{
    use LoggerAwareTrait;

    /**
     * Initialize finisher without overriding original one too much
     */
    public function initializeFinisher(): void
    {
        $configuration = $this->configuration;
        parent::initializeFinisher();
        $this->configuration = $configuration;
    }

    /**
     * Check if sendPost is activated
     *      - if it's enabled via TypoScript
     *      - if form was final submitted (without optin)
     */
    protected function isEnabled(): bool
    {
        return $this->configuration['_enable'] === '1' && $this->isFormSubmitted();
    }

    /**
     * Get POST params for curl request (CURLOPT_POSTFIELDS) to salesforce API
     */
    protected function getValues(): string
    {
        $result = '&orgid=' . $this->configuration['orgid'];
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

        $this->logger->debug(
            'Following POST params will be sent to salesforce API',
            [
                'postData' => $result,
                'tsConfig' => $this->configuration,
            ]
        );

        return $result;
    }
}
