<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Shopping\Types;

/**
 *
 * @property boolean $commentReplaced
 * @property string $commentText
 * @property DateTime $commentTime
 * @property DTS\eBaySDK\Shopping\Types\CommentTypeCodeType(string) $commentType
 * @property string $commentingUser
 * @property integer $commentingUserScore
 * @property boolean $countable
 * @property string $feedbackId
 * @property string $feedbackResponse
 * @property string $followUp
 * @property boolean $followUpReplaced
 * @property string $itemId
 * @property DTS\eBaySDK\Shopping\Types\AmountType $itemPrice
 * @property string $itemTitle
 * @property boolean $responseReplaced
 * @property DTS\eBaySDK\Shopping\Types\TradingRoleCodeType(string) $role
 * @property string $transactionId
 */
class FeedbackDetailType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'commentReplaced' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CommentReplaced'
        ),
        'commentText' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CommentText'
        ),
        'commentTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CommentTime'
        ),
        'commentType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CommentType'
        ),
        'commentingUser' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CommentingUser'
        ),
        'commentingUserScore' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CommentingUserScore'
        ),
        'countable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Countable'
        ),
        'feedbackId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackID'
        ),
        'feedbackResponse' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackResponse'
        ),
        'followUp' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FollowUp'
        ),
        'followUpReplaced' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FollowUpReplaced'
        ),
        'itemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'itemPrice' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemPrice'
        ),
        'itemTitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemTitle'
        ),
        'responseReplaced' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ResponseReplaced'
        ),
        'role' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Role'
        ),
        'transactionId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
