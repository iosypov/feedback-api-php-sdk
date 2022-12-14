<?php

declare(strict_types=1);

/*
 * FeedbackAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FeedbackAPILib\Models;

use stdClass;

/**
 * Feedback object.
 */
class FeedbackContext implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $page;

    /**
     * @var string|null
     */
    private $category;

    /**
     * @var string|null
     */
    private $apiOperationId;

    /**
     * @var string[]|null
     */
    private $tags;

    /**
     * @var string|null
     */
    private $userId;

    /**
     * Returns Page.
     * Page of the feedback.
     */
    public function getPage(): ?string
    {
        return $this->page;
    }

    /**
     * Sets Page.
     * Page of the feedback.
     *
     * @maps page
     */
    public function setPage(?string $page): void
    {
        $this->page = $page;
    }

    /**
     * Returns Category.
     * Category of the feedback.
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * Sets Category.
     * Category of the feedback.
     *
     * @maps category
     */
    public function setCategory(?string $category): void
    {
        $this->category = $category;
    }

    /**
     * Returns Api Operation Id.
     * operationId of the API.
     */
    public function getApiOperationId(): ?string
    {
        return $this->apiOperationId;
    }

    /**
     * Sets Api Operation Id.
     * operationId of the API.
     *
     * @maps apiOperationId
     */
    public function setApiOperationId(?string $apiOperationId): void
    {
        $this->apiOperationId = $apiOperationId;
    }

    /**
     * Returns Tags.
     * Any list of tags to group feedbacks by.
     *
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * Sets Tags.
     * Any list of tags to group feedbacks by.
     *
     * @maps tags
     *
     * @param string[]|null $tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * Returns User Id.
     * Unique identifier of the user.
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * Sets User Id.
     * Unique identifier of the user.
     *
     * @maps userId
     */
    public function setUserId(?string $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->page)) {
            $json['page']           = $this->page;
        }
        if (isset($this->category)) {
            $json['category']       = $this->category;
        }
        if (isset($this->apiOperationId)) {
            $json['apiOperationId'] = $this->apiOperationId;
        }
        if (isset($this->tags)) {
            $json['tags']           = $this->tags;
        }
        if (isset($this->userId)) {
            $json['userId']         = $this->userId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
