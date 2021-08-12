<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\SslCertificateManagedSslCertificate;

use UnexpectedValueException;

/**
 * [Output only] Status of the managed certificate resource.
 *
 * Protobuf type <code>google.cloud.compute.v1.SslCertificateManagedSslCertificate.Status</code>
 */
class Status
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_STATUS = 0;</code>
     */
    const UNDEFINED_STATUS = 0;
    /**
     * Generated from protobuf enum <code>ACTIVE = 314733318;</code>
     */
    const ACTIVE = 314733318;
    /**
     * Generated from protobuf enum <code>MANAGED_CERTIFICATE_STATUS_UNSPECIFIED = 474800850;</code>
     */
    const MANAGED_CERTIFICATE_STATUS_UNSPECIFIED = 474800850;
    /**
     * Generated from protobuf enum <code>PROVISIONING = 290896621;</code>
     */
    const PROVISIONING = 290896621;
    /**
     * Generated from protobuf enum <code>PROVISIONING_FAILED = 76813775;</code>
     */
    const PROVISIONING_FAILED = 76813775;
    /**
     * Generated from protobuf enum <code>PROVISIONING_FAILED_PERMANENTLY = 275036203;</code>
     */
    const PROVISIONING_FAILED_PERMANENTLY = 275036203;
    /**
     * Generated from protobuf enum <code>RENEWAL_FAILED = 434659076;</code>
     */
    const RENEWAL_FAILED = 434659076;

    private static $valueToName = [
        self::UNDEFINED_STATUS => 'UNDEFINED_STATUS',
        self::ACTIVE => 'ACTIVE',
        self::MANAGED_CERTIFICATE_STATUS_UNSPECIFIED => 'MANAGED_CERTIFICATE_STATUS_UNSPECIFIED',
        self::PROVISIONING => 'PROVISIONING',
        self::PROVISIONING_FAILED => 'PROVISIONING_FAILED',
        self::PROVISIONING_FAILED_PERMANENTLY => 'PROVISIONING_FAILED_PERMANENTLY',
        self::RENEWAL_FAILED => 'RENEWAL_FAILED',
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


