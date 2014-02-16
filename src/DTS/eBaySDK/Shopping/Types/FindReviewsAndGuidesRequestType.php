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
 * @property string $categoryId
 * @property integer $maxResultsPerPage
 * @property integer $pageNumber
 * @property DTS\eBaySDK\Shopping\Types\ProductIDType $productId
 * @property DTS\eBaySDK\Shopping\Types\ReviewSortCodeType(string) $reviewSort
 * @property DTS\eBaySDK\Shopping\Types\SortOrderCodeType(string) $sortOrder
 * @property string $userId
 */
class FindReviewsAndGuidesRequestType extends \DTS\eBaySDK\Shopping\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'categoryId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ),
        'maxResultsPerPage' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxResultsPerPage'
        ),
        'pageNumber' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PageNumber'
        ),
        'productId' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ProductIDType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductID'
        ),
        'reviewSort' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviewSort'
        ),
        'sortOrder' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SortOrder'
        ),
        'userId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserID'
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
