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
 * @property integer $buyingGuideCount
 * @property DTS\eBaySDK\Shopping\Types\BuyingGuideDetailsType $buyingGuideDetails
 * @property integer $pageNumber
 * @property integer $positiveHelpfulnessVotes
 * @property DTS\eBaySDK\Shopping\Types\ProductIDType $productId
 * @property integer $reviewCount
 * @property DTS\eBaySDK\Shopping\Types\ReviewDetailsType $reviewDetails
 * @property integer $reviewerRank
 * @property string $reviewsAndGuidesUrl
 * @property integer $totalHelpfulnessVotes
 * @property integer $totalPages
 */
class FindReviewsAndGuidesResponseType extends \DTS\eBaySDK\Shopping\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'buyingGuideCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyingGuideCount'
        ),
        'buyingGuideDetails' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\BuyingGuideDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyingGuideDetails'
        ),
        'pageNumber' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PageNumber'
        ),
        'positiveHelpfulnessVotes' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PositiveHelpfulnessVotes'
        ),
        'productId' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ProductIDType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductID'
        ),
        'reviewCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviewCount'
        ),
        'reviewDetails' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ReviewDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviewDetails'
        ),
        'reviewerRank' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviewerRank'
        ),
        'reviewsAndGuidesUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviewsAndGuidesURL'
        ),
        'totalHelpfulnessVotes' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalHelpfulnessVotes'
        ),
        'totalPages' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalPages'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        $elementNamesMap = self::buildElementNamesMap(self::$propertyTypes);

        list($parentValues, $childValues) = self::getParentValues($elementNamesMap, self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$elementNames)) {
            self::$elementNames[__CLASS__] = array_merge(self::$elementNames[get_parent_class()], $elementNamesMap);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
