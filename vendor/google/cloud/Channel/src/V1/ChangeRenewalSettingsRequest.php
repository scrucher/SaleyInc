<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CloudChannelService.ChangeRenewalSettings][google.cloud.channel.v1.CloudChannelService.ChangeRenewalSettings].
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ChangeRenewalSettingsRequest</code>
 */
class ChangeRenewalSettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the entitlement to update.
     * The name takes the format:
     * accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Required. New renewal settings.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.RenewalSettings renewal_settings = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $renewal_settings = null;
    /**
     * Optional. A request ID to identify requests. Specify a unique request ID so
     * that if you must retry your request, the server will know to ignore the
     * request if it has already been completed.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same
     * request ID, the server can check if the original operation with the same
     * request ID was received, and if so, will ignore the second request.
     * The request ID must be a valid [UUID](https://tools.ietf.org/html/rfc4122)
     * with the exception that zero UUID is not supported
     * (`00000000-0000-0000-0000-000000000000`).
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the entitlement to update.
     *           The name takes the format:
     *           accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}
     *     @type \Google\Cloud\Channel\V1\RenewalSettings $renewal_settings
     *           Required. New renewal settings.
     *     @type string $request_id
     *           Optional. A request ID to identify requests. Specify a unique request ID so
     *           that if you must retry your request, the server will know to ignore the
     *           request if it has already been completed.
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same
     *           request ID, the server can check if the original operation with the same
     *           request ID was received, and if so, will ignore the second request.
     *           The request ID must be a valid [UUID](https://tools.ietf.org/html/rfc4122)
     *           with the exception that zero UUID is not supported
     *           (`00000000-0000-0000-0000-000000000000`).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the entitlement to update.
     * The name takes the format:
     * accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the entitlement to update.
     * The name takes the format:
     * accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. New renewal settings.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.RenewalSettings renewal_settings = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Channel\V1\RenewalSettings|null
     */
    public function getRenewalSettings()
    {
        return isset($this->renewal_settings) ? $this->renewal_settings : null;
    }

    public function hasRenewalSettings()
    {
        return isset($this->renewal_settings);
    }

    public function clearRenewalSettings()
    {
        unset($this->renewal_settings);
    }

    /**
     * Required. New renewal settings.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.RenewalSettings renewal_settings = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Channel\V1\RenewalSettings $var
     * @return $this
     */
    public function setRenewalSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\RenewalSettings::class);
        $this->renewal_settings = $var;

        return $this;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID so
     * that if you must retry your request, the server will know to ignore the
     * request if it has already been completed.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same
     * request ID, the server can check if the original operation with the same
     * request ID was received, and if so, will ignore the second request.
     * The request ID must be a valid [UUID](https://tools.ietf.org/html/rfc4122)
     * with the exception that zero UUID is not supported
     * (`00000000-0000-0000-0000-000000000000`).
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID so
     * that if you must retry your request, the server will know to ignore the
     * request if it has already been completed.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same
     * request ID, the server can check if the original operation with the same
     * request ID was received, and if so, will ignore the second request.
     * The request ID must be a valid [UUID](https://tools.ietf.org/html/rfc4122)
     * with the exception that zero UUID is not supported
     * (`00000000-0000-0000-0000-000000000000`).
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

