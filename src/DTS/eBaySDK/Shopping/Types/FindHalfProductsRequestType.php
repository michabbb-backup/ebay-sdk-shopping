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
 * @property boolean $availableItemsOnly
 * @property string $domainName
 * @property string $includeSelector
 * @property integer $maxEntries
 * @property integer $pageNumber
 * @property DTS\eBaySDK\Shopping\Types\ProductIDType $productId
 * @property DTS\eBaySDK\Shopping\Enums\ProductSortCodeType(string) $productSort
 * @property string $queryKeywords
 * @property string $sellerId
 * @property DTS\eBaySDK\Shopping\Enums\SortOrderCodeType(string) $sortOrder
 */
class FindHalfProductsRequestType extends \DTS\eBaySDK\Shopping\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'availableItemsOnly' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AvailableItemsOnly'
        ),
        'domainName' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DomainName'
        ),
        'includeSelector' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeSelector'
        ),
        'maxEntries' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxEntries'
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
        'productSort' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductSort'
        ),
        'queryKeywords' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QueryKeywords'
        ),
        'sellerId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerID'
        ),
        'sortOrder' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SortOrder'
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
