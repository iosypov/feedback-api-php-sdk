<?php

declare(strict_types=1);

/*
 * FeedbackAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FeedbackAPILib\Exceptions;

class UnauthorizedException extends ApiException
{
    /**
     * @var string
     */
    private $messageProperty;

    /**
     * Returns Message Property.
     */
    public function getMessageProperty(): string
    {
        return $this->messageProperty;
    }

    /**
     * Sets Message Property.
     *
     * @maps message
     */
    public function setMessageProperty(string $messageProperty): void
    {
        $this->messageProperty = $messageProperty;
    }
}
