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
 * @property DTS\eBaySDK\Shopping\Types\AmountType $codcOst
 * @property string $excludeShipToLocation
 * @property boolean $getItFast
 * @property DTS\eBaySDK\Shopping\Types\AmountType $insuranceCost
 * @property DTS\eBaySDK\Shopping\Enums\InsuranceOptionCodeType(string) $insuranceOption
 * @property DTS\eBaySDK\Shopping\Types\AmountType $internationalInsuranceCost
 * @property DTS\eBaySDK\Shopping\Enums\InsuranceOptionCodeType(string) $internationalInsuranceOption
 * @property DTS\eBaySDK\Shopping\Types\InternationalShippingServiceOptionType $internationalShippingServiceOption
 * @property DTS\eBaySDK\Shopping\Types\SalesTaxType $salesTax
 * @property string $shippingRateErrorMessage
 * @property DTS\eBaySDK\Shopping\Types\ShippingServiceOptionType $shippingServiceOption
 * @property DTS\eBaySDK\Shopping\Types\TaxTableType $taxTable
 */
class ShippingDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'codcOst' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CODCost'
        ),
        'excludeShipToLocation' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShipToLocation'
        ),
        'getItFast' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GetItFast'
        ),
        'insuranceCost' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceCost'
        ),
        'insuranceOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceOption'
        ),
        'internationalInsuranceCost' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalInsuranceCost'
        ),
        'internationalInsuranceOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalInsuranceOption'
        ),
        'internationalShippingServiceOption' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\InternationalShippingServiceOptionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'InternationalShippingServiceOption'
        ),
        'salesTax' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\SalesTaxType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SalesTax'
        ),
        'shippingRateErrorMessage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingRateErrorMessage'
        ),
        'shippingServiceOption' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ShippingServiceOptionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceOption'
        ),
        'taxTable' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\TaxTableType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TaxTable'
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
