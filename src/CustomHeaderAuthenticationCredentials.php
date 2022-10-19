<?php

declare(strict_types=1);

/*
 * FeedbackAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FeedbackAPILib;

/**
 * Interface for defining the behavior of Authentication.
 */
interface CustomHeaderAuthenticationCredentials
{
    /**
     * String value for xRapidAPIKey.
     */
    public function getXRapidAPIKey(): string;

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $xRapidAPIKey Your Rapid API Key
     */
    public function equals(string $xRapidAPIKey): bool;
}
