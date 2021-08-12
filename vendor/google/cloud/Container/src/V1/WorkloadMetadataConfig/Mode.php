<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\WorkloadMetadataConfig;

use UnexpectedValueException;

/**
 * Mode is the configuration for how to expose metadata to workloads running
 * on the node.
 *
 * Protobuf type <code>google.container.v1.WorkloadMetadataConfig.Mode</code>
 */
class Mode
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * Expose all Compute Engine metadata to pods.
     *
     * Generated from protobuf enum <code>GCE_METADATA = 1;</code>
     */
    const GCE_METADATA = 1;
    /**
     * Run the GKE Metadata Server on this node. The GKE Metadata Server exposes
     * a metadata API to workloads that is compatible with the V1 Compute
     * Metadata APIs exposed by the Compute Engine and App Engine Metadata
     * Servers. This feature can only be enabled if Workload Identity is enabled
     * at the cluster level.
     *
     * Generated from protobuf enum <code>GKE_METADATA = 2;</code>
     */
    const GKE_METADATA = 2;

    private static $valueToName = [
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::GCE_METADATA => 'GCE_METADATA',
        self::GKE_METADATA => 'GKE_METADATA',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Mode::class, \Google\Cloud\Container\V1\WorkloadMetadataConfig_Mode::class);
