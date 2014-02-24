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
 * @property DateTime $estimatedDeliveryMaxTime
 * @property DateTime $estimatedDeliveryMinTime
 * @property DTS\eBaySDK\Shopping\Types\AmountType $importCharge
 * @property DTS\eBaySDK\Shopping\Types\AmountType $shippingInsuranceCost
 * @property DTS\eBaySDK\Shopping\Types\AmountType $shippingServiceAdditionalCost
 * @property DTS\eBaySDK\Shopping\Types\AmountType $shippingServiceCost
 * @property DateTime $shippingServiceCutOffTime
 * @property string $shippingServiceName
 * @property integer $shippingServicePriority
 * @property string $shipsTo
 */
class InternationalShippingServiceOptionType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'estimatedDeliveryMaxTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryMaxTime'
        ),
        'estimatedDeliveryMinTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryMinTime'
        ),
        'importCharge' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ImportCharge'
        ),
        'shippingInsuranceCost' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingInsuranceCost'
        ),
        'shippingServiceAdditionalCost' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceAdditionalCost'
        ),
        'shippingServiceCost' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCost'
        ),
        'shippingServiceCutOffTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCutOffTime'
        ),
        'shippingServiceName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceName'
        ),
        'shippingServicePriority' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServicePriority'
        ),
        'shipsTo' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShipsTo'
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
