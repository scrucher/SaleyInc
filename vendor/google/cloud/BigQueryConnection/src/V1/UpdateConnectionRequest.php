<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/connection/v1/connection.proto

namespace Google\Cloud\BigQuery\Connection\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [ConnectionService.UpdateConnection][google.cloud.bigquery.connection.v1.ConnectionService.UpdateConnection].
 *
 * Generated from protobuf message <code>google.cloud.bigquery.connection.v1.UpdateConnectionRequest</code>
 */
class UpdateConnectionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the connection to update, for example:
     * `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. Connection containing the updated fields.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.connection.v1.Connection connection = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $connection = null;
    /**
     * Required. Update mask for the connection fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the connection to update, for example:
     *           `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
     *     @type \Google\Cloud\BigQuery\Connection\V1\Connection $connection
     *           Required. Connection containing the updated fields.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Update mask for the connection fields to be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Connection\V1\Connection::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the connection to update, for example:
     * `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the connection to update, for example:
     * `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. Connection containing the updated fields.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.connection.v1.Connection connection = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BigQuery\Connection\V1\Connection|null
     */
    public function getConnection()
    {
        return isset($this->connection) ? $this->connection : null;
    }

    public function hasConnection()
    {
        return isset($this->connection);
    }

    public function clearConnection()
    {
        unset($this->connection);
    }

    /**
     * Required. Connection containing the updated fields.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.connection.v1.Connection connection = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BigQuery\Connection\V1\Connection $var
     * @return $this
     */
    public function setConnection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Connection\V1\Connection::class);
        $this->connection = $var;

        return $this;
    }

    /**
     * Required. Update mask for the connection fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Update mask for the connection fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

