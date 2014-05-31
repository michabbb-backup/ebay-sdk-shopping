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
 * @property string $aboutMeUrl
 * @property string $feedbackDetailsUrl
 * @property boolean $feedbackPrivate
 * @property DTS\eBaySDK\Shopping\Enums\FeedbackRatingStarCodeType(string) $feedbackRatingStar
 * @property integer $feedbackScore
 * @property string $myWorldLargeImage
 * @property string $myWorldSmallImage
 * @property string $myWorldUrl
 * @property boolean $newUser
 * @property double $positiveFeedbackPercent
 * @property DateTime $registrationDate
 * @property DTS\eBaySDK\Shopping\Enums\SiteCodeType(string) $registrationSite
 * @property string $reviewsAndGuidesUrl
 * @property DTS\eBaySDK\Shopping\Enums\SellerBusinessCodeType(string) $sellerBusinessType
 * @property string $sellerItemsUrl
 * @property DTS\eBaySDK\Shopping\Enums\SellerLevelCodeType(string) $sellerLevel
 * @property DTS\eBaySDK\Shopping\Enums\UserStatusCodeType(string) $status
 * @property string $storeName
 * @property string $storeUrl
 * @property boolean $topRatedSeller
 * @property boolean $userAnonymized
 * @property string $userId
 */
class SimpleUserType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'aboutMeUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AboutMeURL'
        ),
        'feedbackDetailsUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackDetailsURL'
        ),
        'feedbackPrivate' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackPrivate'
        ),
        'feedbackRatingStar' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackRatingStar'
        ),
        'feedbackScore' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackScore'
        ),
        'myWorldLargeImage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MyWorldLargeImage'
        ),
        'myWorldSmallImage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MyWorldSmallImage'
        ),
        'myWorldUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MyWorldURL'
        ),
        'newUser' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NewUser'
        ),
        'positiveFeedbackPercent' => array(
            'type' => 'double',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PositiveFeedbackPercent'
        ),
        'registrationDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegistrationDate'
        ),
        'registrationSite' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegistrationSite'
        ),
        'reviewsAndGuidesUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviewsAndGuidesURL'
        ),
        'sellerBusinessType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerBusinessType'
        ),
        'sellerItemsUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerItemsURL'
        ),
        'sellerLevel' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerLevel'
        ),
        'status' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ),
        'storeName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreName'
        ),
        'storeUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreURL'
        ),
        'topRatedSeller' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TopRatedSeller'
        ),
        'userAnonymized' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserAnonymized'
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
