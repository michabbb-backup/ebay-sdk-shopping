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
 * @property boolean $autoPay
 * @property boolean $bestOfferEnabled
 * @property integer $bidCount
 * @property DTS\eBaySDK\Shopping\Types\BusinessSellerDetailsType $businessSellerDetails
 * @property boolean $buyItNowAvailable
 * @property DTS\eBaySDK\Shopping\Types\AmountType $buyItNowPrice
 * @property DTS\eBaySDK\Shopping\Types\CharityType $charity
 * @property string $conditionDescription
 * @property string $conditionDisplayName
 * @property integer $conditionId
 * @property DTS\eBaySDK\Shopping\Types\AmountType $convertedBuyItNowPrice
 * @property DTS\eBaySDK\Shopping\Types\AmountType $convertedCurrentPrice
 * @property DTS\eBaySDK\Shopping\Types\CountryCodeType(string) $country
 * @property DTS\eBaySDK\Shopping\Types\AmountType $currentPrice
 * @property string $description
 * @property DTS\eBaySDK\Shopping\Types\DiscountPriceInfoType $discountPriceInfo
 * @property boolean $eBayNowEligible
 * @property DateTime $endTime
 * @property string $excludeShipToLocation
 * @property string $galleryUrl
 * @property boolean $globalShipping
 * @property DTS\eBaySDK\Shopping\Types\HalfItemConditionCodeType(string) $halfItemCondition
 * @property integer $handlingTime
 * @property DTS\eBaySDK\Shopping\Types\SimpleUserType $highBidder
 * @property integer $hitCount
 * @property boolean $integratedMerchantCreditCardEnabled
 * @property integer $itemCompatibilityCount
 * @property DTS\eBaySDK\Shopping\Types\ItemCompatibilityListType $itemCompatibilityList
 * @property string $itemId
 * @property DTS\eBaySDK\Shopping\Types\NameValueListArrayType $itemSpecifics
 * @property DTS\eBaySDK\Shopping\Types\ListingStatusCodeType(string) $listingStatus
 * @property DTS\eBaySDK\Shopping\Types\ListingTypeCodeType(string) $listingType
 * @property string $location
 * @property integer $lotSize
 * @property DTS\eBaySDK\Shopping\Types\AmountType $minimumToBid
 * @property boolean $newBestOffer
 * @property DTS\eBaySDK\Shopping\Types\SiteCodeType(string) $paymentAllowedSite
 * @property DTS\eBaySDK\Shopping\Types\BuyerPaymentMethodCodeType(string) $paymentMethods
 * @property string $pictureUrl
 * @property string $postalCode
 * @property string $primaryCategoryId
 * @property string $primaryCategoryIdpAth
 * @property string $primaryCategoryName
 * @property DTS\eBaySDK\Shopping\Types\ProductIDType $productId
 * @property integer $quantity
 * @property DTS\eBaySDK\Shopping\Types\QuantityAvailableHintCodeType(string) $quantityAvailableHint
 * @property DTS\eBaySDK\Shopping\Types\QuantityInfo $quantityInfo
 * @property integer $quantitySold
 * @property integer $quantitySoldByPickupInStore
 * @property integer $quantityThreshold
 * @property boolean $reserveMet
 * @property DTS\eBaySDK\Shopping\Types\ReturnPolicyType $returnPolicy
 * @property string $secondaryCategoryId
 * @property string $secondaryCategoryIdpAth
 * @property string $secondaryCategoryName
 * @property DTS\eBaySDK\Shopping\Types\SimpleUserType $seller
 * @property string $sellerComments
 * @property string $shipToLocations
 * @property DTS\eBaySDK\Shopping\Types\ShippingCostSummaryType $shippingCostSummary
 * @property DTS\eBaySDK\Shopping\Types\SiteCodeType(string) $site
 * @property string $sku
 * @property DateTime $startTime
 * @property DTS\eBaySDK\Shopping\Types\StorefrontType $storefront
 * @property string $subtitle
 * @property string $timeLeft
 * @property string $title
 * @property boolean $topRatedListing
 * @property DTS\eBaySDK\Shopping\Types\UnitInfoType $unitInfo
 * @property DTS\eBaySDK\Shopping\Types\VariationsType $variations
 * @property boolean $vhrAvailable
 * @property string $vhrUrl
 * @property string $viewItemUrlfOrNaturalSearch
 * @property integer $watchCount
 */
class SimpleItemType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'autoPay' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AutoPay'
        ),
        'bestOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ),
        'bidCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidCount'
        ),
        'businessSellerDetails' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\BusinessSellerDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BusinessSellerDetails'
        ),
        'buyItNowAvailable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowAvailable'
        ),
        'buyItNowPrice' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowPrice'
        ),
        'charity' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\CharityType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Charity'
        ),
        'conditionDescription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionDescription'
        ),
        'conditionDisplayName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionDisplayName'
        ),
        'conditionId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionID'
        ),
        'convertedBuyItNowPrice' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedBuyItNowPrice'
        ),
        'convertedCurrentPrice' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedCurrentPrice'
        ),
        'country' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ),
        'currentPrice' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CurrentPrice'
        ),
        'description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'discountPriceInfo' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\DiscountPriceInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ),
        'eBayNowEligible' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayNowEligible'
        ),
        'endTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ),
        'excludeShipToLocation' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShipToLocation'
        ),
        'galleryUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GalleryURL'
        ),
        'globalShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalShipping'
        ),
        'halfItemCondition' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HalfItemCondition'
        ),
        'handlingTime' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HandlingTime'
        ),
        'highBidder' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\SimpleUserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HighBidder'
        ),
        'hitCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HitCount'
        ),
        'integratedMerchantCreditCardEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ),
        'itemCompatibilityCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityCount'
        ),
        'itemCompatibilityList' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ItemCompatibilityListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityList'
        ),
        'itemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'itemSpecifics' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\NameValueListArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecifics'
        ),
        'listingStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingStatus'
        ),
        'listingType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingType'
        ),
        'location' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Location'
        ),
        'lotSize' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LotSize'
        ),
        'minimumToBid' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumToBid'
        ),
        'newBestOffer' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NewBestOffer'
        ),
        'paymentAllowedSite' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentAllowedSite'
        ),
        'paymentMethods' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ),
        'pictureUrl' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PictureURL'
        ),
        'postalCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ),
        'primaryCategoryId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategoryID'
        ),
        'primaryCategoryIdpAth' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategoryIDPath'
        ),
        'primaryCategoryName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategoryName'
        ),
        'productId' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ProductIDType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductID'
        ),
        'quantity' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ),
        'quantityAvailableHint' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailableHint'
        ),
        'quantityInfo' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\QuantityInfo',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityInfo'
        ),
        'quantitySold' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantitySold'
        ),
        'quantitySoldByPickupInStore' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantitySoldByPickupInStore'
        ),
        'quantityThreshold' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityThreshold'
        ),
        'reserveMet' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReserveMet'
        ),
        'returnPolicy' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ReturnPolicyType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicy'
        ),
        'secondaryCategoryId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategoryID'
        ),
        'secondaryCategoryIdpAth' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategoryIDPath'
        ),
        'secondaryCategoryName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategoryName'
        ),
        'seller' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\SimpleUserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Seller'
        ),
        'sellerComments' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerComments'
        ),
        'shipToLocations' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShipToLocations'
        ),
        'shippingCostSummary' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ShippingCostSummaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCostSummary'
        ),
        'site' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Site'
        ),
        'sku' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ),
        'startTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartTime'
        ),
        'storefront' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\StorefrontType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Storefront'
        ),
        'subtitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Subtitle'
        ),
        'timeLeft' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TimeLeft'
        ),
        'title' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Title'
        ),
        'topRatedListing' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TopRatedListing'
        ),
        'unitInfo' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\UnitInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnitInfo'
        ),
        'variations' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\VariationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Variations'
        ),
        'vhrAvailable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VhrAvailable'
        ),
        'vhrUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VhrUrl'
        ),
        'viewItemUrlfOrNaturalSearch' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ViewItemURLForNaturalSearch'
        ),
        'watchCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WatchCount'
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
