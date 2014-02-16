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
 * @property DTS\eBaySDK\Shopping\Types\AverageRatingDetailsType $averageRatingDetails
 * @property DTS\eBaySDK\Shopping\Types\FeedbackPeriodType $bidRetractionFeedbackPeriods
 * @property DTS\eBaySDK\Shopping\Types\FeedbackPeriodType $negativeFeedbackPeriods
 * @property integer $neutralCommentCountFromSuspendedUsers
 * @property DTS\eBaySDK\Shopping\Types\FeedbackPeriodType $neutralFeedbackPeriods
 * @property DTS\eBaySDK\Shopping\Types\FeedbackPeriodType $positiveFeedbackPeriods
 * @property DTS\eBaySDK\Shopping\Types\FeedbackPeriodType $totalFeedbackPeriods
 * @property integer $uniqueNegativeFeedbackCount
 * @property integer $uniqueNeutralFeedbackCount
 * @property integer $uniquePositiveFeedbackCount
 */
class FeedbackHistoryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'averageRatingDetails' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AverageRatingDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'AverageRatingDetails'
        ),
        'bidRetractionFeedbackPeriods' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\FeedbackPeriodType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'BidRetractionFeedbackPeriods'
        ),
        'negativeFeedbackPeriods' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\FeedbackPeriodType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'NegativeFeedbackPeriods'
        ),
        'neutralCommentCountFromSuspendedUsers' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NeutralCommentCountFromSuspendedUsers'
        ),
        'neutralFeedbackPeriods' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\FeedbackPeriodType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'NeutralFeedbackPeriods'
        ),
        'positiveFeedbackPeriods' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\FeedbackPeriodType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PositiveFeedbackPeriods'
        ),
        'totalFeedbackPeriods' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\FeedbackPeriodType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'TotalFeedbackPeriods'
        ),
        'uniqueNegativeFeedbackCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UniqueNegativeFeedbackCount'
        ),
        'uniqueNeutralFeedbackCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UniqueNeutralFeedbackCount'
        ),
        'uniquePositiveFeedbackCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UniquePositiveFeedbackCount'
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
