<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Entity representing a Cloud Identity account which may or may not be
 * associated with a Channel Services API partner.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.CloudIdentityCustomerAccount</code>
 */
class CloudIdentityCustomerAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * True if a Cloud Identity account exists for a specific domain.
     *
     * Generated from protobuf field <code>bool existing = 1;</code>
     */
    private $existing = false;
    /**
     * True if the Cloud Identity account is associated with a customer
     * belonging to the Channel Services partner making the API call.
     *
     * Generated from protobuf field <code>bool owned = 2;</code>
     */
    private $owned = false;
    /**
     * Name of the customer that owns the Cloud Identity account. This field is
     * populated ONLY if owned = true.
     * The customer_name takes the format:
     * accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string customer_name = 3;</code>
     */
    private $customer_name = '';
    /**
     * Cloud Identity ID of the customer. This field is populated ONLY if
     * existing = true.
     *
     * Generated from protobuf field <code>string customer_cloud_identity_id = 4;</code>
     */
    private $customer_cloud_identity_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $existing
     *           True if a Cloud Identity account exists for a specific domain.
     *     @type bool $owned
     *           True if the Cloud Identity account is associated with a customer
     *           belonging to the Channel Services partner making the API call.
     *     @type string $customer_name
     *           Name of the customer that owns the Cloud Identity account. This field is
     *           populated ONLY if owned = true.
     *           The customer_name takes the format:
     *           accounts/{account_id}/customers/{customer_id}
     *     @type string $customer_cloud_identity_id
     *           Cloud Identity ID of the customer. This field is populated ONLY if
     *           existing = true.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * True if a Cloud Identity account exists for a specific domain.
     *
     * Generated from protobuf field <code>bool existing = 1;</code>
     * @return bool
     */
    public function getExisting()
    {
        return $this->existing;
    }

    /**
     * True if a Cloud Identity account exists for a specific domain.
     *
     * Generated from protobuf field <code>bool existing = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setExisting($var)
    {
        GPBUtil::checkBool($var);
        $this->existing = $var;

        return $this;
    }

    /**
     * True if the Cloud Identity account is associated with a customer
     * belonging to the Channel Services partner making the API call.
     *
     * Generated from protobuf field <code>bool owned = 2;</code>
     * @return bool
     */
    public function getOwned()
    {
        return $this->owned;
    }

    /**
     * True if the Cloud Identity account is associated with a customer
     * belonging to the Channel Services partner making the API call.
     *
     * Generated from protobuf field <code>bool owned = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setOwned($var)
    {
        GPBUtil::checkBool($var);
        $this->owned = $var;

        return $this;
    }

    /**
     * Name of the customer that owns the Cloud Identity account. This field is
     * populated ONLY if owned = true.
     * The customer_name takes the format:
     * accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string customer_name = 3;</code>
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customer_name;
    }

    /**
     * Name of the customer that owns the Cloud Identity account. This field is
     * populated ONLY if owned = true.
     * The customer_name takes the format:
     * accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string customer_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_name = $var;

        return $this;
    }

    /**
     * Cloud Identity ID of the customer. This field is populated ONLY if
     * existing = true.
     *
     * Generated from protobuf field <code>string customer_cloud_identity_id = 4;</code>
     * @return string
     */
    public function getCustomerCloudIdentityId()
    {
        return $this->customer_cloud_identity_id;
    }

    /**
     * Cloud Identity ID of the customer. This field is populated ONLY if
     * existing = true.
     *
     * Generated from protobuf field <code>string customer_cloud_identity_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerCloudIdentityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_cloud_identity_id = $var;

        return $this;
    }

}

