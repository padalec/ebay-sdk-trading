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

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\AffiliateTrackingDetailsType $AffiliateTrackingDetails
 * @property boolean $BlockOnWarning
 * @property string $ItemID
 * @property \DTS\eBaySDK\Trading\Types\OfferType $Offer
 * @property \DTS\eBaySDK\Trading\Types\NameValueListArrayType $VariationSpecifics
 */
class PlaceOfferRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'AffiliateTrackingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AffiliateTrackingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AffiliateTrackingDetails'
        ),
        'BlockOnWarning' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BlockOnWarning'
        ),
        'ItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'Offer' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\OfferType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Offer'
        ),
        'VariationSpecifics' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NameValueListArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationSpecifics'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'PlaceOfferRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
