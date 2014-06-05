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
 * @property boolean $IncludeCodiceFiscale
 * @property boolean $IncludeContainingOrder
 * @property boolean $IncludeFinalValueFee
 * @property DTS\eBaySDK\Trading\Enums\InventoryTrackingMethodCodeType(string) $InventoryTrackingMethod
 * @property DateTime $ModTimeFrom
 * @property DateTime $ModTimeTo
 * @property integer $NumberOfDays
 * @property DTS\eBaySDK\Trading\Types\PaginationType $Pagination
 * @property DTS\eBaySDK\Trading\Enums\TransactionPlatformCodeType(string) $Platform
 * @property DTS\eBaySDK\Trading\Types\SKUArrayType $SKUArray
 */
class GetSellerTransactionsRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'IncludeCodiceFiscale' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeCodiceFiscale'
        ),
        'IncludeContainingOrder' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeContainingOrder'
        ),
        'IncludeFinalValueFee' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeFinalValueFee'
        ),
        'InventoryTrackingMethod' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InventoryTrackingMethod'
        ),
        'ModTimeFrom' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ModTimeFrom'
        ),
        'ModTimeTo' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ModTimeTo'
        ),
        'NumberOfDays' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NumberOfDays'
        ),
        'Pagination' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ),
        'Platform' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Platform'
        ),
        'SKUArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SKUArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKUArray'
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
