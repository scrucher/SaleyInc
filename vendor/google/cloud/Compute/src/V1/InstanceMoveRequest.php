<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceMoveRequest</code>
 */
class InstanceMoveRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The URL of the destination zone to move the instance. This can be a full or partial URL. For example, the following are all valid URLs to a zone:
     * - https://www.googleapis.com/compute/v1/projects/project/zones/zone
     * - projects/project/zones/zone
     * - zones/zone
     *
     * Generated from protobuf field <code>string destination_zone = 131854653;</code>
     */
    private $destination_zone = null;
    /**
     * The URL of the target instance to move. This can be a full or partial URL. For example, the following are all valid URLs to an instance:
     * - https://www.googleapis.com/compute/v1/projects/project/zones/zone/instances/instance
     * - projects/project/zones/zone/instances/instance
     * - zones/zone/instances/instance
     *
     * Generated from protobuf field <code>string target_instance = 289769347;</code>
     */
    private $target_instance = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $destination_zone
     *           The URL of the destination zone to move the instance. This can be a full or partial URL. For example, the following are all valid URLs to a zone:
     *           - https://www.googleapis.com/compute/v1/projects/project/zones/zone
     *           - projects/project/zones/zone
     *           - zones/zone
     *     @type string $target_instance
     *           The URL of the target instance to move. This can be a full or partial URL. For example, the following are all valid URLs to an instance:
     *           - https://www.googleapis.com/compute/v1/projects/project/zones/zone/instances/instance
     *           - projects/project/zones/zone/instances/instance
     *           - zones/zone/instances/instance
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The URL of the destination zone to move the instance. This can be a full or partial URL. For example, the following are all valid URLs to a zone:
     * - https://www.googleapis.com/compute/v1/projects/project/zones/zone
     * - projects/project/zones/zone
     * - zones/zone
     *
     * Generated from protobuf field <code>string destination_zone = 131854653;</code>
     * @return string
     */
    public function getDestinationZone()
    {
        return isset($this->destination_zone) ? $this->destination_zone : '';
    }

    public function hasDestinationZone()
    {
        return isset($this->destination_zone);
    }

    public function clearDestinationZone()
    {
        unset($this->destination_zone);
    }

    /**
     * The URL of the destination zone to move the instance. This can be a full or partial URL. For example, the following are all valid URLs to a zone:
     * - https://www.googleapis.com/compute/v1/projects/project/zones/zone
     * - projects/project/zones/zone
     * - zones/zone
     *
     * Generated from protobuf field <code>string destination_zone = 131854653;</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_zone = $var;

        return $this;
    }

    /**
     * The URL of the target instance to move. This can be a full or partial URL. For example, the following are all valid URLs to an instance:
     * - https://www.googleapis.com/compute/v1/projects/project/zones/zone/instances/instance
     * - projects/project/zones/zone/instances/instance
     * - zones/zone/instances/instance
     *
     * Generated from protobuf field <code>string target_instance = 289769347;</code>
     * @return string
     */
    public function getTargetInstance()
    {
        return isset($this->target_instance) ? $this->target_instance : '';
    }

    public function hasTargetInstance()
    {
        return isset($this->target_instance);
    }

    public function clearTargetInstance()
    {
        unset($this->target_instance);
    }

    /**
     * The URL of the target instance to move. This can be a full or partial URL. For example, the following are all valid URLs to an instance:
     * - https://www.googleapis.com/compute/v1/projects/project/zones/zone/instances/instance
     * - projects/project/zones/zone/instances/instance
     * - zones/zone/instances/instance
     *
     * Generated from protobuf field <code>string target_instance = 289769347;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_instance = $var;

        return $this;
    }

}

