<?php
/**
 * THE CODE IN THIS FILE WAS GENERATED FROM THE EBAY WSDL USING THE PROJECT:
 *
 * https://github.com/davidtsadler/ebay-api-sdk-php
 *
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
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $CODCost
 * @property string[] $ExcludeShipToLocation
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $InsuranceCost
 * @property \DTS\eBaySDK\Shopping\Enums\InsuranceOptionCodeType $InsuranceOption
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $InternationalInsuranceCost
 * @property \DTS\eBaySDK\Shopping\Enums\InsuranceOptionCodeType $InternationalInsuranceOption
 * @property \DTS\eBaySDK\Shopping\Types\InternationalShippingServiceOptionType[] $InternationalShippingServiceOption
 * @property \DTS\eBaySDK\Shopping\Types\SalesTaxType $SalesTax
 * @property string $ShippingRateErrorMessage
 * @property \DTS\eBaySDK\Shopping\Types\ShippingServiceOptionType[] $ShippingServiceOption
 * @property \DTS\eBaySDK\Shopping\Types\TaxTableType $TaxTable
 */
class ShippingDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'CODCost' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CODCost'
        ),
        'ExcludeShipToLocation' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShipToLocation'
        ),
        'InsuranceCost' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceCost'
        ),
        'InsuranceOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceOption'
        ),
        'InternationalInsuranceCost' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalInsuranceCost'
        ),
        'InternationalInsuranceOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalInsuranceOption'
        ),
        'InternationalShippingServiceOption' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\InternationalShippingServiceOptionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'InternationalShippingServiceOption'
        ),
        'SalesTax' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\SalesTaxType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SalesTax'
        ),
        'ShippingRateErrorMessage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingRateErrorMessage'
        ),
        'ShippingServiceOption' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ShippingServiceOptionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceOption'
        ),
        'TaxTable' => array(
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
