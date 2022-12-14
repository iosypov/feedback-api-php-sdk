<?php

declare(strict_types=1);

/*
 * FeedbackAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FeedbackAPILib\Tests\Controllers;

use FeedbackAPILib\Controllers\CredentialsController;
use FeedbackAPILib\Exceptions;

class CredentialsControllerTest extends BaseTestController
{
    /**
     * @var CredentialsController CredentialsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getCredentialsController();
    }

    public function testTestCreateCredentials()
    {
        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createCredentials();
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->assert();
    }
}
