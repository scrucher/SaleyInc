<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Offer that can be puchased for a customer. This is used in
 * ListPurchasableOffer API response.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.PurchasableOffer</code>
 */
class PurchasableOffer extends \Google\Protobuf\Internal\Message
{
    /**
     * Offer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Offer offer = 1;</code>
     */
    private $offer = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Channel\V1\Offer $offer
     *           Offer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Offer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Offer offer = 1;</code>
     * @return \Google\Cloud\Channel\V1\Offer|null
     */
    public function getOffer()
    {
        return isset($this->offer) ? $this->offer : null;
    }

    public function hasOffer()
    {
        return isset($this->offer);
    }

    public function clearOffer()
    {
        unset($this->offer);
    }

    /**
     * Offer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Offer offer = 1;</code>
     * @param \Google\Cloud\Channel\V1\Offer $var
     * @return $this
     */
    public function setOffer($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\Offer::class);
        $this->offer = $var;

        return $this;
    }

}

