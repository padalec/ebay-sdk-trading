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
 * @property DateTime $DeliveryDate
 * @property DTS\eBaySDK\Trading\Enums\ShipmentDeliveryStatusCodeType(string) $DeliveryStatus
 * @property DateTime $EstimatedDeliveryDate
 * @property DTS\eBaySDK\Trading\Types\AmountType $InsuredValue
 * @property DTS\eBaySDK\Trading\Types\ItemTransactionIDType $ItemTransactionID
 * @property string $Notes
 * @property DTS\eBaySDK\Trading\Types\MeasureType $PackageDepth
 * @property DTS\eBaySDK\Trading\Types\MeasureType $PackageLength
 * @property DTS\eBaySDK\Trading\Types\MeasureType $PackageWidth
 * @property string $PayPalShipmentID
 * @property DTS\eBaySDK\Trading\Types\AmountType $PostageTotal
 * @property DateTime $PrintedTime
 * @property DateTime $RefundGrantedTime
 * @property DateTime $RefundRequestedTime
 * @property DTS\eBaySDK\Trading\Types\AddressType $ShipFromAddress
 * @property integer $ShipmentID
 * @property DTS\eBaySDK\Trading\Types\ShipmentLineItemType $ShipmentLineItem
 * @property DTS\eBaySDK\Trading\Types\ShipmentTrackingDetailsType $ShipmentTrackingDetails
 * @property string $ShipmentTrackingNumber
 * @property DateTime $ShippedTime
 * @property DTS\eBaySDK\Trading\Types\AddressType $ShippingAddress
 * @property string $ShippingCarrierUsed
 * @property DTS\eBaySDK\Trading\Enums\ShippingFeatureCodeType(string) $ShippingFeature
 * @property DTS\eBaySDK\Trading\Enums\ShippingPackageCodeType(string) $ShippingPackage
 * @property string $ShippingServiceUsed
 * @property DTS\eBaySDK\Trading\Enums\ShipmentStatusCodeType(string) $Status
 * @property DTS\eBaySDK\Trading\Types\MeasureType $WeightMajor
 * @property DTS\eBaySDK\Trading\Types\MeasureType $WeightMinor
 */
class ShipmentType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'DeliveryDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeliveryDate'
        ),
        'DeliveryStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeliveryStatus'
        ),
        'EstimatedDeliveryDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryDate'
        ),
        'InsuredValue' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuredValue'
        ),
        'ItemTransactionID' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemTransactionIDType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ItemTransactionID'
        ),
        'Notes' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Notes'
        ),
        'PackageDepth' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackageDepth'
        ),
        'PackageLength' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackageLength'
        ),
        'PackageWidth' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackageWidth'
        ),
        'PayPalShipmentID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalShipmentID'
        ),
        'PostageTotal' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostageTotal'
        ),
        'PrintedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrintedTime'
        ),
        'RefundGrantedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundGrantedTime'
        ),
        'RefundRequestedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundRequestedTime'
        ),
        'ShipFromAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipFromAddress'
        ),
        'ShipmentID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipmentID'
        ),
        'ShipmentLineItem' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShipmentLineItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipmentLineItem'
        ),
        'ShipmentTrackingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShipmentTrackingDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShipmentTrackingDetails'
        ),
        'ShipmentTrackingNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipmentTrackingNumber'
        ),
        'ShippedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ),
        'ShippingAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ),
        'ShippingCarrierUsed' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCarrierUsed'
        ),
        'ShippingFeature' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingFeature'
        ),
        'ShippingPackage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
        ),
        'ShippingServiceUsed' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceUsed'
        ),
        'Status' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ),
        'WeightMajor' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WeightMajor'
        ),
        'WeightMinor' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WeightMinor'
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
