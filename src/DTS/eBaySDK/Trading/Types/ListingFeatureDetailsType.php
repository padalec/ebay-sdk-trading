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

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property DTS\eBaySDK\Trading\Enums\BoldTitleCodeType(string) $BoldTitle
 * @property DTS\eBaySDK\Trading\Enums\BorderCodeType(string) $Border
 * @property string $DetailVersion
 * @property DTS\eBaySDK\Trading\Enums\FeaturedFirstCodeType(string) $FeaturedFirst
 * @property DTS\eBaySDK\Trading\Enums\FeaturedPlusCodeType(string) $FeaturedPlus
 * @property DTS\eBaySDK\Trading\Enums\GiftIconCodeType(string) $GiftIcon
 * @property DTS\eBaySDK\Trading\Enums\HighlightCodeType(string) $Highlight
 * @property DTS\eBaySDK\Trading\Enums\HomePageFeaturedCodeType(string) $HomePageFeatured
 * @property DTS\eBaySDK\Trading\Enums\ProPackCodeType(string) $ProPack
 * @property DateTime $UpdateTime
 */
class ListingFeatureDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'BoldTitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BoldTitle'
        ),
        'Border' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Border'
        ),
        'DetailVersion' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DetailVersion'
        ),
        'FeaturedFirst' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeaturedFirst'
        ),
        'FeaturedPlus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeaturedPlus'
        ),
        'GiftIcon' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GiftIcon'
        ),
        'Highlight' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Highlight'
        ),
        'HomePageFeatured' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HomePageFeatured'
        ),
        'ProPack' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProPack'
        ),
        'UpdateTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
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
